<?php 

/*NAMESPACE = Função utilizada para que pudessemos utilizar varias funções durante todo o projeto
utilizando o mesmo nome para elas*/
namespace App\Email;

use App\Email\Adaptadores\AdaptadorInterface;

const VERSAO = 1.0;

 class Envio 
{
    function enviar(AdaptadorInterface $adaptador)
    {
        $adaptador->processar();
       
    //$transporte = new Transporte;
    //$obj = new \stdClass;
    //$cli = new Clientes;

    // \var_dump($adaptador, $transporte, $obj, $cli);
    // var_dump($adaptador, $transporte, $obj, $cli);
    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }
}