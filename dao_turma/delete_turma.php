
<?php
	require_once "../conexao.php";
	$id_turma = $_GET['id_turma'];
	mysql_query("DELETE from turmas WHERE id_turma='$id_turma'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../turma.php';</script>";
?>
