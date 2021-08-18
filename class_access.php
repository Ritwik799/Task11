<?php

use Car as GlobalCar;

class Car{

    //adding properties
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty(){  //PRIVATE
    echo $this->engine;
}

   // function showProperty() { //public
  //  echo $this->hood;

 //   }
// }
   }

$Audi = new Car();
$semi = new Semi();
//echo $Audi->showProperty();

class Semi extends Car {
//function showProperty(){  //PROTECTED
  //  echo $this->hood;
}
echo $Audi->showProperty();
//}
//echo $semi->showProperty();
?>