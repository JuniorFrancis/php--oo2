<?php 


require_once "../autoload/autoload-psr4.php";


$cliente = new App\Classes\Clientes;

$cliente->setNome("Junior");
$cliente->setIdade(20);
$cliente->setEndereco("R. Andaraí");
$cliente->setTelefone("11955807069");
$cliente->setId(1);

var_dump($cliente); 
