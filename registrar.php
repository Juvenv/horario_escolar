
<?php
  require_once "seguranca.php";
  $nome_usuario = $_POST['nome_usuario'];
  $sobrenome_usuario = $_POST['sobrenome_usuario'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $senha_confirmacao = $_POST['senha_confirmacao'];

  if($senha == $senha_confirmacao){
    if (validaUsuario($login, $senha)){
      echo "<script>alert('Usuário já Existe.');</script>";
      expulsaVisitante();
    }
    else{
      mysql_query("insert into usuarios (login, senha, nome_usuario, sobrenome_usuario) values ('$login','$senha', '$nome_usuario', '$sobrenome_usuario')");
      validaUsuario($login, $senha);
      echo "<script> alert('Cadastrado com Sucesso.'); window.location.href='menu_principal.php';</script>";
    }
  }
  else{
  	echo "<script>alert('Senha Incorreta.'); window.location.href='index.php';</script>";
  }
?>
