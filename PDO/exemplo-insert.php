<?php 
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $stmt =$conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES (:LOGIN, :PASSWORD)");
  $stmt->execute(); //mandamos a consulta pro banco

  $login = "Carla";
  $password = "1s23";
//fazemos o bind ou seja conectamos unimos nossos parametros com o nosso comando SQL acima linha3
//bind quer dizer ligar e precisamos para cada parametro um bind pois queremos ligar com o nosso sql
  $stmt->bindParam(":LOGIN", $login);
  $stmt->bindParam(":PASSWORD", $password);

  $stmt->execute();

  echo "Inserido com sucesso!";
?>