<?php 

  require_once("config.php");
  
  $sql = new Sql();

  $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
  //print_r($usuarios);
  $headers = array();

  foreach ($usuarios[0] as $key => $value) {
    //foreach para pegar coluna por coluna do array retornado
    array_push($headers, ucfirst($key));
  }

  // print_r($headers);

  $file = fopen("usuarios.csv", "w+");
  //funcao implode espera sempre 2 parametros, o primeiro é uma string e o segundo é o array que voce quer aplicar essa regra.
  fwrite($file, implode(",", $headers)."\r\n");

  //vamos alimentar com os dados este primeiro foreach é nas linhas
  foreach ($usuarios as $row) {
    $data = array(); //juntando os dados em linha e separado por virgulas
    //agora vamos descobrir os dados chave e valor e colocamos dentro de um array. Este foreach é nos campos
    foreach ($row as $key => $value) {
      array_push($data, $value);
    }//fecha foreach de coluna

    fwrite($file, implode(",",$data)."\r\n");
  }//fecha o foreach de linha


  fclose($file);
  echo "Criado com sucesso!";
?>