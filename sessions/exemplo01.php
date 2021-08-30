<?php 
/**
 * 
 * POR PADRAO NO PHP A SESSION VEM POR DEFAULT PARA NAO SER INICIADA.
 */

session_start(); //com isso inciamos o uso da sessao caso contrario nao funcionaria.

$_SESSION["nome"] = "jeff";
?>