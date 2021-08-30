<?php 

/**
 * Passagem de parametros por referencia significa 
 * que eu terei somente o endereco do espaco da memoria
 * onde esta variavel foi guardada. Sempre que ver o & antes
 * da variavel significa que estou passando a 
 * paramentro por referencia. 
 */
$a = 10;

function trocaValor(&$a) { 
 $a += 50;
 return $a;
}
echo trocaValor($a);
echo "<br>";
echo $a;
?>