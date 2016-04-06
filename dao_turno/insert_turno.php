
<?php
  require_once "../conexao.php";
  $turno = $_POST['turno'];
  $quantidade_de_Aulas = $_POST['quantidade_de_Aulas'];

  if(empty($turno)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($quantidade_de_Aulas)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";  
  }
  else{
      mysql_query("insert into turnos (turno, quantidade_de_Aulas) values ('$turno','$quantidade_de_Aulas')");
      echo "<script> alert('Cadastrado com Sucesso.'); window.location.href='../turno.php';</script>";
  }      
?>
