
<?php
	require_once "../conexao.php";
	$turno = $_GET['turno'];
	mysql_query("DELETE from turmas WHERE turno = '$turno'");
	mysql_query("DELETE from turnos WHERE turno = '$turno'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../turno.php';</script>";
?>
