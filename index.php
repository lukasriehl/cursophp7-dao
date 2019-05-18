<?php 

require_once("config.php");

//$sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários, buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuário pelo login e senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;

//Criando um novo Usuario
//$aluno = new Usuario("aluno", "@lun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "@abc123");

echo $usuario;

?>