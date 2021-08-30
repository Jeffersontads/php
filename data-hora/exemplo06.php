<?php 

/**
 * Instancia de uma classe significa que um objeto tera o comportamento
 * e estado definido pela classe instancia é a concretização de uma classe
 */

 $dt = new DateTime();

$periodo = new DateInterval("P15D"); //objeto periodo criado
echo $dt->format("d/m/Y H:i:s");
 
$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");
?>