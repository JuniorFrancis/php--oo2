<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;
use App\Classes\Representante;

// echo Representante::comissao(false);
// echo Vendedor::calculaComissao(true, 100_000);
// echo "<br>";
// echo Representante::calculaComissao(true, 100_000);
$joao = new Vendedor;
$joao->addVendas(100_000);
echo $joao->minhaComissao();