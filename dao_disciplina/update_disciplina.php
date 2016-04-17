
<?php

	include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $id_disciplina = $_POST['id_disciplina'];
	$sigla_disciplina = $_POST['sigla_disciplina'];
	$nome_disciplina = $_POST['nome_disciplina'];

	$validacaoIquais = mysql_fetch_assoc(mysql_query("select * from disciplinas where sigla_disciplina='$sigla_disciplina' and login='$login'"));
  	if (!empty($validacaoIquais)) {
    	echo "<script>alert('Disciplina já Existe.'); window.location.href='../serie.php';</script>";
  	}
  	else {
  		mysql_query("Update disciplinas set sigla_disciplina='$sigla_disciplina', nome_disciplina='$nome_disciplina' WHERE id_disciplina='$id_disciplina' and login='$login'");
		echo "<script>alert('Alterado com Sucesso.'); window.location.href='../disciplina.php';</script>";
  	}
	
?>
