<!DOCTYPE html>
<?php
require_once 'Usuario.php';
$u = new Usuario;
?>
<html lang="pt-br">

 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="Hystoria, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro</title>
   <link rel="shortcut icon" href="../Icone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Cadastro_Estilos.css">
   <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
 </head>

 <body>
   <div class="corpo-form">
    <h1>Junte-se a Luta!</h1>
    <form method="POST">
      <input type="text" name="nome" placeholder="Nome Completo" maxlength="40">
      <input type="email" name="email" placeholder="E-mail" maxlength="40">
      <input type="text" name="usuario" placeholder="Usuário" maxlength="16">
      <input type="password" name ="senha" placeholder="Senha" maxlength="15">
      <input type="password" name = "confsenha" placeholder="Confirmar Senha" maxlength="15">
      <input type="submit" value="CADASTRAR" id="btnCadastrar">
      <a href="Login.php" id="linklogin"> JÁ É CADASTRADO? <Strong> Entre! </Strong> </a>
      <br><br>
      <a href="../" id="linkhomepage"> DESEJA RETORNAR? <Strong> Clique aqui! </Strong> </a>
    </form>
    <?php
    if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $usuario = addslashes($_POST['usuario']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confsenha']);
    if(!empty($nome) && !empty($usuario) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
      $u->conectar("hystoriabd","localhost","root","");
      if($u->msgErro == ""){
        if($senha == $confirmarSenha){
        if($u->cadastrar($nome,$email,$usuario,$senha)){
          echo "<p>Cadastrado com sucesso!</p>";
        }
        else{
          echo "<p>Usuario ja cadastrado!</p>";
        }
        }
        else{
          echo "<p>As senhas digitadas nao sao compativeis!</p>";
        }
      }
      else{
        echo "<p>Erro: ".$u->msgErro."</p>";
      }
    }
    else{
        echo "<p>Preencha todos os campos!</p>";
    }
    }
    ?>
   </div>
 </body>

</html>