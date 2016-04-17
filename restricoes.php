
<?php

  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $resultado = mysql_query("SELECT * FROM restricoes where login='$login' ORDER BY 'id_restricao'");

?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Restrições de Horário</h1>
      </div>

          <table border="1" class="table table-striped" id='table'>
          <caption>
             <a href="form_restricoes.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Restrição</a> 
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Restrição">
              </div>
          </caption>
            <thead>
              <tr>
                  <th>Professor</th>
                  <th>Horario Inviavel</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          $count = '';
          while($linhas = mysql_fetch_array($resultado)) {
              $id_docente = $linhas['id_docente'];
              $professor = mysql_fetch_array(mysql_query("SELECT * FROM docentes where id_docente='$id_docente' and login='$login'"));
              $nome_professor = $professor['nome_professor'];
              $horario = mysql_query("SELECT * FROM restricoes where id_docente='$id_docente' and login='$login'");
              $aulas = array();
              while ($aux = mysql_fetch_array($horario)) {
                array_push($aulas, $aux['horario_inviavel']);
              }
              $horario_inviavel = implode('<br/>', $aulas);
              if ($nome_professor != $count){
                echo "<tr>";
                echo "<td>".$nome_professor."</td>";
                echo "<td>".$horario_inviavel."</td>";
                echo "<td><a href='form_restricoes_update.php?nome_professor=$nome_professor' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
                echo "<td><a href='dao_restricoes/delete_restricoes.php?id_docente=$id_docente' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
                echo "</tr>";
                $count = $nome_professor;
              }
            }
        ?>
            </tbody>
        </table>

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
