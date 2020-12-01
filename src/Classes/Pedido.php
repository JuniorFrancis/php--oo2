<?php

namespace App\Classes;

class Pedido
{
    private Cliente $cli;
    private Produto $prod;

    public function _construct(Cliente $cliente, Produto $produto)
    {
        $this->cli = $cliente;
        $this->prod = $produto;
    }

    public function getProduto() : Produto
    {
        return $this->prod;
    }
}