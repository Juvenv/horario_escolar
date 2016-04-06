
<?php
	require_once "../conexao.php";
	$sigla_disciplina = $_POST['sigla_disciplina'];
	$disciplina = $_POST['disciplina'];
	mysql_query("Update disciplinas set disciplina='$disciplina' WHERE sigla_disciplina='$sigla_disciplina'");
	echo "<script>alert('Alterado com Sucesso.'); window.location.href='../disciplina.php';</script>";
?>
