<?php 
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $conn->beginTransaction();

  $stmt =$conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

  $id = 7;

  $stmt->execute(array($id));

  //aqui dizemos o que quero fazer pois abrimos uma trasação(ROLLBACK, COMMIT)
  //$conn->rollBack();
  $conn->commit();

  echo "Dados deletados com sucesso!";
?>