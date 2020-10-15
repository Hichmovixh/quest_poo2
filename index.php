<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);

$cars = new Car ('blue',5,'diesel');

$truck1 = new Truck ('green', 2, 'fuel', 100);

echo $truck1->load();
echo $truck1->setLoading(99);
echo '<br>';
echo $truck1->load();
echo $truck1->setLoading(100);
echo '<br>';
echo $truck1->load();
echo '<br>';
echo $truck1->forward();
echo '<br> Vitesse du truck : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du truck : ' . $truck1->getCurrentSpeed() . ' km/h' . '<br>';
