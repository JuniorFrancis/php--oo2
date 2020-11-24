<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    private string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }
    //Propriedade em tempo de execução 
   /* -- Quando adicionamos uma propriedade no meio da execução,
   diferentemente de adicionarmos esta propriedade da declaração da classe*/
   public function defineCodigoBarras(string $codigo): void
   {
    $this->codigoBarras = $codigo;
   }

   public function acessaCodigoBarras(): void
   {
    echo "<br>" . $this->codigoBarras;
   }

   public function detalhes(): void
   {
       echo "Título: " . $this->titulo . "<br>";
   }
}