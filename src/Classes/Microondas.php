<?php

namespace App\Classes;

class Microondas extends Eletrodomestico
{
    public int $potencia;

    public function definirPotencia(int $potencia): void
    {
            $this->potencia = $potencia;
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br>Potencia: " . $this->potencia . "<br>";
    }



}