
<?php

	include_once '../seguranca.php';
 	protegePagina();
 	$login = ''.$_SESSION['login'];
  $id_turno = $_POST['id_turno'];
	$nome_turno = $_POST['nome_turno'];
	$quantidade_de_aulas = $_POST['quantidade_de_aulas'];

	$validacaoIquais = mysql_fetch_assoc(mysql_query("select * from turnos where nome_turno='$nome_turno' and id_turno!='$id_turno' and login='$login'"));
  if (!empty($validacaoIquais)) {
   	echo "<script>alert('Turno já Existe.'); window.location.href='../turno.php';</script>";
  }
  else {
  	mysql_query("Update turnos set nome_turno='$nome_turno', quantidade_de_aulas='$quantidade_de_aulas' WHERE id_turno='$id_turno' and login='$login'");
	  echo "<script>alert('Alterado com Sucesso.'); window.location.href='../turno.php';</script>";
  }
	
?>
