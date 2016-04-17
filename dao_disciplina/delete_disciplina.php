
<?php

	include_once '../seguranca.php';
    protegePagina();
    $login = $_SESSION['login'];
	$id_disciplina = $_GET['id_disciplina'];

	mysql_query("DELETE from horarios WHERE id_disciplina = '$id_disciplina' and login='$login'");
	mysql_query("DELETE from disciplinas_por_docente WHERE id_disciplina = '$id_disciplina' and login='$login'");
	mysql_query("DELETE from disciplinas_por_serie WHERE id_disciplina = '$id_disciplina' and login='$login'");
	mysql_query("DELETE from disciplinas WHERE id_disciplina = '$id_disciplina' and login='$login'");
	echo "<script>alert('Excluido com Sucesso.'); window.location.href='../disciplina.php';</script>";

?>
