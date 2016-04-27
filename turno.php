
<?php
  include_once 'seguranca.php';
  protegePagina();
  $login = ''.$_SESSION['login'];
  include_once "templates.php";
  $resultado = mysql_query("SELECT * FROM turnos where login = '$login' ORDER BY 'nome_turno'");
?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turno</h1>
      </div>

    <body>

      <form class="form-group">

          <table border="1" class="table table-striped" id='table'>
          <caption>
             <a href="form_turno.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Turno</a>
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Turno">
              </div>
          </caption>
            <thead>
              <tr>
                  <th>Turno</th>
                  <th>Quantidade de Aulas</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $id_turno = $linhas['id_turno'];
              $nome_turno = $linhas['nome_turno'];
              $quantidade_de_aulas = $linhas['quantidade_de_aulas'];
              echo "<tr>";
              echo "<td>".$nome_turno."</td>";
              echo "<td>".$quantidade_de_aulas."</td>";
              echo "<td><a href='form_turno_update.php?id_turno=$id_turno&nome_turno=$nome_turno&quantidade_de_aulas=$quantidade_de_aulas' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_turno/delete_turno.php?id_turno=$id_turno' class='btn btn-danger' onclick=\"return confirm('Deseja excluir registro?');\"><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
            }
        ?>
            </tbody>
        </table>
      </form>
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
