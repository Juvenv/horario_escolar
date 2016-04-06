
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM turmas ORDER BY 'serie'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turma</h1>
      </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_turma.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Turma</a> 
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
