<?php 

abstract class Funcionario 
{
    protected static float $percentual_prl = 1.1;
    public $nome;
    public $salario;
}

class FuncionarioInterno extends Funcionario
{
    public function getParticipacaoLucro()
    {
   
        return Funcionario::$percentual_prl * $this->salario;
        
    }
}

$fun = new FuncionarioInterno;

$fun->nome = "Carlos Silva";
$fun->salario = 2045;

echo $fun->getParticipacaoLucro();