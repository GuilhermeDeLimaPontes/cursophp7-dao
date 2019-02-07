<?php 
require_once("config.php");

//carrega um usuario
//$guilherme = new Usuario();
//$guilherme->loadById(4);
//echo $guilherme;

//carega uma lista de usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$lista = Usuario::search("t");
//echo json_encode($lista);

//carrega um usuario usando o login e senha

$usuario = new Usuario();

$usuario->login("thamiris","negona");

echo $usuario;


?>