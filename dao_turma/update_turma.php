
<?php
	require_once "../conexao.php";
	$id_turma = $_POST['id_turma'];
	$turma = $_POST['turma'];
	$turno = $_POST['turno'];
	$serie = $_POST['serie'];
	mysql_query("Update turmas set turma='$turma', turno='$turno', serie='$serie' WHERE id_turma='$id_turma'");
	echo "<script>alert('Alterado com Sucesso.'); window.location.href='../turma.php';</script>";
?>
