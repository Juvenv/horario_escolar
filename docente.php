
<?php

  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $resultado = mysql_query("SELECT * FROM docentes where login='$login' ORDER BY 'nome_professor'");

?>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header">Professor</h1>
  </div>
  
          <table border="1" class="table table-striped" id='table'>

          <caption>
             <a href="form_docente.php" class="btn btn-primary">
              <span class="glyphicon glyphicon-plus"></span> Adicionar Professor</a> 
              <div class="form-group pull-right">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar Docente">
              </div>
          </caption>
            <thead>
              <tr>
                  <th>Matricula</th>
                  <th>Nome do Professor</th>
                  <th>Carga Horária</th>
                  <th>Data de Contratação</th>
                  <th>Disciplinas</th>
                  <th>Editar Cadastro</th>
                  <th>Excluir Cadastro</th>
              </tr>
            </thead>
            <tbody>
        <?php
          while ($linhas = mysql_fetch_array($resultado)){
              $id_docente = $linhas['id_docente'];
              $matricula = $linhas['matricula'];
              $nome_professor = $linhas['nome_professor'];
              $carga_horaria = $linhas['carga_horaria'];
              $data_contratacao = $linhas['data_contratacao'];
              $disciplina = mysql_query("SELECT * FROM disciplinas_por_docente where id_docente='$id_docente' and login='$login'");
              $sigla = array();
              while ($aux = mysql_fetch_array($disciplina)) {
                $id_disciplina = $aux['id_disciplina'];
                $aux2 = mysql_fetch_array(mysql_query("SELECT * FROM disciplinas where id_disciplina='$id_disciplina' and login='$login'"));
                $aux3 = $aux2['sigla_disciplina'];
                array_push($sigla, $aux3);
              }
              $sigla_disciplina = implode('<br/>', $sigla);
              echo "<tr>";
              echo "<td>".$matricula."</td>";
              echo "<td>".$nome_professor."</td>";
              echo "<td>".$carga_horaria."</td>";
              echo "<td>".$data_contratacao."</td>";
              echo "<td>".$sigla_disciplina."</td>";
              echo "<td><a href='form_docente_update.php?id_docente=$id_docente&matricula=$matricula&nome_professor=$nome_professor&carga_horaria=$carga_horaria&data_contratacao=$data_contratacao' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td>";
              echo "<td><a href='dao_docente/delete_docente.php?id_docente=$id_docente' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Excluir</a></td>";
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
