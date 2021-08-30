<?php 
/**COMO PODEMOS FAZER PARA RECUPERAR UMA SESSAO (SESSION ID) */
session_id("jeffbhig29i5vumgit3f8qjju7qmb3");


require_once("config.php");
echo  session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>