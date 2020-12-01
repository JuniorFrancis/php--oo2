<?php

class Pessoa {
    
    private $nome;
    private $idade;
    
    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function setNome($nome): void
    {
       $this->nome = $nome;
    }
    
    public function getNome(): string
    {
       return $this->nome;
    }
    
    public function setIdade($idade): void
    {
       $this->idade = $idade;
    }
    
    public function getIdade(): int
    {
       return $this->idade;
    }
    
    public function __toString(): string
    {
       return $this->nome;
    }
}


class Carro 
{   
 public string $nome;
 public function __construct(Pessoa $pessoa)
 {
    $this->nome = $pessoa->getNome();
 }
    public function getMotorista(): string
    {
        return $this->nome;
    }
    
}

$pessoa = new Pessoa("carlos Silva", 33);
$carro = new Carro($pessoa);
$carro->getMotorista();


