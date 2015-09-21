<?php

class Vehicle {

    public $size; // размер
    public $weight; // вес
    public $max_weight;
    public $engine;
    public $fuel;

    public function __construct($arr) {
        $this->size = $arr['size'];
        $this->weight = $arr['weight'];
        $this->max_weight = $arr['max_weight'];
        $this->engine = $arr['engine'];
        $this->fuel = $arr['fuel'];
    }

//    public function __toString() {
//        echo ' size: ' . $this->size . '<br>
//               weight: ' . $this->weight . '<br>
//               max_weight: ' . $this->max_weight . '<br>
//               engine: ' . $this->engine . '<br>
//               fuel: ' . $this->fuel . '<br>'
//        ;
//    }
}
