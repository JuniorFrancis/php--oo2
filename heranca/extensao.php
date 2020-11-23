<?php

require_once "../autoload/autoload-psr4.php";

$obj = new App\Classes\Microondas;
$obj->preco = 950.00;
$obj->titulo = "Microondas";

$obj->defineCodigoBarras('001100');
$obj->definirPotencia(660);
$obj->definirVoltagem(110);
$obj->mostrar();


var_dump($obj);