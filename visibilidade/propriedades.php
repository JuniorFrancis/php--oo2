<?php


require_once "../autoload/autoload-psr4.php";

$ele = new App\Classes\Eletrodomestico('Geladeira', 110) ;
//$ele->definePreco(2.500);
$ele->detalhes();