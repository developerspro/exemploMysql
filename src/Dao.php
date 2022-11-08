<?php 
class Dao { 
    private $usuario='root';
    private $senha='';
    private $dsn='mysql:host=localhost;dbname=kmysql';
    private $conexao;

    public function __construct(){
        $this->conexao = new PDO($this->dsn,$this->usuario,$this->senha);
        if($this->conexao->errorCode()){
            echo 'erro ao conectar ao banco de dados';
        } else { 
    
        }
    }

    public function logIn($usuario,$senha){
    $resultado = $this->conexao->query("select * from tbusuario where usuario ='$usuario' and senha='$senha'");
    if($resultado->fetch()){
        header('location:http://localhost/exemplo1/admin/');
    } else { 
        header('location:http://localhost/exemplo1/');
    }
    }

    public function cadastrarUsuario($usuario,$senha){
        try {
            $resultado = $this->conexao->query("insert into tbusuario(usuario,senha) values('$usuario','$senha')");
        } catch (Exception $ex) {
           echo $ex->getMessage();
        }
        if(isset($ex)){
            header('location:http://localhost/exemplo1/admin/erro.php');
        }  else { 
            header('location:http://localhost/exemplo1/admin/lista.php');
        }
       
    }

    public function listaUsuario(){
        $resultado = $this->conexao->query('select * from tbusuario');

        return $resultado; 
    }
}