
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $matricula = $_POST['matricula'];
  $horario_inviavel = $_POST['horario_inviavel'];

  $docente = mysql_fetch_assoc(mysql_query("select * from docentes where matricula='$matricula' and login='$login'"));
  $id_docente = $docente['id_docente'];

  $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from restricoes where id_docente='$id_docente' and login='$login'"));
  if (!empty($validacaoIquais)){
    echo "<script>alert('Restrição já Existe.'); window.location.href='../restricoes.php';</script>";
  }
  else{
    foreach ($horario_inviavel as $horario) {
      mysql_query("insert into restricoes (id_docente, horario_inviavel, login) values ('$id_docente', '$horario', '$login')");
    }
    echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../restricoes.php';</script>";
  }
?>
