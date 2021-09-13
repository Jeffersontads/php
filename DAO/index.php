<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//$root = new Usuario();

//$root->loadById(3);

//echo $root;

//CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuario buscando pelo login
//$busca = Usuario::search("jo");
//echo json_encode($busca);

//carrega um ususrio usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("123", "root");
//echo $usuario;

$aluno = new Usuario("aluno", "1234");

$aluno->insert();

echo $aluno;
?>