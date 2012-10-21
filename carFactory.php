<?php

//Creatore Conreto.
class CarFactory {   
    //Matodo factory, che si occupa di creare gli oggetti.
    public static function createCar($carType){
        if (class_exists($carType)) {
            return new $carType;
        } else {
            die("Tipo di macchina sconosciuto");
        }
    }   
}

?>