<?php
class Tire{
    public $pressure;
    public $size;

    public function __construct(int $pressure,int $size){
        $this->pressure = $pressure;
        $this->size = $size;
    }
}