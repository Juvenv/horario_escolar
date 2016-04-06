
<?php
	require_once "../conexao.php";
	$sigla_disciplina = $_GET['sigla_disciplina'];
	mysql_query("DELETE from disciplinas_por_docente WHERE sigla_disciplina = '$sigla_disciplina'");
	mysql_query("DELETE from disciplinas_por_serie WHERE sigla_disciplina = '$sigla_disciplina'");
	mysql_query("DELETE from disciplinas WHERE sigla_disciplina = '$sigla_disciplina'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../disciplina.php';</script>";
?>
