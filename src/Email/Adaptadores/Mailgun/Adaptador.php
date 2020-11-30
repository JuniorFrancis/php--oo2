<?php

namespace App\Email\Adaptadores\Mailgun;
use App\Email\Adaptadores\AdaptadorBase;

class Adaptador extends AdaptadorBase
{
    public function processar(): void 
    {
        echo "processado com adaptador Mailgun";
    }
}