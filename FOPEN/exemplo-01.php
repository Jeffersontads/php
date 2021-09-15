<?php 
//a funcao fopen espera 2 parametros sendo que o primeiro é o caminho, o endereco da caminho e o segundo eh como que voce vai usar isso esse arquivo.
  $file = fopen("log.txt", "a+");
  fwrite($file, date("Y-m-d H:i:s"). "\r, \n");

  //agora precisa liberar a memoria
  fclose($file);

  echo "Arquivo criado com sucesso!";
?>