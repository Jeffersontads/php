<?php 
//_autoload_register() - Registra a função dada como implementação de __autoload() deprecade in php7
//The principal advantage of this against __autoload is of course that you can call spl_autoload_register multiple times, 
//whereas __autoload (like any function) can only be defined once. If you have modular code, this would be a significant drawback.
spl_autoload_register(function($nomeClasse) {
    include ("$nomeClasse.php");
}); 
    $carro = new DelRey;
$carro->acelerar(90);

?>