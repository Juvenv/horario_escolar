
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM restricoes ORDER BY 'matricula'");
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
                  <th>Matricula</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $matricula = $linhas['matricula'];
              echo "<tr>";
              echo "<td>".$matricula."</td>";
              echo "<td><a href='form_restricoes_update.php?matricula=$matricula' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_restricoes/delete_restricoes.php?matricula=$matricula' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
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
