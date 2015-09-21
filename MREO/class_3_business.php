<?php

Final class Business extends Car {

    const taksa = 15;

    function __construct($arr, $car) {
        parent::__construct($arr, $car);
    }

    public function result() {
        return $this->engine / 100 * self::taksa;
    }

    public function __toString() {
        echo ' Class auto: Business <br>
               size: ' . $this->size . '<br>
               weight: ' . $this->weight . '<br>
               max_weight: ' . $this->max_weight . '<br>
               engine: ' . $this->engine . '<br>
               fuel: ' . $this->fuel . '<br><br>
               kpp: ' . $this->kpp . '<br>
               siats: ' . $this->siats . '<br>
               body type: ' . $this->body_type . '<br><br>
               taksa: ' . self::taksa . ' grn\0.1L<br>
               result: ' . $this->result() . ' grn<br>'
        ;
    }

}
