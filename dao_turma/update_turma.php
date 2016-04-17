
<?php

	include_once '../seguranca.php';
	protegePagina();
  $login = $_SESSION['login'];
	$id_turma = $_POST['id_turma'];
	$nome_turma = $_POST['nome_turma'];
  $nome_turno = $_POST['nome_turno'];
  $nome_serie = $_POST['nome_serie'];

  $turno = mysql_fetch_assoc(mysql_query("select * from turnos where nome_turno='$nome_turno' and login='$login'"));
  $id_turno = $turno['id_turno'];
  $serie = mysql_fetch_assoc(mysql_query("select * from series where nome_serie='$nome_serie' and login='$login'"));
  $id_serie = $serie['id_serie'];
	$validacaoIquais = mysql_fetch_assoc(mysql_query("select * from turmas where nome_turma='$nome_turma' and id_turno='$id_turno' and id_serie='$id_serie' and login='$login' and id_turma!='$id_turma'"));
	if (!empty($validacaoIquais)) {
   	echo "<script>alert('Turma já Existe.'); window.location.href='../turma.php';</script>";
  }
  else{
	  mysql_query("update turmas set nome_turma='$nome_turma', id_turno='$id_turno', id_serie='$id_serie' where id_turma='$id_turma' and login='$login'");
	  echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../turma.php';</script>";
  }

?>
