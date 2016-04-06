
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM disciplinas ORDER BY 'disciplina'");
?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Disciplina</h1>
      </div>

          <table border="1" class="table table-striped" id='table'>
            <caption>
             <a href="form_disciplina.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Disciplina</a>
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Disciplina">
              </div>
            </caption>
            <thead>
              <tr>
                  <th>Sigla da Disciplina</th>
                  <th>Disciplina</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $sigla_disciplina = $linhas['sigla_disciplina'];
              $disciplina = $linhas['disciplina'];
              echo "<tr>";
              echo "<td>".$sigla_disciplina."</td>";
              echo "<td>".$disciplina."</td>";
              echo "<td><a href='form_disciplina_update.php?sigla_disciplina=$sigla_disciplina&disciplina=$disciplina' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_disciplina/delete_disciplina.php?sigla_disciplina=$sigla_disciplina' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
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
