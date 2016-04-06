
<?php
	require_once "../conexao.php";
	$matricula = $_POST['matricula'];
  $nome_professor = $_POST['nome_professor'];
  $carga_horaria = $_POST['carga_horaria'];
  $data_contratacao = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['data_contratacao'])));
	$sigla_disciplina = $_POST['sigla_disciplina'];

	if(empty($matricula)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($nome_professor)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($carga_horaria)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($data_contratacao)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
	elseif(empty($sigla_disciplina)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  else {
		mysql_query("DELETE from disciplinas_por_docente WHERE matricula = '$matricula'");
    mysql_query("update docentes set nome_professor='$nome_professor', carga_horaria='$carga_horaria', data_contratacao='$data_contratacao' WHERE matricula = '$matricula'");
    foreach ($sigla_disciplina as $sigla) {
     	mysql_query("insert into disciplinas_por_docente (matricula, sigla_disciplina) values ('$matricula', '$sigla')");
    }
		echo "<script>alert('Alterado com Sucesso.'); window.location.href='../docente.php';</script>";
	}
?>
