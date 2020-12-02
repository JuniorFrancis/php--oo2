<?php

namespace App\Classes;

require_once "../autoload/autoload-psr4.php";

class Vendedor
{
    static public float $bonus = 1.2;
    static public float $comissao = 2.5;
    static public function comissao(bool $temBonus): float
    {
        if($temBonus){
            return self::$comissao * self::$bonus;
        }

       return self::$comissao;
    }

    static public function calculaComissaao(bool $temBonus, float $valor): float
    {
        $porcentagemComissao = self::comissao($temBonus) / 100;

        return $porcentagemComissao * $valor;
    }
}