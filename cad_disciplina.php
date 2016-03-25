<?php

require_once "conexao.php";


  $codigo = $_POST['sigla_disciplina'];
  $disciplina = $_POST['disciplina'];
  
  if(trim($codigo == '')) {
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";

  }

 elseif(trim($disciplina == '')) {
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";

  }
  
  else{
      mysql_query("insert into disciplina (sigla_disciplina, disciplina) values ('$sigla_disciplina','$disciplina')");
      echo "<script>alert('Cadastrado com Sucesso.'); history.back();</script>";
      #header("Location: disciplina.php");
    }
    
?>