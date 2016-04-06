
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM series ORDER BY 'serie'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Serie</h1>
      </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_serie.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Serie</a> 
          </caption>
            <thead>
              <tr>
                  <th>Série</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $serie = $linhas['serie'];
              echo "<tr>";
              echo "<td>".$serie."</td>";
              echo "<td><a href='form_serie_update.php?serie=$serie' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_serie/delete_serie.php?serie=$serie' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
            }
        ?>
            </tbody>
        </table>
