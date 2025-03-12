<?php
require "Car.php";

// Izveidojam hibrīda automašīnu
$myCar = new Car("Red", "Toyota", 2023, "Hybrid", 32, 17);

// Atrodam un izsaucam ElectricMotor metodi work()
foreach ($myCar->propulsionSystems as $propulsion) {
    if ($propulsion instanceof ElectricMotor) {
        echo $propulsion->work(); // Būtu jāizvada "Zumm, zumm"
    }
}