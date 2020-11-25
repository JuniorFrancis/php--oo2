<?php


require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja") ;
$prod->defineCodigoBarras('110110');
$prod->definePreco(2.5);
$prod->acessaCodigoBarras();