<?php 
require_once '../src/Dao.php';

$dao = new Dao();
$dao->cadastrarUsuario($usuario=$_POST['usuario'],$senha=$_POST['senha']);