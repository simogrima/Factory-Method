<?php

//Prodotto. Classe astratta da cui deriveranno tutti Prodotti Concreti.
abstract class Car {
    public function getType(){
        echo $this->_type . PHP_EOL;
    }
}

?>
