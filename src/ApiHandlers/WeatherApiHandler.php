<?php

namespace src\ApiHandlers;

use DateTime;

//wydzielone miejsce na logiki biznesowe tak aby nie obciążać kontrolera

class WeatherApiHandler
{
    const ENTITY_TO_WEATHER_API_CURRENT_MAP = [
        'cloudy' => 'clouds',
        'temperature' => 'temp',
        'wind' => 'wind_speed',
    ];

    const ENTITY_TO_WEATHER_API_WEATHER_MAP = [
        'descriprion' => 'description',
    ];

    const ENTITY_TO_REQUEST_MAP = [
        'date_entered' => 'dateEntered',
        'lat' => 'lat',
        'ing' => 'lon',
    ];

    private $dateStart;
    private $dateEnd;
    private $executeTime;
    private $weatherData;
    private $lat;
    private $lon;

    public function __construct($lat, $lon)
    {
        $this->dateStart = new \DateTime();
        if (empty($lat) || empty($lon)) {
            return false;
        }
        $json = file_get_contents(
            "https://api.openweathermap.org/data/2.5/onecall?lat={$lat}&lon={$lon}&exclude=minutely,hourly,daily,alerts&appid=2782634eed1c90284914691197d5acc4"
        );
        $this->weatherData = json_decode($json, true);
        $this->lat = $lat;
        $this->lon = $lon;
        $this->dateEntered = (new DateTime());
    }

    public function getFillEntityMap(): array
    {
        $fillEntityMap = [];
        foreach (static::ENTITY_TO_WEATHER_API_CURRENT_MAP as $entity_field => $api_field) {
            $fillEntityMap[$entity_field] = $this->weatherData['current'][$api_field];
        }
        foreach (static::ENTITY_TO_WEATHER_API_WEATHER_MAP as $entity_field => $api_field) {
            $fillEntityMap[$entity_field] = $this->weatherData['current']['weather'][0][$api_field];
        }
        foreach (static::ENTITY_TO_REQUEST_MAP as $entity_field => $request_field) {
            $fillEntityMap[$entity_field] = $this->$request_field;
        }
        $this->dateEnd = new \DateTime();
        $this->calculateExecuteTime();
        $fillEntityMap['execute_time'] = $this->executeTime + 1;
        return $fillEntityMap;
    }

    protected function calculateExecuteTime()
    {
        $this->executeTime = $this->dateEnd->diff($this->dateStart)->s;
    }
}
