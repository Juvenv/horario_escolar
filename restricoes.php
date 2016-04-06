
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM restricoes ORDER BY 'matricula'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Restrições de Horário</h1>
      </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_restricoes.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Restrição</a> 
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
