<?php

namespace App;

use App\Services\Geolocation\Geolocation;

class Playground
{
    private $geolocation;
    public function __construct(Geolocation $geolocation)
    {
        $this->geolocation = $geolocation; 
    }

    public function find(string $address)
    {
        return $this->geolocation->search($address);
    }
}
