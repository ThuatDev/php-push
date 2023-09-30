<?php
require_once 'classes/Car.php';

$car = new Car('Red', 'Honda');

//echo $car->getInfo();

echo $car->getColor().'<br/>';

echo $car->getBrand().'<br/>';