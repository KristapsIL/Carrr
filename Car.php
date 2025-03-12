<?php
require "Tire.php";
require_once "PropulsionSystem.php";
require_once "ElectricMotor.php";
require_once "ICEngine.php";


class Car {
    public $color;
    public $brand;
    private $releaseYear;
    private $propulsionType;
    private $tires = [];
    public $propulsionSystems = [];

    public function __construct(string $color, string $brand, int $releaseYear, string $propulsionType, int $pressure, int $size) {
        $this->color = $color;
        $this->brand = $brand;
        $this->releaseYear = $releaseYear;
        $this->propulsionType = $propulsionType;

        // Fix: Initialize 4 tire objects correctly
        for ($i = 0; $i < 4; $i++) {
            $this->tires[] = new Tire($pressure, $size);
        }

        // Fix: Ensure correct propulsion system creation
        if ($propulsionType === "ICE") {
            $this->propulsionSystems[] = new ICEngine(200, "Gasoline", 75.3, 2.0, 4);
        } elseif ($propulsionType === "Electric") {
            $this->propulsionSystems[] = new ElectricMotor(150, "Electricity", 90.5);
        } elseif ($propulsionType === "Hybrid") {
            $this->propulsionSystems[] = new ICEngine(150, "Gasoline", 70.0, 1.6, 4);
            $this->propulsionSystems[] = new ElectricMotor(100, "Electricity", 95.0);
        }
    }

    public function move() {
        // Implement movement logic if necessary
    }

    public function makeNoise() {
        return "Beep, beep!";
    }
}
