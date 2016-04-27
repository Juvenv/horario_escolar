
<?php

  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";

  if (isset($_POST['turmas'])){
    $turmas = $_POST['turmas'];
    $turnos = $_POST['turnos'];
    $disciplinas = $_POST['disciplinas'];  
  }
  else{
    echo "<script>alert('Verifique se existem Turmas Cadastradas.'); window.location.href='informacoes_gerais.php';</script>";
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

          $count = 0;
          foreach ($turmas as $turma) {

            $aux = explode(';', $disciplinas[$count]);
            shuffle($aux);
            $aux2 = $aux;
            $aulas = implode(', ', $aux);
            echo '<div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$count.'">
                        '.$turma.' ('.$turnos[$count].')'.'
                        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
                      </div>
                      <div class="panel-collapse collapse" id="collapse'.$count.'">
                        <div class="panel-body">
                          <table border="1" class="table table-striped">
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
                              $count2 = 0;
                              $count3 = 0;
                              foreach ($aux2 as $key) {
                                $count2++;
                                if ($count2 == 1) {
                                  $count3++;
                                  echo '<tr><td class="bg-success">'.$count3.'º Horário</td><td>'.$key.'</td>';
                                }
                                else {
                                  echo '<td>'.$key.'</td>';
                                  if ($count2 == 5){
                                    echo '</tr>';
                                    $count2 = 0;
                                  }
                                }
                              }
                              if ($count2 > 0){
                                while ($count2 < 5){
                                  echo '<td>'.'-'.'</td>';
                                  $count2++;
                                }
                                echo '</tr>';
                              }
                              echo '
                          </table>
                        </div>
                      </div>
                  </div>';
            $count++;
            
          }

        ?>

      </div>
    </form>


    </div>
</body>
