<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/weatherAdd' => [[['_route' => 'app_weather', '_controller' => 'App\\Controller\\WeatherController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_add_weather_forecast', '_controller' => 'App\\Controller\\WeatherController::addRecord'], null, null, null, false, false, null]],
        '/weatherForecasts' => [[['_route' => 'app_weather_forecasts', '_controller' => 'App\\Controller\\WeatherController::weatherForecasts'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
