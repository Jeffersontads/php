<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");
//tratamento para ver se tem algum erro e se tiver ele vai me avisar!
if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}
//prepare um comando para o banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES(?, ?)");

//metodo bind espera os tipos de dados das interrogacoes neste caso STRING
$stmt->bind_param("ss", $login, $pass);

$login = "admin";
$pass = "admin";

$stmt->execute();

// $login = "root";
// $pass = "!@$%#";

// $stmt->execute();

?>