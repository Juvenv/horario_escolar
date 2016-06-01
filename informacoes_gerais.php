
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
    <link type="text/css" rel="stylesheet" href="css/waitMe.css">
  </head>
  
  <body>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="titulo">
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
	              $aulas_vagas = 0;
	              while ($aux1 = mysql_fetch_array($disciplinas)) {
	                $id_disciplina = $aux1['id_disciplina'];
	                $aux2 = mysql_fetch_array(mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'"));
	                $aux3 = '&nbsp;&nbsp;&nbsp;&nbsp;'.$aux2['nome_disciplina'].'&nbsp;&nbsp;&nbsp;&nbsp;'.'Possui <font color="red">'.$aux1['aulas_por_disciplina'].'</font> Aulas na Semana';
	                array_push($nome, $aux3);
	                $count2 = 0;
	                while ($count2 < $aux1['aulas_por_disciplina']){
	                  array_push($disciplinas_array, $aux2['id_disciplina']);
	                  $count2++;
	                }
	                $aulas_vagas += $aux1['aulas_por_disciplina'];
	              }
	              $nome_disciplina = implode('<br/>', $nome);


	              if (($quantidade_de_aulas - $aulas_vagas) >= 0) {
		              $c = 0;
		              while ($c < ($quantidade_de_aulas - $aulas_vagas)){
		                array_push($disciplinas_array, '-');
		                $c++;
		              }
		              $array = implode(';', $disciplinas_array);

		              echo '<div class="form-group" id="container">
		                      <input name="turmas[]" type="hidden" value="'.$nome_serie.' - '.$nome_turma.'"></input>
		                      <input name="turnos[]" type="hidden" value="'.$nome_turno.'"></input>
		                      <input name="disciplinas[]" type="hidden" value="'.$array.'"></input>
		                    </div>
		                    <div class="panel panel-default">
		                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$aux.'">
		                        '.$nome_serie.' - '.$nome_turma.' ('.$nome_turno.')'.'
		                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
		                      </div>
		                      <div class="panel-collapse collapse" id="collapse'.$aux.'">
		                        <div class="panel-body">
		                          <h4>Dados Gerais sobre está Turma:</h4><br>
		                          Turno de Aulas: <font color="red">'.$nome_turno.'</font><br>
		                          Quantidade de Aulas na Semana: <font color="red">'.$quantidade_de_aulas.'</font><br>
		                          Quantidade de Disciplinas: <font color="red">'.$numero_de_disciplinas.'</font><br><br>
		                          Disciplinas:<br><br>
		                          '.$nome_disciplina.'<br><br>
		                          <div class="pull-right">
		                            Quantidade de Aulas Vagas: <font size="4" color="red">'.($quantidade_de_aulas - $aulas_vagas).'</font>
		                          </div>
		                        </div>
		                      </div>
		                    </div>';
		           }
		           else {
		           		echo '<br><font color="red">O '.$nome_serie.' - '.$nome_turma.' possui mais aulas que o permitido no turno '.$nome_turno.', verifique esse problema antes de gerar os Horários.</font><br>';
		           }
	            $aux++;
	            }

	            $aux_docentes = mysql_query("SELECT * FROM docentes where login='$login' ORDER BY Date('data_contratacao') ASC");
	            $array_docentes = array();
	            while ($d = mysql_fetch_array($aux_docentes)){
	            	$count3 = 0;
	              	while ($count3 < $d['carga_horaria']){
	              		array_push($array_docentes, $d['id_docente']);
	              		$count3++;
	              	}
	            }
	            $array2 = implode(';', $array_docentes);
	            
	            echo '</div>
	            		<input name="docentes" type="hidden" value="'.$array2.'"></input>
	            		<button type="submit" class="btn btn-info btn-lg" id="button_gerar">Gerar Horário</button>';
	        }
        ?>

      </form>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="js/waitMe.js"></script>

	<script>
		$(function(){
			// none, bounce, rotateplane, stretch, orbit, 
			// roundBounce, win8, win8_linear or ios
			var current_effect = 'roundBounce'; // 
			$('#button_gerar').click(function() {
			run_waitMe(current_effect);
			});
			function run_waitMe(effect){
				$('#titulo').waitMe({
				//none, rotateplane, stretch, orbit, roundBounce, win8, 
				//win8_linear, ios, facebook, rotation, timer, pulse, 
				//progressBar, bouncePulse or img
				effect: 'roundBounce',
				//place text under the effect (string).
				text: 'Carregando...',
				//background for container (string).
				bg: 'rgba(255,255,255,0.7)',
				//color for background animation and text (string).
				color: '#000',
				//change width for elem animation (string).
				sizeW: '',
				//change height for elem animation (string).
				sizeH: '',
				// url to image
				source: '',
				// callback
				});
			}
		});
	</script>

  </body>

