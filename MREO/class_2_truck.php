<?php

class Truck extends Vehicle {

    public $shaft;
    public $weight_trailer;

    public function __construct($arr, $truck) {
        parent::__construct($arr);
        $this->shaft = $truck['shaft'];
        $this->weight_trailer = $truck['weight_trailer'];
    }

}
