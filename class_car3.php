<?php

class Car{

    function MoveWheels(){
        echo "Wheels move";
    }
}
//instances and functionalities of class

$Audi = new Car();
$BMW = new Car();

$Audi->MoveWheels();

$BMW->MoveWheels();

?>