
<?php
  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $resultado = mysql_query("SELECT * FROM series where login='$login' ORDER BY 'nome_serie'");
?>
    
    <body>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Serie</h1>
      </div>

          <table border="1" class="table table-striped" id='table'>
          <caption>
             <a href="form_serie.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Serie</a>
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Série">
              </div>
          </caption>
            <thead>
              <tr>
                  <th>Série</th>
                  <th>Disciplinas</th>
                  <th>Turmas</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>

        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $id_serie = $linhas['id_serie'];
              $nome_serie = $linhas['nome_serie'];
              $disciplinas = mysql_query("SELECT * FROM disciplinas_por_serie where id_serie='$id_serie' and login='$login'");
              $sigla = array();
              while ($aux = mysql_fetch_array($disciplinas)) {
                $id_disciplina = $aux['id_disciplina'];
                $aux2 = mysql_fetch_array(mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'"));
                $aux3 = $aux2['sigla_disciplina'].' - '.$aux['aulas_por_disciplina'].' Aulas';
                array_push($sigla, $aux3);
              }
              $sigla_disciplina = implode('<br/>', $sigla);
              $turma = mysql_query("SELECT * FROM turmas where id_serie='$id_serie' and login='$login'");
              $naoTurma = mysql_num_rows($turma);
              if ($naoTurma > 0){
                $turmas = array();
                while ($aux = mysql_fetch_array($turma)) {
                  $id_turma = $aux['id_turma'];
                  $aux2 = $aux['nome_turma'];
                  array_push($turmas, $aux2);
                }
                $nome_turma = implode('<br/>', $turmas);
              }
              else {
                $nome_turma = 'Série sem Turmas';
              }
              echo "<tr>";
              echo "<td>".$nome_serie."</td>";
              echo "<td>".$sigla_disciplina."</td>";
              echo "<td>".$nome_turma."</td>";
              echo "<td><a href='form_serie_update.php?id_serie=$id_serie&nome_serie=$nome_serie' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_serie/delete_serie.php?id_serie=$id_serie' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
            }
        ?>

        </table>
    </body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
          $('#search').keyup(function()
          {
            searchTable($(this).val());
          });
        });
        function searchTable(inputVal)
        {
          var table = $('#table');
          table.find('tr').each(function(index, row)
          {
            var allCells = $(row).find('td');
            if(allCells.length > 0)
            {
              var found = false;
              allCells.each(function(index, td)
              {
                var regExp = new RegExp(inputVal, 'i');
                if(regExp.test($(td).text()))
                {
                  found = true;
                  return false;
                }
              });
              if(found == true)$(row).show();else $(row).hide();
            }
          });
        }
      </script>
