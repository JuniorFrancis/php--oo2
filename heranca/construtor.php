<?php

require_once "../autoload/autoload-psr4.php";

// $prod = new App\Classes\Produto("Cerveja");
// $prod->detalhes();

// $ele = new App\Classes\Eletrodomestico("Freezer", 110);
// $ele->detalhes();

$ele = new App\Classes\Microondas("Brastemmp",110,700) ;
$ele->detalhes();