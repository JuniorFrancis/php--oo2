<?php

namespace App\Email\Adaptadores\SES;
use App\Email\Adaptadores\AdaptadorBase;

class Adaptador extends AdaptadorBase 
{
    public function processar(): void
    {
        echo "processado com adaptador SES";
    }    
}