<?php
require_once 'car.php';

//Classe che contiene tutti i dettagli su come fare una Bianchina.
class Bianchina extends Car{
    protected $_type = "Bianchina";
    
    // overidde del metodo
    public function getType(){
        echo $this->_type . ' ma esiste ancora?';
    }
    //Altro codice che rende questa vettura diversa dalle altre.
}

?>