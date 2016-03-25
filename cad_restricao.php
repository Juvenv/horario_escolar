
<?php

  require_once "conexao.php";
  
  $matricula = $_POST['matricula'];
  $restricao = $_POST['restricao'];

  if(empty($matricula)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }

  elseif(empty($restricao)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }

  else{
      mysql_query("insert into restricao (matricula, restricao) values ('$matricula','$restricao')");
      echo "<script>alert('Cadastrado com Sucesso.'); history.back();</script>";
     #header("Location: restricao.php");
    }
  
?>