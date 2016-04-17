
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $id_docente = $_POST['id_docente'];
  $matricula = $_POST['matricula'];
  $horario_inviavel = $_POST['horario_inviavel'];

  $validacaoIquais = @mysql_fetch_assoc(mysql_query("select * from restricoes where matricula='$matricula' and id_docente!='$id_docente' and login='$login'"));
  if (!empty($validacaoIquais)){
    echo "<script>alert('Restrição já Existe.'); window.location.href='../restricoes.php';</script>";
  }
  else {
    mysql_query("delete from restricoes where id_docente='$id_docente' and login='$login'");
    $docente = mysql_fetch_assoc(mysql_query("select * from docentes where matricula='$matricula' and login='$login'"));
    $id_docenteAtualizado = $docente['id_docente'];
    foreach ($horario_inviavel as $horario) {
   	  mysql_query("insert into restricoes (id_docente, horario_inviavel, login) values ('$id_docenteAtualizado', '$horario', '$login')");
    }
	 echo "<script>alert('Alterado com Sucesso.'); window.location.href='../restricoes.php';</script>";
  }

?>
