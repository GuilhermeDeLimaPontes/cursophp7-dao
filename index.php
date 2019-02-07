<?php 
require_once("config.php");

$guilherme = new Usuario();

$guilherme->loadById(4);

echo $guilherme;

?>