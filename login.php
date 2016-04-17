
<?php
    include_once 'seguranca.php';
    #protegePagina();
    #$login = ''.$_SESSION['login'];

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (validaUsuario($login, $senha)) {
      // O usuário e a senha digitados foram validados, manda pra página interna
      echo "<script>window.location.href='menu_principal.php';</script>";
    } 
    else {
      // O usuário e/ou a senha são inválidos, manda de volta pro form de login
      // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
      echo "<script>alert('Usuário não encontrado.'); window.location.href='index.php';</script>";
      #expulsaVisitante();
    }
?>
