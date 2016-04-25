
<?php

	include_once '../seguranca.php';
	protegePagina();
  $id_login = $_POST['id_login'];
  $login = $_POST['login'];
	$nome_usuario = $_POST['nome_usuario'];
	$sobrenome_usuario = $_POST['sobrenome_usuario'];
  $senha = $_POST['senha'];
  $confirmacao_senha = $_POST['confirmacao_senha'];

  if($senha == $confirmacao_senha){
    if (validaUsuario($login, $senha) and ($id_login != $login)){
      echo "<script>alert('Usuário já Existe.');</script>";
      expulsaVisitante();
    }
    else{
      mysql_query("update horarios set login='$login' where login='$id_login'");
      mysql_query("update disciplinas_por_docente set login='$login' where login='$id_login'");
      mysql_query("update disciplinas_por_serie set login='$login' where login='$id_login'");
      mysql_query("update disciplinas set login='$login' where login='$id_login'");
      mysql_query("update restricoes set login='$login' where login='$id_login'");
      mysql_query("update docentes set login='$login' where login='$id_login'");
      mysql_query("update series set login='$login' where login='$id_login'");
      mysql_query("update turnos set login='$login' where login='$id_login'");
      mysql_query("update turmas set login='$login' where login='$id_login'");
      mysql_query("update usuarios set login='$login', senha='$senha', nome_usuario='$nome_usuario', sobrenome_usuario='$sobrenome_usuario' where login='$id_login'");
      validaUsuario($login, $senha);
      echo "<script> alert('Alterado com Sucesso.'); window.location.href='../menu_principal.php';</script>";
    }
  }
  else{
    echo "<script>alert('Senha Incorreta.'); window.location.href='../menu_principal.php';</script>";
  }

?>
