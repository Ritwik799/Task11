<?php

use Car as GlobalCar;

class Car{

    //adding properties
    static $wheels = 4;
    var $hood = 1;


    function MoveWheels(){
        Car::$wheels = 10;
    }
}
$Audi = new Car();

//$Audi->wheels;

echo Car::$wheels;


?>