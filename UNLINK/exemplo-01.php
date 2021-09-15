<?php 
  $file = fopen("teste.txt", "w+"); //criando o arquivo
  fclose($file);

  unlink("teste.txt");

  echo "arquivo removido com sucesso!";
?>