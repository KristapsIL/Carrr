<?php
abstract class PropulsionSystem {
    public $power;
    public $fuelType;
    protected $efficiency;

    public function __construct($power, $fuelType, $efficiency) {
        $this->power = $power;
        $this->fuelType = $fuelType;
        $this->efficiency = $efficiency;
    }
    public abstract function work():string;
}