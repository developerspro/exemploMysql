<?php
$user= "root";
$pass="";
$db= new PDO('mysql:host=localhost;dbname=kmysql',$user,$pass);
$resultado = $db->query("select * from tbusuario");
foreach ($resultado as $linha ) {
echo $linha['id']."<br>";
echo $linha['usuario']."<br>";
echo $linha['senha']."<br>";
echo "<hr>";
}

$usuario= "usuario";
$senha="senha";
$sql = "insert into tbusuario(usuario,senha) values('$usuario','$senha')";
echo $sql;
$db->query($sql);
echo "registro inserido";


