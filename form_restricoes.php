
<?php 

  include_once 'seguranca.php';
  protegePagina();

  if (isset($_SESSION)) {
    $login = $_SESSION['login'];
    include_once "templates.php";
    $resultado_professor = mysql_query("SELECT * FROM docentes where login='$login' ORDER BY 'nome_professor'");
    $turnos = mysql_query("SELECT * FROM turnos where login='$login' ORDER BY 'nome_turno'");
  }

  function gerar_restricoes($turnos){

    echo '<table class="table table-hover">';
    while ($turno = mysql_fetch_array($turnos)) {
      $aulas = $turno['quantidade_de_aulas'];
      echo '<tr>
              <th colspan="6" class="bg-success">'.$turno['nome_turno'].'</th>
            </tr>
            <tr>
              <th>Segunda-Feira</th>
              <th>Terça-Feira</th>
              <th>Quarta-Feira</th>
              <th>Quinta-Feira</th>
              <th>Sexta-Feira</th>
            </tr>';
      $dia_da_semana = 2;
      $horario = 1;
      $count = 0;
      while ($count < $aulas) {
        if ($dia_da_semana == 2){
          echo '<tr><td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="'.$dia_da_semana.''.$turno['nome_turno']{0}.''.$horario.'">'.$horario.'º Horário</label><br></td>';
          $dia_da_semana++;
        }
        elseif ($dia_da_semana == 6){
          echo '<td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="'.$dia_da_semana.''.$turno['nome_turno']{0}.''.$horario.'">'.$horario.'º Horário</label><br></td></tr>';
          $dia_da_semana = 2;
          $horario++;
        }
        else {
          echo '<td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="'.$dia_da_semana.''.$turno['nome_turno']{0}.''.$horario.'">'.$horario.'º Horário</label><br></td>';
          $dia_da_semana++;
        }
        $count++;
      }
    }
    echo '</table>';
  }

?>

 <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-11 col-md-offset-2 main">
          <h1 class="page-header">Restrição de Horário</h1>

        <form method="post" action="dao_restricoes/insert_restricoes.php">

        <div class="form-group">
          <label>Professor</label><br>
          <select name="matricula" class="select form-control">
            <option value="" disabled selected>Informe a Matricula do Professor</option>
            <?php
              while($linhas = mysql_fetch_array($resultado_professor)){
                $docenteList = $linhas['matricula'].' - '.$linhas['nome_professor'];
                $docenteMatricula = $linhas['matricula'];
                echo '<option value="'.$docenteMatricula.'">'.$docenteList.'</option>';
              }
            ?>
          </select>
          </div>

         <div class="form-group">
          <label for="exampleInputPassword4">Restrições de Horário de Professor</label><br>
          
          <?php gerar_restricoes($turnos);?>
          
          </div>
	         <button type="submit" class="btn btn-info">Salvar</button>
	         <button class="btn btn-danger" type="reset">Limpar</button>
  	   </form>
    </div>
  </body>
