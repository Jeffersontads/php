<?php
/**
 * Todo array inicia-se em 0 e quando ele tem somente uma dimensão é chamado de vetor!
 * Para ser um array precisa ter mais de uma dimensão. Bi dimensional ou tri dimensional
 * EXEMPLO DE ARRAY BI-DIMENSIONAL
 */
$carros = [0][0] = "GM";
$carros = [0][1] = "Cobalt";
$carros = [0][2] = "Onix";
$carros = [0][3] = "Celta";

$carros = [1][0] = "FORD";
$carros = [1][1] = "Fiesta";
$carros = [1][2] = "Fusion";
$carros = [1][3] = "Corcel";


echo $carros[0][3];

?>