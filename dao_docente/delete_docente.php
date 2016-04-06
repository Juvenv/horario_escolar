
<?php
	require_once "../conexao.php";
	$matricula = $_GET['matricula'];
	if (isset($matricula)) {
		mysql_query("DELETE from disciplinas_por_docente WHERE matricula = '$matricula'");
		mysql_query("DELETE from restricoes WHERE matricula = '$matricula'");
		mysql_query("DELETE from docentes WHERE matricula = '$matricula'");
		echo "<script>alert('Excluido com Sucesso.'); window.location.href='../docente.php';</script>";
	}
?>
