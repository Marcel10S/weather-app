<?php

namespace App\Controller;

use App\Entity\WeatherForecast;
use Doctrine\ORM\Tools\Pagination\Paginator;
use src\ApiHandlers\WeatherApiHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    const PAGE_SIZE = 10;
    const ADD_RECORD_FAIL_RESPONSE = [
        'error' => true,
        'error_msg' => 'Failed in record adding',
    ];
    const ADD_RECORD_SUCCESS_RESPONSE = [
        'error' => false,
        'error_msg' => null,
        'new_record_data' => null,
    ];

    /**
     * @Route("/weatherAdd", name="app_weather")
     */
    public function index()
    {
        return $this->render("weather/index.html.twig", ['controller_name' => 'WeatherController']);
    }

    /**
     * @Route("/", name="app_add_weather_forecast")
     */
    public function addRecord(Request $request)
    {
        if (!$request->isXMLHttpRequest()) {
            return new JsonResponse(static::ADD_RECORD_FAIL_RESPONSE);
        }
        $content = $request->getContent();
        if (empty($content)) {
            return new JsonResponse(static::ADD_RECORD_FAIL_RESPONSE);
        }
        $arguments = json_decode($content, true);
        $weatherApiData = (new WeatherApiHandler($arguments['lat'], $arguments['lng']))->getFillEntityMap();
        $weatherForecast = new WeatherForecast();
        $weatherForecast->fillEntityByMap($weatherApiData);

        $em = $this->getDoctrine()->getManager();
        $em->persist($weatherForecast);
        $em->flush();

        $response = static::ADD_RECORD_SUCCESS_RESPONSE;
        $response['new_record_data'] = $weatherApiData;
        return new JsonResponse($response);
    }

    /**
     * @Route("/weatherForecasts", name="app_weather_forecasts", requirements={"page"="\d+"})
     */
    public function weatherForecasts()
    {
        $currentPage = (int) $_GET['currentPage'];
        if (empty($currentPage) || $currentPage <= 1) {
            $currentPage = 1;
        }
        $em = $this->getDoctrine()->getManager();
        $developers = $em->getRepository(WeatherForecast::class);
        $query = $developers->createQueryBuilder('c')
            ->orderBy('c.date_entered', 'DESC')
            ->getQuery();
        $paginator = new Paginator($query);
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / static::PAGE_SIZE);
        $paginator
            ->getQuery()
            ->setFirstResult(static::PAGE_SIZE * ($currentPage - 1))
            ->setMaxResults(static::PAGE_SIZE);
        $weatherData = [];
        foreach ($paginator as $pageItem) {
            $weatherData[] = [
                'date_entered' => $pageItem->getDateEntered()->format("Y-m-d H:m"),
                'temperature' => $pageItem->getTemperature(),
                'cloudy' => $pageItem->getCloudy(),
                'wind' => $pageItem->getWind(),
                'city_name' => $pageItem->getCityName(),
            ];
        }
        return $this->render("weather/weatherForecasts.html.twig", [
            'controller_name' => 'WeatherController',
            'weatherData' => $weatherData,
            'totalItems' => $totalItems,
            'pagesCount' => $pagesCount,
            'currentPage' => $currentPage,
        ]);
    }
}
