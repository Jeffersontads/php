<?php 
  $filename = "mysql.png";

  //esta variavel vai receber a string formatada em base64
  // a funcao get_file_content le o arquivo inteiro ele retorna um conteudo binario e por isso usamos a funcao base64
  $base64 = base64_encode(file_get_contents($filename));
  $fileInfo = new finfo(FILEINFO_MIME_TYPE);
  $mimetype = $fileInfo->file($filename);

  //vamos montar o PADRAO
  $base64Enconde = "data:" .$mimitype. ";base64," . $base64;
?>

<a href="<?= $base64Enconde?>" target="_blank" > Link para imagens</a>
<img src="<?= $base64Enconde ?>">