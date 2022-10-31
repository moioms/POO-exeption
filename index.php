<?php
require "Car.php";

$car = new Car();

try {
    $car->start();
} catch (LogicException $th) {
    echo "$th";
    $car->setParkBrake(false);
    echo "Désactivation frein a main" . "<br>";
} catch (Exception $th) {
    var_dump($th);
} finally {
    echo "Ma voiture roule comme un donut";
}
