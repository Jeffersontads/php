<?php 
 /**
  * vamos usar um recurso do php para registrar mais de uma funcao como funcao autoload
  */

  function incluirClasses($nomeClasse)
    { 
        if (file_exists(($nomeClasse.".php")) === true) 
        {
            require_once ($nomeClasse.".php");
        }
    }
  spl_autoload_register("incluirClasses");


  spl_autoload_register(function($nomeClasse) 
    {
        if (file_exists("classesAbstratas". DIRECTORY_SEPARATOR.$nomeClasse.".php") == true) {
            # code...
            require_once ("classesAbstratas". DIRECTORY_SEPARATOR.$nomeClasse.".php");
        }
        
    }
); 

$carro = new DelRey;
$carro->acelerar(90);


//teste somente para gravar na cabeça como implementar usando spl auto load
function incluirNovasClasses($classesNovas) 
{
    if ((file_exists($classesNovas.".php")) === true) 
    {
        require_once ($classesNovas.".php");
    }
    else
    {
        echo "nao deu certo nao encontrou o arquivo -> ".$classesNovas;
    }

    spl_autoload_register("incluirClassesNovas");

    //uma outra forma seria ASSIM
        spl_autoload_register(function($classesNovas)
        {
            if ((file_exists("classesAbstratas". DIRECTORY_SEPARATOR.$classesNovas.".php"))) 
            {
                require_once("classesAbstratas".DIRECTORY_SEPARATOR.$classesNovas.".php");
            }
        }
    );
}

?>