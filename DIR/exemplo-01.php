<?php 
    //verifica se existe o diretorio e se nao existe ele vai criar um com as permissoes 
    $name = "Senhas";

    if (!is_dir($name)) {
        mkdir($name, 0777, true);
        echo "Diretorio ".$name. " criado com sucesso!";
    } else {
        echo "Diretorio " .$name. " já existe! tente outro nome.";
    }
?>