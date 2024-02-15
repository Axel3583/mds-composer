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
}