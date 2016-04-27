
<?php
	
	include_once '../seguranca.php';
  	protegePagina();
  	$login = $_SESSION['login'];

  	if (isset($_GET['id_serie'])){
  		$id_serie = $_GET['id_serie'];
		mysql_query("DELETE from disciplinas_por_serie WHERE id_serie = '$id_serie' and login='$login'");
		mysql_query("DELETE from series WHERE id_serie = '$id_serie' and login='$login'");
		echo "<script>alert('Excluido com Sucesso.'); window.location.href='../serie.php';</script>";
  	}
  	else {
  		echo "<script>alert('Acesso Invalido.'); window.location.href='../serie.php';</script>";
  	}
	

?>
