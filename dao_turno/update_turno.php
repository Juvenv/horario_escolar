
<?php
	require_once "../conexao.php";
	$turno = $_POST['turno'];
	$quantidade_de_Aulas = $_POST['quantidade_de_Aulas'];
	mysql_query("Update turnos set quantidade_de_Aulas='$quantidade_de_Aulas' WHERE turno='$turno'");
	echo "<script>alert('Alterado com Sucesso.'); window.location.href='../turno.php';</script>";
?>
