<?php

require_once 'Bicycle.php';
$bike = new Bike("red", 1, 2);

// var_dump($bike);

$bike->setCurrentSpeed(0);
// var_dump($bike);

// Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// require_once 'Car.php';
// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);
// var_dump(Car::ALLOWED_ENERGIES);

// require_once 'Truck.php';
// $truck = new Truck('green', 4, 8, 'electric', 2000);
// echo $truck->forward();
// var_dump($truck);
// var_dump(Truck::ALLOWED_ENERGIES);

require_once 'MotorWay.php';
$test = new MotorWay();
var_dump($test);
