
<?php
  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $turmas = mysql_query("SELECT * FROM turmas where login='$login' ORDER BY 'nome_turma'");

?>

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  
  <body>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Informações Gerais</h1>

      <form class="form-group" action="gerar_horarios.php" method="post">
        <div class="panel-group" id="accordion">

        <?php
        	if (mysql_num_rows($turmas) == 0){
        		echo '<h4>Nenhuma Turma Cadastrada no Momento</h4>';
        	}
        	else {
        	
	            $aux = 0;
	            while ($count = mysql_fetch_array($turmas)) {

	              $id_serie = $count['id_serie'];
	              $series = mysql_fetch_array(mysql_query("SELECT * FROM series where id_serie='$id_serie' and login='$login'"));
	              $nome_serie = $series['nome_serie'];
	              $nome_turma = $count['nome_turma'];
	              $id_turno = $count['id_turno'];
	              $turnos = mysql_fetch_array(mysql_query("SELECT * FROM turnos where id_turno='$id_turno' and login='$login'"));
	              $nome_turno = $turnos['nome_turno'];
	              $quantidade_de_aulas = $turnos['quantidade_de_aulas'];


	              $disciplinas = mysql_query("SELECT * FROM disciplinas_por_serie where id_serie='$id_serie' and login='$login'");
	              $nome = array();
	              $disciplinas_array = array();
	              $numero_de_disciplinas = mysql_num_rows($disciplinas);
	              $vagas = 0;
	              while ($aux1 = mysql_fetch_array($disciplinas)) {
	                $id_disciplina = $aux1['id_disciplina'];
	                $aux2 = mysql_fetch_array(mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'"));
	                $aux3 = $aux2['nome_disciplina'].'&nbsp;&nbsp;&nbsp;&nbsp;'.'Possui '.$aux1['aulas_por_disciplina'].' Aulas na Semana';
	                array_push($nome, $aux3);
	                $count2 = 0;
	                while ($count2 < $aux1['aulas_por_disciplina']){
	                  array_push($disciplinas_array, $aux2['sigla_disciplina']);
	                  $count2++;
	                }
	                $vagas += $aux1['aulas_por_disciplina'];
	              }
	              $nome_disciplina = implode('<br/>', $nome);


	              $c = 0;
	              while ($c < ($quantidade_de_aulas - $vagas)){
	                array_push($disciplinas_array, '-');
	                $c++;
	              }
	              $array = implode(';', $disciplinas_array);


	              echo '<div class="form-group">
	                      <input name="turmas[]" type="hidden" value="'.$nome_serie.' - '.$nome_turma.'"></input>
	                      <input name="turnos[]" type="hidden" value="'.$nome_turno.'"></input>
	                      <input name="disciplinas[]" type="hidden" value="'.$array.'"></input>
	                    </div>
	                    <div class="panel panel-default">
	                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$aux.'">
	                        '.$nome_serie.' - '.$nome_turma.'
	                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
	                      </div>
	                      <div class="panel-collapse collapse" id="collapse'.$aux.'">
	                        <div class="panel-body">
	                          <h4>Dados Gerais sobre está Turma:</h4><br>
	                          Turno de Aulas: '.$nome_turno.'<br>
	                          Quantidade de Aulas na Semana: '.$quantidade_de_aulas.'<br>
	                          Quantidade de Disciplinas: '.$numero_de_disciplinas.'<br><br>
	                          Disciplinas:<br><br>
	                          &nbsp;&nbsp;&nbsp;&nbsp;'.$nome_disciplina.'<br><br>
	                          <div class="pull-right">
	                            Quantidade de Aulas Vagas: '.($quantidade_de_aulas - $vagas).'
	                          </div>
	                        </div>
	                      </div>
	                    </div>';
	            $aux++;
	            }
	            echo '</div><button type="submit" class="btn btn-info btn-lg">Gerar Horário</button>';
	        }
        ?>

      </form>
    </div>
  </body>

