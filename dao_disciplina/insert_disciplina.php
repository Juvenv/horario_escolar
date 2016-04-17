<?php

    include_once '../seguranca.php';
    protegePagina();
    $login = $_SESSION['login'];
    $sigla_disciplina = $_POST['sigla_disciplina'];
    $nome_disciplina = $_POST['nome_disciplina'];

    $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from disciplinas where sigla_disciplina='$sigla_disciplina' and login='$login'"));
    if (!empty($validacaoIquais)){
        echo "<script>alert('Disciplina já Existe.'); window.location.href='../disciplina.php';</script>";
    }
    else {
        mysql_query("insert into disciplinas (sigla_disciplina, nome_disciplina, login) values ('$sigla_disciplina','$nome_disciplina', '$login')");
        echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../disciplina.php';</script>";    
    }

?>
