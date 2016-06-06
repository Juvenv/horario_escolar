
<?php

  include_once 'seguranca.php';
  protegePagina();
  include_once "templates.php";
  #require 'gerar_pdf.php';
  require "gerar_pdf.php";

  if (isset($_POST['turmas'])){
    $turmas = $_POST['turmas'];
    $turnos = $_POST['turnos'];
    $disciplinas = $_POST['disciplinas'];
    $docentes = $_POST['docentes'];
  }
  else{
    echo "<script>alert('Verifique se existem Turmas Cadastradas.'); window.location.href='informacoes_gerais.php';</script>";
  }


  ############################################### Inicio do Algoritmo Genetico ##################################################


  class Individuo {

    var $cromossomo; // o cromossomo é uma lista com os horarios das disciplinas por docente
    var $avaliacao = 0;

    function getIndividuo(){
      return get_class($this);
    }
    function getCromossomo(){
      return $this->cromossomo;
    }
    function setCromossomo($cromossomoAux){
      $this->cromossomo = $cromossomoAux;
    }
    function getAvaliacao() {
      return $this->avaliacao;
    }
    function setAvaliacao($avaliacaoAux) {
      $this->avaliacao = $avaliacaoAux;
    }
    function numero_aulas() {   # retorna o numero de aulas no cromossomo
      return count($this->getCromossomo(), 1) - 5;
    }
    function getQualidade(){
      return ((100 * $this->getAvaliacao()) / $this->numero_aulas());
    }
    function crossOver($pai) {  # O cromossomo deve ser de um individuo da mesma serie, turma e turno que o outro
      # Realiza o CrossOver por Ordem
      $filho = new Individuo;
      $novoCromossomo = array();
      $aux = array();
      $disciplinasAux = array();
      foreach ($this->getCromossomo() as $dia => $horas) {
        foreach ($horas as $hora => $disciplina_docente) {
          if (rand(0, 1) == 1) {
            $novoCromossomo[$dia][$hora] = $disciplina_docente;
          }
          else {
            $aux[$dia][$hora] = $disciplina_docente;
            $disciplinasAux[] = $disciplina_docente;
          }
        }
      }
      foreach ($aux as $diaAux => $horasAux) {
        foreach ($horasAux as $horaAux => $disciplina_docente) {
          foreach ($pai->getCromossomo() as $dia => $horas) {
            foreach ($horas as $hora => $disciplina_docente_pai) {
              foreach ($disciplinasAux as $key => $value) {
                if ($value == $disciplina_docente_pai) {
                  $novoCromossomo[$diaAux][$horaAux] = $disciplina_docente_pai;
                  unset($disciplinasAux[$key]);
                  break 3;
                }
              }
            }
          }
        }
      }
      $filho->setCromossomo($novoCromossomo);
      return $filho;
    }
    function verificar_choques($individuo) {    # O individuo deve ser do mesmo turno que o outro
      # A cada vez que respeitar a regra dos choques, os dois individuos ganham 1 na sua avaliação
      foreach ($this->cromossomo as $dia => $value) {
        foreach ($value as $hora => $value2) {
          if (substr(strrchr($value2, '<br>'), 4) != substr(strrchr($individuo->getCromossomo()[$dia][$hora], '<br>'), 4)) {
            $this->setAvaliacao($this->getAvaliacao() + 1);
            $individuo->setAvaliacao($individuo->getAvaliacao() + 1);
          }
        }
      }
    }
    function verificar_restricoes($turno) {
      # A cada vez que respeitar a regra de restrições, o individuo ganha 1 na sua avaliação
      $login = $_SESSION['login'];
      $letra_turno = substr($turno, 0, 1);
      foreach ($this->getCromossomo() as $dia => $horas) {
        foreach ($horas as $hora => $horario) {
          #$id_docente = id_docente(str_replace("</font>", "", substr(strrchr($horario, '<br>'), 4)));
          if ($horario != '-') {
	          $id_docente = id_docente(substr(strrchr($horario, '<br>'), 4));
	          $diaMaisDois = $dia + 2;
	          $horarioFormat = $diaMaisDois.''.$letra_turno.''.$hora;
	          if ($id_docente != '') {
	            $result = mysql_query("SELECT * FROM restricoes where id_docente='$id_docente' and login='$login'");
	            if (mysql_num_rows($result) > 0) {
	              $premio = 1;
	              while ($aula = mysql_fetch_assoc($result)) {
	                if ($aula['horario_inviavel'] == $horarioFormat) {
	                  $this->setAvaliacao($this->getAvaliacao() - 1);
	                  #$this->avaliacao = $this->avaliacao - 1;
	                  $premio = 0;
	                  break 1;
	                }
	              }
	              if ($premio == 1) {
	                $this->setAvaliacao($this->getAvaliacao() + 1);
	                #$this->avaliacao = $this->avaliacao + 1;
	              }
	            }
	            else {
	            	$this->setAvaliacao($this->getAvaliacao() + 1);
	            }
	          }
	          else {
	          	$this->setAvaliacao($this->getAvaliacao() + 1);
	          }
	      }
          else {
            $this->setAvaliacao($this->getAvaliacao() + 1);
            #$this->avaliacao = $this->avaliacao + 1;
          }
        }
      }
    }
    function restricoes_final($turno) {
      # A diferença desse metodo, é que são adcionadas cores vermelhas nos horarios para mostrar quando quebra uma regra de restrição
      $login = $_SESSION['login'];
      $letra_turno = substr($turno, 0, 1);
      foreach ($this->getCromossomo() as $dia => $horas) {
        foreach ($horas as $hora => $horario) {
          #$id_docente = id_docente(str_replace("</font>", "", substr(strrchr($horario, '<br>'), 4)));
          if ($horario != '-') {
	          $id_docente = id_docente(substr(strrchr($horario, '<br>'), 4));
	          $diaMaisDois = $dia + 2;
	          $horarioFormat = $diaMaisDois.''.$letra_turno.''.$hora;
	          if ($id_docente != '') {
	            $result = mysql_query("SELECT * FROM restricoes where id_docente='$id_docente' and login='$login'");
	            if (mysql_num_rows($result) > 0) {
	              $premio = 1;
	              while ($aula = mysql_fetch_assoc($result)) {
	                if ($aula['horario_inviavel'] == $horarioFormat) {
	                  $this->getCromossomo()[$dia][$hora] = '<font color="red">'.$horario.'</font>';
	                  #$this->cromossomo[$dia][$hora] = '<font color="red">'.$horario.'</font>';
	                  $premio = 0;
	                  break 1;
	                }
	              }
	              if ($premio == 1) {
	                $this->getCromossomo()[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
	                #$this->cromossomo[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
	              }
	            }
	            else {
	            	$this->getCromossomo()[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
	            }
	          }
	          else {
	          	$this->getCromossomo()[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
	          }
	      }
          else {
            $this->getCromossomo()[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
            #$this->cromossomo[$dia][$hora] = '<font color="#03A5A9">'.$horario.'</font>';
          }
        }
      }
    }
    function mutacao() { # gera uma mutacao no cromossomo, sendo a chance de gerar essa mutacao é de 10%
      # realiza uma invercao entre duas posições no horario
      if (rand(0, 100) < 10) {
        $dia = rand(0, 4);
        $hora = rand(1, ((int)($this->numero_aulas() / 5)));
        $gene1 = $this->getCromossomo()[$dia][$hora];
        #$aux = $this->cromossomo[$dia][$hora];
        $dia2 = rand(0, 4);
        $hora2 = rand(1, ((int)($this->numero_aulas() / 5)));
        $gene2 = $this->getCromossomo()[$dia2][$hora2];
        #echo $gene2.'<br>';
        #$aux2 = $this->cromossomo[$dia2][$hora2];
        $this->getCromossomo()[$dia][$hora] = $gene2;
        $this->getCromossomo()[$dia2][$hora2] = $gene1;
        #$this->cromossomo[$dia][$hora] = $gene2;
        #$this->cromossomo[$dia2][$hora2] = $gene1;
      }
    }

  }

  function gerar_populacao($populacao, $horario, $turno, $turma) {  # Gera 100 individuos aleatórios de mesma Serie, Turma e Turno, e os coloca numa lista. Essa lista é retornada.
    $horarioAux = $horario;
    for ($i = 0; $i < 100; $i++) {
      shuffle($horarioAux);
      $individuo = new Individuo;
      $individuo->setCromossomo($horarioAux);
      $individuo->mutacao();
      $individuo->verificar_restricoes($turno);
      $populacao[$turno][$turma][$i] = $individuo;
    }
    return $populacao;
  }

  function selecao($individuos) {  # Cria uma lista (Faixa de Escala), aleatóriamente se escolhe um na lista. Os individuos mais avaliados tem maior faixa na lista, aumentando a chance de serem escolhidos.
    $lista = array();
    foreach ($individuos as $individuo) {
      if ($individuo->getAvaliacao() > 0){
        for ($i=0; $i < $individuo->getAvaliacao(); $i++) { 
          $lista[] = $individuo;
        }
      }
    }
    if (count($lista) > 0){
      #return $lista[rand(0, count($lista) - 1)];
      return $lista;
    }
    #return $individuos[rand(0, 99)];
    return $individuos;
  }

  function nova_geracao($populacao) {  # Gera uma nova população com as caracteristicas da primeira
    $nova_geracao = array();
    foreach ($populacao as $turno => $turmas) {
      foreach ($turmas as $turma => $individuos) {
        $lista = selecao($individuos);
        $tam_lista = count($lista);
        for ($i=0; $i < 100; $i++) { 
          if ($i < 70) {
	          #$pai1 = selecao($individuos);
	          $pai1 = $lista[rand(0, $tam_lista - 1)];
	          #$pai2 = selecao($individuos);
	          $pai2 = $lista[rand(0, $tam_lista - 1)];
	          $count = 0;
	          while (($pai1 == $pai2) and ($count < 10)){
	            #$pai2 = selecao($individuos);
	            $pai2 = $lista[rand(0, $tam_lista - 1)];
	            $count++;
	          }
	          $filho = $pai1->crossOver($pai2);
	          $filho->mutacao();
	          $filho->verificar_restricoes($turno);
	          $nova_geracao[$turno][$turma][$i] = $filho;
          }
          else {
          	$nova_geracao[$turno][$turma][$i] = $lista[rand(0, $tam_lista - 1)];
          }
        }
      }
    }
    return $nova_geracao;
  }

  function selecaoFinal($populacao) {
    $nova_populacao = array();
    foreach ($populacao as $turno => $turmas) {
      foreach ($turmas as $turma => $individuos) {
        $maior = 0;
        #$maior = $individuos[rand(0, count($individuos) - 1)]->getAvaliacao();
        #for ($i=0; $i < 100; $i++) { 
        foreach ($individuos as $key => $individuo) {
          if ($individuo->getAvaliacao() > $maior) {
            $maior = $individuo->getAvaliacao();
            $individuoAux = $individuo;
          }
        }
        $individuoAux->restricoes_final($turno);
        $nova_populacao[$turno][$turma] = $individuoAux;
      }
    }
    return $nova_populacao;
  }


  ################################################ Final do Algoritmo Genetico ###########################################


  function nome_disciplina($id_disciplina) {  # Retorna nome da disciplina
    if ($id_disciplina != '-') {
	    $login = $_SESSION['login'];
	    $result = mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'");
	    $result = mysql_fetch_assoc($result);
	    if (isset($result['nome_disciplina'])) {
	      return $result['nome_disciplina'];
	    }
	    return $id_disciplina;
	}
	else {
		return $id_disciplina;
	}
  }

  function nome_docente($id_docente) {    # Retorna nome do Docente
  	if ($id_docente != '') {
	    $login = $_SESSION['login'];
	    $result = mysql_query("SELECT * FROM docentes where id_docente='$id_docente' and login='$login'");
	    $result = mysql_fetch_assoc($result);
	    if (isset($result['nome_professor'])) {
	      return $result['nome_professor'];
	    }
	    return $id_docente;
	}
	else {
		return $id_docente;
	}
  }

  function id_docente($nome_professor) {
  	if ($nome_professor != '') { 
	    $login = $_SESSION['login'];
	    $result = mysql_query("SELECT * FROM docentes where nome_professor='$nome_professor' and login='$login'");
	    $result = mysql_fetch_assoc($result);
	    if (isset($result['id_docente'])) {
	      return $result['id_docente'];
	    }
	    return '';
	}
	else {
		return $nome_professor;
	}
  }

  function aulas_por_disciplina($disciplinas, $id_disciplina) {   # Retorna o numero de aulas de uma disciplina
    $aulas = 0;
    foreach ($disciplinas as $value) {
      if ($value == $id_disciplina) {
        $aulas++;
      }
    }
    return $aulas;
  }

  function aulas_por_docente($docentes, $id_docente) {  # Retorna o numero de aulas (Carga Horaria) de um Docente
    $aulas = 0;
    foreach ($docentes as $value) {
      if ($value == $id_docente){
        $aulas++;
      }
    }
    return $aulas;
  }

  function docente_disponivel($docentes, $aulas_por_disciplina, $id_disciplina) {  # Retorno o professor que tem aptidão para ministrar uma disciplina em uma turma
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

  function reduzir_disciplina($disciplinas, $id_disciplina) {  # Quando uma disciplina é seleciona para uma turma, ela passa a fazer parte desta, sendo assim não sendo mais necessária para lista Disciplinas. Dessa forma é excluida.
    foreach ($disciplinas as $key => $value) {
      if ($value == $id_disciplina){
        unset($disciplinas[$key]);
      }
    }
    return $disciplinas;
  }

  function reduzir_carga_horaria_docente($docentes, $docente_disponivel, $aulas_por_disciplina) {  # Quando um docente é seleciono para uma turma, ele passa a fazer parte desta, sendo assim não sendo mais necessária para lista Docentes. Dessa forma, numero de aulas que ele ministrar é excluido da sua carga horaria.
    $count = 0;
    foreach ($docentes as $key => $value) {
      if (($value == $docente_disponivel) and ($count < $aulas_por_disciplina)){
        unset($docentes[$key]);
        $count++;
      }
    }
    return $docentes;
  }

  function leciona_disciplina($leciona_disciplina, $docente_disponivel, $id_disciplina, $aulas_por_disciplina) { # Retorna uma lista com os docentes disponiveis e suas respectivas disciplinas
    if ($aulas_por_disciplina > 0) {
      $leciona_disciplina[$id_disciplina] = $docente_disponivel;
    }
    return $leciona_disciplina;
  }

  function horario($disciplinas, $leciona_disciplina) { # Retorna uma lista com os horarios da turma
    $horario = array();
    $dia_da_semana = 0;
    $hora = 1;
    foreach ($disciplinas as $id_disciplina) {
      $horario[$dia_da_semana][$hora] = nome_disciplina($id_disciplina).'<br>'.nome_docente($leciona_disciplina[$id_disciplina]);
      $dia_da_semana++;
      if ($dia_da_semana == 5){
        $dia_da_semana = 0;
        $hora++;
      }
    }
    return $horario;
  }

  function gerar_horario($horario) { # Gerar o Horarios de uma turma em formato de tabela no HTML
    $stringHorario = array();
    $hora = 1;
    $stringHorario[] = '<table id="table" border="1" class="table table-striped">
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
    foreach ($horario as $dia => $horas) {
      $stringHorario[] = '<tr><td class="bg-success">'.$hora.'º Horário</td>';
      foreach ($horas as $horaAux => $horarioAux) {
        $stringHorario[] = '<td>'.$horarioAux.'</td>';
      }
      $stringHorario[] = '</tr>';
      $hora++;
    }
    $stringHorario[] = '</table>';
    $html = implode('', $stringHorario);
    return $html;
    
  }

?>

<!-- ###################################   HTML   ################################################ -->

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

          $numeroDeGeracoes = 10;
          ini_set('max_execution_time', $numeroDeGeracoes * 30);
          $count_turmas = 0;
          $_docentes = explode(';', $docentes);

          $populacao = array();

          foreach ($turmas as $turma) {

            $_disciplinas = explode(';', $disciplinas[$count_turmas]);
            shuffle($_disciplinas);
            $copia_disciplinas = $_disciplinas;
            $leciona_disciplina = array();

            foreach ($_disciplinas as $key => $id_disciplina) {
              $aulas_por_disciplina = aulas_por_disciplina($copia_disciplinas, $id_disciplina);
              $copia_disciplinas = reduzir_disciplina($copia_disciplinas, $id_disciplina);
              $docente_disponivel = docente_disponivel($_docentes, $aulas_por_disciplina, $id_disciplina);
              $_docentes = reduzir_carga_horaria_docente($_docentes, $docente_disponivel, $aulas_por_disciplina);
              $leciona_disciplina = leciona_disciplina($leciona_disciplina, $docente_disponivel, $id_disciplina, $aulas_por_disciplina);
            }
            
            $populacao = gerar_populacao($populacao, horario($_disciplinas, $leciona_disciplina), $turnos[$count_turmas], $turma);
            $count_turmas++;
          }

          for ($geracao=0; $geracao < $numeroDeGeracoes; $geracao++) { 
            $populacao = nova_geracao($populacao);
          }
          $populacao = selecaoFinal($populacao);

          echo '<div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseDocentes">
                        Carga Horária dos Professores
                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                      </div>
                      <div class="panel-collapse collapse in" id="collapseDocentes">
                        <div class="panel-body">';
                        $docenteAux = 0;
                        foreach ($_docentes as $key => $docente) {
                          if ($docente != $docenteAux){
                            $docenteAux = $docente;
                            echo 'O(a) professor(a) <font size="4" color="red">'.nome_docente($docente).'</font> falta: <font size="4" color="red">'.aulas_por_docente($_docentes, $docente).'</font> horas/aula para completar sua Carga Horária<br>';
                          }
                        }
          echo '</div></div></div><br>';
          
          $count_turmas = 0;
          foreach ($turmas as $turma) { 
            $individuo = $populacao[$turnos[$count_turmas]][$turma];

            echo '<div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count_turmas.'">
                        '.$turma.' ('.$turnos[$count_turmas].')'.'
                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                      </div>
                      <div class="panel-collapse collapse" id="collapse'.$count_turmas.'">
                        <div class="panel-body">';

            #echo 'Avaliação do Horário: <font size="4" color="red">'.$individuo->getAvaliacao().'</font>';
            #echo '<div class="pull-right">Taxa de Qualidade do Horário: <font size="4" color="red">'.$individuo->getQualidade().'%</font></div>';

            $table = gerar_horario($individuo->getCromossomo(), $count_turmas);
            echo $table;

            $turmaFormat = str_replace("º", "", $turma.' '.$turnos[$count_turmas]);
            $pdf = new PDF('L');
            $pdf->AddPage();
            $pdf->SetFont('Arial', '', 12);
            $pdf->SetMargins(10, 0, 10);
            $pdf->Write(5, $turma.' '.$turnos[$count_turmas]);
            $pdf->Ln(5);
            $pdf->WriteHTML($table);
            $pdf->Output('F', "./pdf_horarios/".$turmaFormat.".pdf", 1);
            
            echo '<div class="pull-right"><a href="./pdf_horarios/'.$turmaFormat.'.pdf" download="'.$turma.' '.$turnos[$count_turmas].'.pdf"><img src="imagens/pdf.jpg"></a></div>';
            
            echo '</div></div></div><br>';
            $count_turmas++;
          }

        ?>

      </div>
    </form>
  </div>
</body>
