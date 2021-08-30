<?php 

/**
 * Toda a informacao que vir por GET ou POST sempre vai ser string
 * Como sempre vai ser string e eu preciso que seja inteiro basta colocar o tipo antes, conforme exemplo abaixo (int)
 * URI = UNIFORME RESOURCE INIFIER SAO PARTES DA URL
 */

$nome = (int)$_GET["a"];

$ip = $_SERVER["SCRIPT_NAME"];
var_dump($ip);
?>