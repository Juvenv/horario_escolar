
<?php
	
	include_once '../seguranca.php';
	protegePagina();
  	$login = $_SESSION['login'];
	$id_turma = $_GET['id_turma'];
	mysql_query("DELETE from horarios WHERE id_turma='$id_turma' and login='$login'");
	mysql_query("DELETE from turmas WHERE id_turma='$id_turma' and login='$login'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../turma.php';</script>";
?>
