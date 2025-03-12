<?php
require_once "PropulsionSystem.php";
class ElectricMotor extends PropulsionSystem{
    public function work():string{
        return "Zumm, zumm";
    }
}