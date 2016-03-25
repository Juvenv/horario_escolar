<?php

  require_once "conexao.php";
  
  $matricula = $_POST['matricula'];
  $nome = $_POST['nome_professor'];
  $carga_horaria = $_POST['carga_horaria'];
  $data_contracacao = $_POST['data_contratacao'];

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

  else{
      mysql_query("insert into professor (matricula, nome_professor, carga_horaria, data_contratacao) values ('$matricula','$nome_professor','$carga_horaria', '$data_contratacao')");
      mysql_query("insert into disciplinaporprofessor (matricula, sigla_disciplina) values ('$matricula','$sigla_disciplina')");
      echo "<script>alert('Cadastrada com Sucesso.'); history.back();</script>";
      #header("Location: professor.php");
    }
  
?>