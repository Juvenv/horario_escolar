
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $matricula = $_POST['matricula'];
  $nome_professor = $_POST['nome_professor'];
  $carga_horaria = $_POST['carga_horaria'];
  $data_contratacao = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['data_contratacao'])));
  $sigla_disciplina = $_POST['sigla_disciplina'];

  $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from docentes where matricula='$matricula' and nome_professor='$nome_professor' and login='$login'"));
  if (!empty($validacaoIquais)) {
    echo "<script>alert('Docente já Existe.'); window.location.href='../docente.php';</script>";
  }
  else{
    mysql_query("insert into docentes (matricula, nome_professor, carga_horaria, data_contratacao, login) values ('$matricula','$nome_professor','$carga_horaria', '$data_contratacao', '$login')");
    $docente = mysql_fetch_assoc(mysql_query("select * from docentes where matricula='$matricula' and nome_professor='$nome_professor' and login='$login'"));
    $id_docente = $docente['id_docente'];
    foreach ($sigla_disciplina as $sigla) {
      $disciplina = mysql_fetch_assoc(mysql_query("select * from disciplinas where sigla_disciplina='$sigla' and login='$login'"));
      $id_disciplina = $disciplina['id_disciplina'];
      mysql_query("insert into disciplinas_por_docente (id_docente, id_disciplina, login) values ('$id_docente', '$id_disciplina', '$login')");
    }
    echo "<script>alert('Cadastrada com Sucesso.'); window.location.href='../docente.php';</script>";
  }

?>
