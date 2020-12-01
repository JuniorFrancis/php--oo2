<?php

require_once "../autoload/autoload-psr4.php";
//require_once "../src/Classes/Pedido.php";


$cli = new App\Classes\Clientes;
$cli->setId(1);
$cli->setNome("maria");
$cli->setIdade(30);
$cli->setTelefone('1190909090');

$prod = new App\Classes\Produto("cerveja");
$prod->defineCodigoBarras('121212');
$prod->definePreco(15,90);

$pedido = new App\Classes\Pedido($cli, $prod);
$pedido->getProduto()->detalhes();

// $pedido->cli = $cli;
// $pedido->produto = $produto;
var_dump($pedido);