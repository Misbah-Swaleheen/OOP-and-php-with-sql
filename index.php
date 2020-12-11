<?php

class car {
  
    public $name;
    public $color;

    function drive(){
        echo "driving . . . ";
    }

    function accelerate(){
        echo "accelerating . . . ";
    }

    function breaks(){
        echo "breaks . . .";
    }
}

$myCar = new car;
$myCar -> $anme = 'Toyota Corolla';
$myCar-> drive();
$myCar-> breaks();

$yourCar = new car;

$yourCar->drive();
$yourCar->accelerate();


?>