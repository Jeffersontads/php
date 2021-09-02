<?php 
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $stmt =$conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
  $stmt->execute(); //mandamos a consulta pro banco


  $id = 3;
  $stmt->bindParam(":ID", $id);
  $stmt->execute();

  echo "Dados deletados com sucesso!";
?>