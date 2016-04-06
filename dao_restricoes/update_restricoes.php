
<?php
	require_once "../conexao.php";
	$matricula = $_POST['matricula'];
	$horario_inviavel = $_POST['horario_inviavel'];

	if(empty($matricula)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
	elseif(empty($horario_inviavel)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  else {
    mysql_query("delete from restricoes where matricula='$matricula'");
    foreach ($horario_inviavel as $horario) {
     	mysql_query("insert into restricoes (matricula, horario_inviavel) values ('$matricula', '$horario')");
    }
		echo "<script>alert('Alterado com Sucesso.'); window.location.href='../restricoes.php';</script>";
	}
?>
