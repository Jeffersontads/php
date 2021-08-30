<?php 
$a = 55;
$b = 55.0;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a = $b);
echo "<br>";
var_dump($a == $b);//dois sinais de iguais compara somente os valores 
echo "<br>";
var_dump($a === $b);//compra valores e tipo operador de igualdade de identidade
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a !== $b); // valida tambem o tipo de dados
echo "<br>";
var_dump($a >= $b);//maior ou igual
echo "<br>";
var_dump($a <= $b);//menor ou igual

//dois tipos novos de operadores do PHP7 space ship
?>