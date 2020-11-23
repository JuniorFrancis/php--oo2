<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto;
$prod->preco = 3.00;
$prod->titulo = "Cerveja";
$prod->defineCodigoBarras('001100');

//$prod->detalhes();

$geladeira = new App\Classes\Eletrodomestico;
$geladeira->preco = 1000.00;
$geladeira->titulo = "Geladeira";

$geladeira->defineCodigoBarras('110011');
$geladeira->definirVoltagem(110);
//$geladeira->detalhes();

$microondas = new App\Classes\Microondas;
$microondas->preco = 300;
$microondas->titulo = "X200";

$microondas->defineCodigoBarras('101010');
$microondas->definirVoltagem(110);
$microondas->definirPotencia(550);
$microondas->detalhes();

var_dump($microondas);