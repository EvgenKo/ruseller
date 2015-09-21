<?php

class Car extends Vehicle {

    public $kpp;
    public $siats;
    public $body_type;

    public function __construct($arr, $car) {
        parent::__construct($arr);
        $this->kpp = $car['kpp'];
        $this->siats = $car['siats'];
        $this->body_type = $car['body_type'];
    }

}
