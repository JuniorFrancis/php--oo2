<?php 

require_once "../autoload/autoload-psr4.php";

$email = new App\Email\Envio;
$mailgun = new App\Email\Adaptadores\Mailgun\Adaptador;
$ses = new App\Email\Adaptadores\SES\Adaptador;

$email->enviar($mailgun);
