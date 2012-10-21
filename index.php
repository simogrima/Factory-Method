<?php
require_once 'carFactory.php';
require_once 'ferrari.php';
require_once 'lamborghini.php';
require_once 'bianchina.php';


//Creo "fabbrica di macchine"
$carFactory = new CarFactory();

//Creo una macchina
$Ferrari = $carFactory->createCar('Ferrari');
//Ottengo il tipo.
$Ferrari->getType();

$Lamborghini = $carFactory->createCar('Lamborghini');
$Lamborghini->getType();

$Bianchina = $carFactory->createCar('Bianchina');
$Bianchina->getType();
?>