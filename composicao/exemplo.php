<?php

require_once "../autoload/autoload-psr4.php";
//require_once "../src/Classes/Pedido.php";

$cliente = new App\Classes\Clientes;
$cliente->setId(1);
$cliente->setNome("maria");
$cliente->setIdade(30);
$cliente->setTelefone('1190909090');

$produto = new App\Classes\Produto("cerveja");
$produto->defineCodigoBarras('121212');
$produto->definePreco(15.90);

$pedido = new App\Classes\Pedido($cliente, $produto);
$pedido->_construct($cliente, $produto);
$pedido->getProduto()->detalhes();