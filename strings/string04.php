<?php 

$frase = "A repetição é mãe da retenção";
$palavra = "mãe";

//busca a posicao
$q = strpos($frase, $palavra);

//pega o que tem antes da palavra encontrada ele vai imprimir de do inicio ate onde foi definido na variavel.
$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
var_dump($texto2);

?>