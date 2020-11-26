<?php 

require_once "../autoload/autoload-psr4.php";



$prod = new App\Classes\Produto("Cerveja");
$prod->definePreco(14);
$prod->defineCodigoBarras('0001');

$prod->detalhes();
$prod->retornaDetalhes();