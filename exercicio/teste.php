<?php 

//use Aritimetica;

class Calculadora //implements Aritimetica
{
    public int $n;
    public int $contador;
    public int $aux;
    
    public function divisao_soma(int $n)
    {
   
        $contador = 0;

        for($aux=1; $aux <= $n; $aux++)
        {
           echo "**Auxiliar: " . $aux . "<br>";
            echo "Resto: " . $n % $aux . "<br>"; 
           if ($n % $aux === 0)
           {
           $contador += $aux;
           echo "Contador: " . $contador . "<br>";   
           }
        }
        
        return $contador;
        echo $contador;
    }
    // public function divisao_soma(): int
    // {
        
    //     $n = 6;
    //     $cont = 0;

    //     for($aux = 1; $n >= $aux; $aux++)
    //     {
    //         //echo $aux . "<br>"; 
    //         $i = $n % $aux . "<br>";
            
    //         if( $i = 0);
    //         {
    //            $cont += $aux ;
             
    //         }
    //         echo "auxiliar: " . $aux . "<br>";    
    //         echo "cont: "$cont . "<br>";
    //     }
    // //  echo $cont;
    //   return $cont; 
            

    // }

    

}


// $calc = new Calculadora();

// $calc->n=6;
// $calc->divisao_soma();
// //echo $calc->cont;
