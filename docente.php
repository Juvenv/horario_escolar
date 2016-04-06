
<?php
  include "templates.php";
  require_once "conexao.php";
  $resultado = mysql_query("SELECT * FROM docentes ORDER BY 'nome_professor'");
?>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Professor</h1>
  </div>

          <table border="1" class="table table-striped">
          <caption>
             <a href="form_docente.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Professor</a> 
          </caption>
            <thead>
              <tr>
                  <th>Matricula</th>
                  <th>Nome do Professor</th>
                  <th>Carga Horária</th>
                  <th>Data de Contratação</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while($linhas = mysql_fetch_array($resultado)){
              $matricula = $linhas['matricula'];
              $nome_professor = $linhas['nome_professor'];
              $carga_horaria = $linhas['carga_horaria'];
              $data_contratacao = $linhas['data_contratacao'];
              echo "<tr>";
              echo "<td>".$matricula."</td>";
              echo "<td>".$nome_professor."</td>";
              echo "<td>".$carga_horaria."</td>";
              echo "<td>".$data_contratacao."</td>";
              echo "<td><a href='form_docente_update.php?matricula=$matricula&nome_professor=$nome_professor&carga_horaria=$carga_horaria&data_contratacao=$data_contratacao' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_docente/delete_docente.php?matricula=$matricula' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
              echo "</tr>";
            }
        ?>
            </tbody>
        </table>
