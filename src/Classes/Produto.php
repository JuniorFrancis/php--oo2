<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    private string $titulo;
    public string $descricao = "Produtos em geral";
    private float $preco;
    private string $codigoBarras;

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

   private function acessaCodigoBarras(): void
   {
    echo "<br>Código de barras no produto" . $this->codigoBarras;
   }

   public function definePreco(float $preco) : void
   {
       if($preço > 0)
       {
        $this->preco = $preco;
       }else 
       {
           echo "Valor inválido";
       }
       
    }

   public function detalhes(): void
   {
       echo "Título: " . $this->titulo . "<br>";
      // echo "Preço do produto: " . $this->preco . "<br>";

   }
}