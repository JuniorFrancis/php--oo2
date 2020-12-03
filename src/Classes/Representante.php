<?php 
namespace App\Classes;

class Representante extends Vendedor
{
    static protected function comissao(bool $temBonus): float
    {
        if($temBonus)
        {
            return (parent::$comissao * parent::$bonus) + 1;
        }
        
        return parent::$comissao + 1;
    }

}