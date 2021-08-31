<?php 

    require_once("config.php");
//para usar o namespace
    use Cliente\Cadastro;

    //vamos criar um objeto daquela classe
    $cad = new Cadastro;

    $cad->setNome("Jaciel Sotto ");
    $cad->setSenha("123 ");
    $cad->setEmail("jaciel@gmail.com ");
    
    $cad->registrarVenda();

?>