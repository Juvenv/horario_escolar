
<?php

	include_once '../seguranca.php';
  	protegePagina();
  	$login = ''.$_SESSION['login'];

  	if (isset($_GET['id_turno'])){
  		$id_turno = $_GET['id_turno'];
		mysql_query("DELETE from turmas WHERE id_turno = '$id_turno' and login='$login'");
		mysql_query("DELETE from turnos WHERE id_turno = '$id_turno' and login='$login'");
		echo "<script>alert('Excluido com Sucesso.'); window.location.href='../turno.php';</script>";
  	}
  	else {
  		echo "<script>alert('Acesso Invalido.'); window.location.href='../turno.php';</script>";
  	}


?>
