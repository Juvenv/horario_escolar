
<?php
	
  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $id_docente = $_POST['id_docente'];
	$matricula = $_POST['matricula'];
  $nome_professor = $_POST['nome_professor'];
  $carga_horaria = $_POST['carga_horaria'];
  $data_contratacao = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['data_contratacao'])));
	$sigla_disciplina = $_POST['sigla_disciplina'];

  $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from docentes where matricula='$matricula' and nome_professor='$nome_professor' and login='$login'"));
  if (!empty($validacaoIquais)) {
    echo "<script>alert('Docente já Existe.'); window.location.href='../docente.php';</script>";
  }
  else {
		mysql_query("DELETE from disciplinas_por_docente WHERE id_docente='$id_docente' and login='$login'");
    mysql_query("update docentes set matricula='$matricula', nome_professor='$nome_professor', carga_horaria='$carga_horaria', data_contratacao='$data_contratacao' WHERE id_docente='$id_docente' and login='$login'");
    foreach ($sigla_disciplina as $sigla) {
      $disciplina = mysql_fetch_assoc(mysql_query("select * from disciplinas where sigla_disciplina='$sigla' and login='$login'"));
      $id_disciplina = $disciplina['id_disciplina'];
     	mysql_query("insert into disciplinas_por_docente (id_docente, id_disciplina, login) values ('$id_docente', '$id_disciplina', '$login')");
    }
		echo "<script>alert('Alterado com Sucesso.'); window.location.href='../docente.php';</script>";
	}
?>
