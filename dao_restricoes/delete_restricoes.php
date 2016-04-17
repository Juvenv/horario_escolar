
<?php
	
	include_once '../seguranca.php';
	protegePagina();
  	$login = $_SESSION['login'];
	$id_docente = $_GET['id_docente'];
	mysql_query("DELETE from restricoes WHERE id_docente='$id_docente' and login='$login'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../restricoes.php';</script>";

?>
