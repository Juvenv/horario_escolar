
<?php
	require_once "../conexao.php";
	$serie = $_GET['serie'];
	mysql_query("DELETE from disciplinas_por_serie WHERE serie = '$serie'");
	mysql_query("DELETE from series WHERE serie = '$serie'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../serie.php';</script>";
?>
