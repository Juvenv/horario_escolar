
<?php

  require_once "../conexao.php";
  $serie = $_POST['serie'];
  $sigla_disciplina = $_POST['sigla_disciplina'];
  $aulasPorDisciplina = $_POST['aulasPorDisciplina'];

  if(empty($serie)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($sigla_disciplina)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  elseif(empty($aulasPorDisciplina)){
    echo "<script>alert('Preencha todos os campos para cadastrar.');</script>";
  }
  else{
      mysql_query("insert into series (serie) values ('$serie')");
      foreach (array_combine($sigla_disciplina, $aulasPorDisciplina) as $sigla => $aulas) {
          mysql_query("insert into disciplinas_por_serie (serie, sigla_disciplina, aulasPorDisciplina) values ('$serie', '$sigla', '$aulas')");
      }
      echo "<script>alert('Cadastrado com Sucesso.'); window.location.href='../serie.php';</script>";
  }
?>
