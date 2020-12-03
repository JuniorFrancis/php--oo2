<?php

namespace App\Classes;

class Pedido
{
    private Clientes $cli;
    private Produto $prod;

    public function _construct(Clientes $cliente, Produto $produto)
    {
        $this->cli = $cliente;
        $this->prod = $produto;
    }

    public function getProduto(): Produto
    {
        return $this->prod;
    }
}