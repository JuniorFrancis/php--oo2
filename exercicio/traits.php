<?php 

trait Aquatico 
{
    public function nadar(): void
    {
        echo "Estou nadando!<br>";
    }
}

class Animal
{
    public function andar()
    {
        echo "Estou andando!<br>";
    }
}

class Reptil extends Animal
{
    use Aquatico;
}