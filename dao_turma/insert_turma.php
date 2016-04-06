
<?php

  require_once "../conexao.php";
  $turma = $_POST['turma'];
  $turno = $_POST['turno'];
  $serie = $_POST['serie'];

  if(empty($serie)){
    echo "<script>alert('Preencha todos os campos para  cadastrar.');</script>";
  }
  elseif(empty($turma)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($turno)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  else{
      #$repetida = mysql_query("select * from turmas where turma='$turma' and serie='$serie')");
      #if (isset($repetida)){
        #echo "<script>alert('Essa Turma já Existe.'); window.location.href='../turma.php';</script>";
      #}
      #else{
        mysql_query("insert into turmas (turma, turno, serie) values ('$turma', '$turno', '$serie')");
        echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../turma.php';</script>";
      #}
    }
?>