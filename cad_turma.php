
<?php

  #include "templates.php";
  require_once "conexao.php";
 
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
      mysql_query("insert into turma(turma, turno, serie) values ('$turma', '$turno', '$serie')");
      echo "<script>alert('Cadastrado com Sucesso.'); history.back();</script>";
     #header("Location: turma.php");
    }
  

?>