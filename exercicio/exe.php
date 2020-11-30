<?php

//require_once "../autoload/autoload-psr4.php";
require_once "teste.php";

$calc = new Calculadora;

$calc->n = 6;
//$calc->contador;
$calc->divisao_soma($calc->n);

