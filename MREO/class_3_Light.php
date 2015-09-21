<?php

Final class Light extends Truck {

    const taksa = 25;

    function __construct($arr, $truck) {
        parent::__construct($arr, $truck);
    }

    public function result() {
        return $this->engine / 100 * self::taksa;
    }

    public function __toString() {
        echo ' Class auto: Light truck <br>
               size: ' . $this->size . '<br>
               weight: ' . $this->weight . '<br>
               max_weight: ' . $this->max_weight . '<br>
               engine: ' . $this->engine . '<br>
               fuel: ' . $this->fuel . '<br><br>
               shaft: ' . $this->shaft . '<br>
               weight_trailer: ' . $this->weight_trailer . '<br><br>
               taksa: ' . self::taksa . ' grn\0.1L<br>
               result: ' . $this->result() . ' grn<br>'
        ;
    }

}
