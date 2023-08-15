<?php

namespace App;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class PlaywithFacade
{
    public function __construct(Geolocation $geolocation)
    {
        $results = GeolocationFacade::search('ppp');
        $said = GeolocationFacade::sayCheese();
        dump($results);
        dump($said);
    }
}
