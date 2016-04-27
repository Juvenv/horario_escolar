
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = ''.$_SESSION['login'];

  if (isset($_POST['nome_turno'])){
    $nome_turno = $_POST['nome_turno'];
    $quantidade_de_aulas = $_POST['quantidade_de_aulas'];

    $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from turnos where nome_turno='$nome_turno' and login='$login'"));
    if (!empty($validacaoIquais)){
      echo "<script>alert('Turno já Existe.'); window.location.href='../turno.php';</script>";
    }
    else{
      mysql_query("insert into turnos (nome_turno, quantidade_de_aulas, login) values ('$nome_turno','$quantidade_de_aulas', '$login')");
      echo "<script> alert('Cadastrado com Sucesso.'); window.location.href='../turno.php';</script>";
    }
  }
  else {
    echo "<script>alert('Acesso Invalido.'); window.location.href='../turno.php';</script>";
  }
  

?>
