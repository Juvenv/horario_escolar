<?php
require_once "../conexao.php";
    
    $sigla_disciplina = $_POST['sigla_disciplina'];
    $disciplina = $_POST['disciplina'];
    if(empty($sigla_disciplina)) {
        echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
    }
    elseif(empty($disciplina)) {
        echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
    }
    else{
        mysql_query("insert into disciplinas (sigla_disciplina, disciplina) values ('$sigla_disciplina','$disciplina')");
        echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../disciplina.php';</script>";
    }
?>
