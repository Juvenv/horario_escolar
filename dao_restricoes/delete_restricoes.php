
<?php
	require_once "../conexao.php";
	$matricula = $_GET['matricula'];
	mysql_query("DELETE from restricoes WHERE matricula='$matricula'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../restricoes.php';</script>";

?>
