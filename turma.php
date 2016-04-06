
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM turmas ORDER BY 'serie'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turma</h1>
      </div>

          <table border="1" class="table table-striped" id='table'>
          <caption>
             <a href="form_turma.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Turma</a> 
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Turma">
              </div>
          </caption>
            <thead>
              <tr>
                  <th>Turma</th>
                  <th>Turno</th>
                  <th>Série</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $id_turma = $linhas['id_turma'];
              $turma = $linhas['turma'];
              $turno = $linhas['turno'];
              $serie = $linhas['serie'];
              echo "<tr>";
              echo "<td>".$turma."</td>";
              echo "<td>".$turno."</td>";
              echo "<td>".$serie."</td>";
              echo "<td><a href='form_turma_update.php?id_turma=$id_turma&turma=$turma&turno=$turno&serie=$serie' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_turma/delete_turma.php?id_turma=$id_turma' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
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
