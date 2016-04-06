
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM turnos ORDER BY 'turno'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turno</h1>
      </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_turno.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Turno</a> 
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
              $turno = $linhas['turno'];
              $quantidade_de_Aulas = $linhas['quantidade_de_Aulas'];
              echo "<tr>";
              echo "<td>".$turno."</td>";
              echo "<td>".$quantidade_de_Aulas."</td>";
              echo "<td><a href='form_turno_update.php?turno=$turno&quantidade_de_Aulas=$quantidade_de_Aulas' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_turno/delete_turno.php?turno=$turno' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
            }
        ?>
            </tbody>
        </table>
