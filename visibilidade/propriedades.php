<?php


require_once "../autoload/autoload-psr4.php";

$ele = new App\Classes\Microondas("Brastemmp",110,700) ;
$ele->definePreco(2.500);
$ele->detalhes();