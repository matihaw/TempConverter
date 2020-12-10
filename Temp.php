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
     * @return int
     */
    public function getUnit(): int {
        return $this->unit;
    }

    /**
     * @param int $unit
     */
    public function setUnit(int $unit) {
        $this->unit = $unit;
    }

    /**
     * @param int $outputUnit
     * 1 - Celcius
     * 2 - Fahrenheit
     * 3 - Kalwin
     */
    public function convertValue(int $outputUnit){
        switch ($this->unit){
            case 1:
                switch ($outputUnit) {
                    case 1:
                        break;
                    case 2:
                        $this->value = ($this->value * 9 / 5) + 32;
                        break;
                    case 3:
                        $this->value += 273.15;
                        break;
                }
                break;
            case 2:
                switch ($outputUnit) {
                    case 1:
                        $this->value = ($this->value - 32) * 5 / 9;
                        break;
                    case 2:
                        break;
                    case 3:
                        $this->value = ($this->value + 459.67) * 5 / 9;
                        break;
                }
                break;
            case 3:
                switch ($outputUnit) {
                    case 1:
                        $this->value = $this->value - 273.15 ;
                        break;
                    case 2:
                        $this->value = ($this->value * 9/5) - 459.67  ;
                        break;
                    case 3:
                        break;
                }
                break;
            default:
                break;
        }
    }

}