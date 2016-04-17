
<?php

  include_once '../seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  $id_serie = $_POST['id_serie'];
	$nome_serie = $_POST['nome_serie'];
	$sigla_disciplina = $_POST['sigla_disciplina'];
	$aulas_por_disciplina = $_POST['aulas_por_disciplina'];

  $validacaoIquais = mysql_fetch_assoc(mysql_query("select * from series where nome_serie='$nome_serie' and login='$login'"));
  if (!empty($validacaoIquais)) {
    echo "<script>alert('Série já Existe.'); window.location.href='../serie.php';</script>";
  }
  else {
    mysql_query("update series set nome_serie='$nome_serie' WHERE id_serie='$id_serie' and login='$login'");
    mysql_query("DELETE from disciplinas_por_serie WHERE id_serie='$id_serie' and login='$login'");
    foreach (array_combine($sigla_disciplina, $aulas_por_disciplina) as $sigla => $aulas) {
      $siglaList = mysql_fetch_assoc(mysql_query("select * from disciplinas where sigla_disciplina='$sigla' and login='$login'"));
      $id_disciplina = $siglaList['id_disciplina'];
      mysql_query("insert into disciplinas_por_serie (id_serie, id_disciplina, aulas_por_disciplina, login) values ('$id_serie', '$id_disciplina', '$aulas', '$login')");
    }
    echo "<script>alert('Alterado com Sucesso.'); window.location.href='../serie.php';</script>";
  }

?>
