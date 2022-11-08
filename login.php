<?php 

require_once 'src/Dao.php';

$dao = new Dao();
if($dao->logIn($usuario=$_POST['usuario'],$senha=$_POST['senha'])){
    echo "logado";
} else { 
    echo "erro";
}