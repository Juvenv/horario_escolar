
<?php
    include_once 'seguranca.php';

    if (isset($_POST['login'])){
      $login = $_POST['login'];
      $senha = $_POST['senha'];
      if (validaUsuario($login, $senha)) {
        echo "<script>window.location.href='menu_principal.php';</script>";
      }
      else {
        echo "<script>alert('Usuário não encontrado.'); window.location.href='index.php';</script>";
      }
    }
    else {
      echo "<script>alert('Acesso Invalido.'); window.location.href='index.php';</script>";
    }
    
?>
