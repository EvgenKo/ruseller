<?php

$size = $_POST['size'];
$weight = $_POST['weight'];
$max_weight = $_POST['max_weight'];
$engine = $_POST['engine'];
$fuel = $_POST['fuel'];
switch ($fuel) {
    case 'petrol': $fuel = 'Бензин';
        break;
    case 'diesel': $fuel = 'Дизель';
        break;
    case 'gas': $fuel = 'Газ';
        break;
}
$kpp = $_POST['kpp'];
switch ($kpp) {
    case 'akpp':$kpp = 'Автомат';
        break;
    case 'mkpp':$kpp = 'Механика';
        break;
}
$siats = $_POST['siats'];
$body_type = $_POST['body_type'];
switch ($body_type) {
    case 'sedan': $body_type = 'Седан';
        break;
    case 'cabrio': $body_type = 'Кабриолет';
        break;
    case 'miniven': $body_type = 'Минивен';
        break;
    case 'offroad': $body_type = 'Внедорожник';
        break;
    case 'hetch': $body_type = 'Хетчбек';
        break;
    case 'univers': $body_type = 'Универсал';
        break;
}
$shaft = $_POST['shaft'];
$weight_trailer = $_POST['shaft'];

require_once 'class_1_vehicle.php';
require_once 'class_2_car.php';
require_once 'class_2_truck.php';
require_once 'class_3_light.php';
require_once 'class_3_business.php';
require_once 'class_3_compact.php';
require_once 'class_3_heavy.php';
require_once 'class_3_suv.php';

$vehicle = array("size" => $size,
    "weight" => $weight,
    "max_weight" => $max_weight,
    "engine" => $engine,
    "fuel" => $fuel);
$car = array(
    "kpp" => $kpp,
    "siats" => $siats,
    "body_type" => $body_type);
$truck = array(
    "shaft" => $shaft,
    "weight_trailer" => $weight_trailer);
if(empty($weight)) {
    echo "Input car weight!";
} //проверка на пустоту
else {
    if($weight <= 1299) {
        $obj = new Compact($vehicle, $car);
        $obj->__toString();
    }
    if(($weight >= 1300)and ( $weight <= 1699)) {
        $obj = new Business($vehicle, $car);
        $obj->__toString();
    }
    if(($weight >= 1700)and ( $weight <= 2699)) {
        $obj = new Suv($vehicle, $car);
        $obj->__toString();
    }
    if(($weight >= 2700)and ( $weight <= 4999)) {
        $obj = new Light($vehicle, $truck);
        $obj->__toString();
    }
    if(($weight >= 5000)and ( $weight <= 22000)) {
        $obj = new Heavy($vehicle, $truck);
        $obj->__toString();
    }
}