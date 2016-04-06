
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM disciplinas ORDER BY 'disciplina'");
?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Disciplina</h1>
      </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_disciplina.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Disciplina</a> 
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
