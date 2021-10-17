<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();


require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();

require_once 'Truck.php';
$truck = new Truck ('pink', 2, 'fuel', 0, 100);
echo $truck->brake();
var_dump($truck);
