<?php 
/**
 * o foreach com scandir, scandir le cada item do diretorio e transforma em uma array.
 * este codigo pega todos os itens deum diretorio e apaga tudo de uma vez.
 */
   if(!is_dir("images")) mkdir("images");

   foreach (scandir("images") as $item) {
     //se nao for nenhum desses dois itens (. e ..) entra no IF 
     if(!in_array($item, array(".", ".."))){
       //apaga arquivo por aquivo na pasta images 
        unlink("images/".$item);
      }
   }

   echo "TUDO OK!";
?>