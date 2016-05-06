
<?php

  include_once 'seguranca.php';
  protegePagina();
  include_once "templates.php";

  if (isset($_POST['turmas'])){
    $turmas = $_POST['turmas'];
    $turnos = $_POST['turnos'];
    $disciplinas = $_POST['disciplinas'];
    $docentes = $_POST['docentes'];
  }
  else{
    echo "<script>alert('Verifique se existem Turmas Cadastradas.'); window.location.href='informacoes_gerais.php';</script>";
  }


  function nome_disciplina($id_disciplina) {
    $login = $_SESSION['login'];
    $result = mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'");
    $result = mysql_fetch_assoc($result);
    if (isset($result['nome_disciplina'])) {
      return $result['nome_disciplina'];
    }
    return $id_disciplina;
  }

  function nome_docente($id_docente) {
    $login = $_SESSION['login'];
    $result = mysql_query("SELECT * FROM docentes where id_docente='$id_docente' and login='$login'");
    $result = mysql_fetch_assoc($result);
    if (isset($result['nome_professor'])) {
      return $result['nome_professor'];
    }
    return $id_docente;
  }

  function aulas_por_disciplina($disciplinas, $id_disciplina){
    $aulas = 0;
    foreach ($disciplinas as $value) {
      if ($value == $id_disciplina) {
        $aulas++;
      }
    }
    return $aulas;
  }

  function aulas_por_docente($docentes, $id_docente){
    $aulas = 0;
    foreach ($docentes as $value) {
      if ($value == $id_docente){
        $aulas++;
      }
    }
    return $aulas;
  }

  function docente_disponivel($docentes, $aulas_por_disciplina, $id_disciplina){
    $login = $_SESSION['login'];
    foreach ($docentes as $id_docente) {
      $result = mysql_query("SELECT * FROM disciplinas_por_docente where id_docente='$id_docente' and id_disciplina='$id_disciplina' and login='$login'");
      $result = mysql_fetch_array($result);
      if (isset($result['id_disciplina_docente'])){
        if ((aulas_por_docente($docentes, $id_docente) >= $aulas_por_disciplina) and ($aulas_por_disciplina != 0)) {
          return $id_docente;
        }
      }
    }
    return '';
  }

  function reduzir_disciplina($disciplinas, $id_disciplina){
    foreach ($disciplinas as $key => $value) {
      if ($value == $id_disciplina){
        unset($disciplinas[$key]);
      }
    }
    return $disciplinas;
  }

  function reduzir_carga_horaria_docente($docentes, $docente_disponivel, $aulas_por_disciplina){
    $count = 0;
    foreach ($docentes as $key => $value) {
      if (($value == $docente_disponivel) and ($count < $aulas_por_disciplina)){
        unset($docentes[$key]);
        $count++;
      }
    }
    return $docentes;
  }

  function leciona_disciplina($leciona_disciplina, $docente_disponivel, $id_disciplina, $aulas_por_disciplina){
    if ($aulas_por_disciplina > 0) {
      $leciona_disciplina[$id_disciplina] = $docente_disponivel;
    }
    return $leciona_disciplina;
  }

  function imprimir_lista($lista){
    foreach ($lista as $key => $value) {
      echo $key.' => '.nome_disciplina($value).'<br>';
    }
  }

  function gerar_horario($disciplinas, $leciona_disciplina){
    echo '<table border="1" class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th class="bg-success">Segunda-Feira</th>
                <th class="bg-success">Terça-Feira</th>
                <th class="bg-success">Quarta-Feira</th>
                <th class="bg-success">Quinta-Feira</th>
                <th class="bg-success">Sexta-Feira</th>
              </tr>
            </thead>';
    $dias_da_semana = 1;
    $horario = 0;
    foreach ($disciplinas as $id_disciplina) {
      $dias_da_semana++;
      if ($dias_da_semana == 2) {
        $horario++;
        echo '<tr><td class="bg-success">'.$horario.'º Horário</td><td>'.nome_disciplina($id_disciplina).'<br>'.nome_docente($leciona_disciplina[$id_disciplina]).'</td>';
      }
      else {
        echo '<td>'.nome_disciplina($id_disciplina).'<br>'.nome_docente($leciona_disciplina[$id_disciplina]).'</td>';
        if ($dias_da_semana == 6){
          echo '</tr>';
          $dias_da_semana = 1;
        }
      }
    }
    echo '</table>';
  }
?>


<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Horários</h1>

    <form class="form-group">
      <div class="panel-group" id="accordion">

        <?php 

          $count_turmas = 0;
          $_docentes = explode(';', $docentes);

          foreach ($turmas as $turma) {

            $_disciplinas = explode(';', $disciplinas[$count_turmas]);
            shuffle($_disciplinas);
            $copia_disciplinas = $_disciplinas;
            $dias_da_semana = 0;
            $aula = 0;
            $leciona_disciplina = array();

            foreach ($_disciplinas as $key => $id_disciplina) {
              $aulas_por_disciplina = aulas_por_disciplina($copia_disciplinas, $id_disciplina);
              $copia_disciplinas = reduzir_disciplina($copia_disciplinas, $id_disciplina);
              $docente_disponivel = docente_disponivel($_docentes, $aulas_por_disciplina, $id_disciplina);
              $_docentes = reduzir_carga_horaria_docente($_docentes, $docente_disponivel, $aulas_por_disciplina);
              $leciona_disciplina = leciona_disciplina($leciona_disciplina, $docente_disponivel, $id_disciplina, $aulas_por_disciplina);
            }
            
            echo '<div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count_turmas.'">
                        '.$turma.' ('.$turnos[$count_turmas].')'.'
                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                      </div>
                      <div class="panel-collapse collapse" id="collapse'.$count_turmas.'">
                        <div class="panel-body">';
            #imprimir_lista($_disciplinas);
            gerar_horario($_disciplinas, $leciona_disciplina);
            echo '</div></div></div>';
            $count_turmas++;
          }
        ?>

      </div>
    </form>
    </div>
</body>
