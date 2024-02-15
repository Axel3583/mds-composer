<?php

namespace App\Mydigitalschool;

class TemperatureConverter
{
    public function convert($temperature, $unite) {
        if ($unite === 'C') {
            $fahrenheit = ($temperature * 9 / 5) + 32;
            return $fahrenheit;
        } else if ($unite === 'F') {
            $celsuis = ($temperature - 32) * 5 / 9;
            return $celsuis;
        } else {
            throw new Exception("Error Processing Request", 1);
        }
        
    }

    public function convertCelsiusToFahrenheit($temperature) {
        return $this->convert($temperature, 'C');
    }

    public function convertFahrenheitToCelsius($temperature) {
        return $this->convert($temperature, 'F');
    }

    public function convertCelsiusToKelvin($temperature) {
        return $temperature + 273.15;
    }

    public function convertKelvinToCelsius($temperature) {
        return $temperature - 273.15;
    }

    public function convertFahrenheitToKelvin($temperature) {
        return $this->convertCelsiusToKelvin($this->convertFahrenheitToCelsius($temperature));
    }

    public function convertKelvinToFahrenheit($temperature) {
        return $this->convertCelsiusToFahrenheit($this->convertKelvinToCelsius($temperature));
    }

    public function convertMilesToKilometers($miles) {
        return $miles * 1.60934;
    }

    public function convertKilometersToMiles($kilometers) {
        return $kilometers / 1.60934;
    }
    
}