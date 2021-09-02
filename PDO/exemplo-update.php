<?php 
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $stmt =$conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN senha = :PASSWORD WHERE idusuario = :ID");
  $stmt->execute(); //mandamos a consulta pro banco

  $login = "Maria";
  $password = "qwerty";
  $id = 2;

  $stmt->bindParam(":LOGIN", $login);
  $stmt->bindParam(":PASSWORD", $password);
  $stmt->bindParam(":ID", $id);

  $stmt->execute();

  echo "dados alterados com sucesso!";
?>