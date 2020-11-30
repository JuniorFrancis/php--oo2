<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;


class Produto implements Imprimivel
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

   private function acessaCodigoBarras(): string
   { 
    return "<br>Código de barras no produto: " . $this->codigoBarras;
   }

   public function definePreco(float $preco) : void
   {
       if($preco > 0)
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
       echo "<br>Preço do Produto: " . $this->preco . "<br>";
       echo "<br>Descrição do produto: " . $this->descricao . "<br>";
       echo $this->acessaCodigoBarras();
      // echo "Preço do produto: " . $this->preco . "<br>";

   }

   public function retornaDetalhes(): string
   {
       $saida = "<br>Nome do produto: " . $this->titulo . "<br>";
       $saida = $saida . "<br>Preço do produto: " . $this->preco . "<br>";
       $saida = $saida . "<br>Descrição do produto: " . $this->descricao . "<br>";
       $saida = $saida . $this->acessaCodigoBarras();

       return $saida;
   }
}