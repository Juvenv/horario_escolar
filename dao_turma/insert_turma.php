
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];

  if (isset($_POST['nome_turma'])){
    $nome_turma = $_POST['nome_turma'];
    $nome_turno = $_POST['nome_turno'];
    $nome_serie = $_POST['nome_serie'];

    $turno = mysql_fetch_assoc(mysql_query("select * from turnos where nome_turno='$nome_turno' and login='$login'"));
    $id_turno = $turno['id_turno'];
    $serie = mysql_fetch_assoc(mysql_query("select * from series where nome_serie='$nome_serie' and login='$login'"));
    $id_serie = $serie['id_serie'];
    $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from turmas where nome_turma='$nome_turma' and id_turno='$id_turno' and id_serie='$id_serie' and login='$login'"));
    if (!empty($validacaoIquais)) {
      echo "<script>alert('Turma já Existe.'); window.location.href='../turma.php';</script>";
    }
    else{
      mysql_query("insert into turmas (nome_turma, id_turno, id_serie, login) values ('$nome_turma', '$id_turno', '$id_serie', '$login')");
      echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../turma.php';</script>";
    }
  }
  else {
    echo "<script>alert('Acesso Invalido.'); window.location.href='../turma.php';</script>";
  }
  

?>
