<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;

echo Vendedor::CalculaComissao(true, 100_000);
Vendedor::$bonus = 1.5;
