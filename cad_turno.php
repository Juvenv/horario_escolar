<?php

#include "templates.php";
require_once "conexao.php";

  $turno = $_POST['turno'];
  $aulas = $_POST['quantidadeAulas'];
  
  if(empty($turno)){
    echo "<script>alert('Preencha todos os campos para  cadastrar.');</script>";
  }

  elseif(empty($aulas)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";  
  #include  "templates.php";
  }

  else{
      mysql_query("insert into turno (turno, quantidadeAulas) values ('$turno','$aulas')");
      echo "<script> alert('Cadastrado com Sucesso.'); history.back();</script>";
      #header("Location: turno.php");
      }
      
  ?>