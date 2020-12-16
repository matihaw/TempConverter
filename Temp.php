<?php

class Temp {
    private $value;
    private $unit;

    /**
     * Temp constructor.
     * @param $value
     * @param $unit
     */
    public function __construct($value, $unit) {
        $this->value = $value;
        $this->unit = $unit;
    }

    /**
     * @return float
     */
    public function getValue(): float {
        return $this->value;
    }

    /**
     * @param float  $value
     */
    public function setValue(float $value) {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getUnit(): string {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit) {
        $this->unit = $unit;
    }

    /**
     * @param string $outputUnit
     */
    public function convertValue(string $outputUnit){
        switch ($this->unit){
            case "Celcius":
                switch ($outputUnit) {
                    case "Celcius":
                        break;
                    case "Fahrenheit":
                        $this->value = ($this->value * 9 / 5) + 32;
                        break;
                    case "Kalwin":
                        $this->value += 273.15;
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($outputUnit) {
                    case "Celcius":
                        $this->value = ($this->value - 32) * 5 / 9;
                        break;
                    case "Fahrenheit":
                        break;
                    case "Kalwin":
                        $this->value = ($this->value + 459.67) * 5 / 9;
                        break;
                }
                break;
            case "Kalwin":
                switch ($outputUnit) {
                    case "Celcius":
                        $this->value = $this->value - 273.15 ;
                        break;
                    case "Fahrenheit":
                        $this->value = ($this->value * 9/5) - 459.67  ;
                        break;
                    case "Kalwin":
                        break;
                }
                break;
            default:
                break;
        }
    }

}