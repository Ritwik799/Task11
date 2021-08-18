<?php

use Car as GlobalCar;

class Car{

    //adding properties
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){
        $this->wheels = 10;
    }
}
$Audi = new Car();
$truck = new Car();
echo $Audi->wheels . "<br>";
echo $truck->wheels = 10;



?>