<?php
Class Usuario 
{
    private $pdo;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        try{  
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch(PDOException $e){
            $msgErro = $e->getMessage();
        }
    }
    
    public function cadastrar($nome, $email, $usuario, $senha){
        global $pdo;
        //verificar se já existe o email cadastrado, senão cadastrar
        $sql = $pdo->prepare("SELECT cod_usuario FROM usuario WHERE usuario = :u");
        $sql-> bindValue(":u", $usuario);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false; //pessoa já cadastrada
        }
        else{
            $sql = $pdo->prepare("INSERT INTO usuario (nome, email, usuario, senha) VALUES(:n, :e, :u, :s)");
            $sql-> bindValue(":n", $nome);
            $sql-> bindValue(":e", $email);
            $sql-> bindValue(":u", $usuario);
            $sql-> bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }
    
    public function logar($usuario, $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT cod_usuario FROM usuario WHERE usuario = :u AND senha = :s");
        $sql->bindValue(":u", $usuario);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['cod_usuario'] = $dado['cod_usuario'];
            return true;
        }
        else{
            return false;
        }
    }
    public function username($codigo){
        global $pdo;
        $sql = $pdo->prepare("SELECT usuario FROM usuario WHERE cod_usuario = :c");
        $sql->bindValue(":c", $codigo);
        $sql->execute();
        $username = $sql->fetch();
        foreach ($username as $usernameArray){
	        $usernameArrayF = $usernameArray;
                                          }  
        return $usernameArrayF;
    }
    
}