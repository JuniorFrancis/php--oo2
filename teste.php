<?php 

class Calculadora
{
    public int $n;
    public int $cont;
    public int $aux;

    public function divisao_soma(): int
    {
        
        $n = 6;
        $cont = 0;

        for($aux = 1; $n >= $aux; $aux++)
        {
            //echo $aux . "<br>"; 
            $i = $n % $aux . "<br>";
            
            if( $i = 0);
            {
               $cont += $aux ;
             
            }
            echo "auxiliar: " . $aux . "<br>";    
            echo "cont: "$cont . "<br>";
        }
    //  echo $cont;
      return $cont; 
            

    }
}


$calc = new Calculadora();

$calc->n=6;
$calc->divisao_soma();
//echo $calc->cont;
