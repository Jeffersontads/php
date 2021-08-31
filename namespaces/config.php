<?php 
//vamos dizer onde ele deve procurar nossas classes
//criamos aqui um autoload para usar em nosso sistema
    spl_autoload_register(function($nameClass) 
        {
            $dirClass = "class";
            $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

            if (file_exists($filename)) 
            {
                require_once ($filename);
            }
        }
    );
?>