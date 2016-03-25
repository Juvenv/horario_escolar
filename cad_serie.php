<?php

#include "templates.php";
require_once "conexao.php";

  $serie = $_POST['serie'];
  
  if(empty($serie)){
    echo "<script>alert('Preencha todos os campos para  cadastrar.');</script>";
  }

  else{
      mysql_query("insert into serie (serie) values ('$serie')");
      echo "<script>alert('Cadastrado com Sucesso.'); history.back(); </script>";
     #header("Location: serie.php");
    }
  

?>