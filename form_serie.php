
<?php 
  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $resultado_sigla = mysql_query("SELECT * FROM disciplinas where login='$login' ORDER BY 'sigla_disciplina'");
  $resultado_sigla2 = mysql_query("SELECT * FROM disciplinas where login='$login' ORDER BY 'sigla_disciplina'");
?>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Série</h1>

          <form method="post" action="dao_serie/insert_serie.php">

          <div class="form-group">
          <label>Série</label><br>
          <select name="nome_serie" class="select form-control" required>
            <option value="" disabled selected>Selecione uma Série</option>
            <option value="6º Ano">6º Ano</option>
            <option value="7º Ano">7º Ano</option>
            <option value="8º Ano">8º Ano</option>
            <option value="9º Ano">9º Ano</option>
            <option value="1º Grau">1º Grau</option>
            <option value="2º Grau">2º Grau</option>            
            <option value="3º Grau">3º Grau</option>
            <option value="9º Ano - Noturno">9º Ano - Noturno</option>
            <option value="1º Grau - Noturno">1º Grau - Noturno</option>
            <option value="2º Grau - Noturno">2º Grau - Noturno</option>
            <option value="3º Grau - Noturno">3º Grau - Noturno</option>
          </select>
          </div>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script type="text/javascript">
          $(document).ready(function(){
              var maxField = 20; //Input fields increment limitation
              var addButton = $('.btn-primary'); //Add button selector
              var wrapper = $('.field_wrapper'); //Input field wrapper
              var fieldHTML = '<div><br><div class="col-xs-5"><select name="sigla_disciplina[]" id="ex3" class="select form-control" required><option value="" disabled selected>Selecione uma Sigla de Disciplina</option><?php while($linhas = mysql_fetch_array($resultado_sigla)){ $siglaList = $linhas['sigla_disciplina']; echo '<option value="'.$siglaList.'">'.$siglaList.'</option>';}?></select></div><div class="col-xs-6"><input type="number" min="1" step="1" class="form-control" id="ex4" name="aulas_por_disciplina[]" placeholder="Informe a quantidade de Aulas dessa Disciplina" required></div><div class="col-xs-1"></div><a href="javascript:void(0);" id="ex5" type="button" class="btn btn-danger" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div>'; //New input field html
              var x = 1; //Initial field counter is 1
              $(addButton).click(function(){ //Once add button is clicked
                  if(x < maxField){ //Check maximum number of input fields
                      x++; //Increment field counter
                      $(wrapper).append(fieldHTML); // Add field html
                  }
              });
              $(wrapper).on('click', '.btn-danger', function(e){ //Once remove button is clicked
                  e.preventDefault();
                  $(this).parent('div').remove(); //Remove field html
                  x--; //Decrement field counter
              });
          });
          </script>
          
        <div class="form-group">
          <div class="col-xs-5">
            <label for="ex3">Sigla da Disciplina</label>
          </div>
          <div class="col-xs-6">
            <label for="ex4">Quantidade de Aulas na Semana desta Disciplina</label>
          </div>
          <div class="col-xs-1">
            <label for="ex5"></label>
          </div>
          <div class="field_wrapper">
            <div>
              <br>
              <div class="col-xs-5">
                  <select name="sigla_disciplina[]" id="ex3" class="select form-control" required>
                    <option value="" disabled selected>Selecione uma Sigla de Disciplina</option>
                    <?php
                      while($linhas2 = mysql_fetch_array($resultado_sigla2)){
                        $siglaList2 = $linhas2['sigla_disciplina'];
                        echo '<option value="'.$siglaList2.'">'.$siglaList2.'</option>';
                      }
                    ?>
                  </select>
              </div>
              <div class="col-xs-6">
                  <input type="number" min="1" step="1" class="form-control" id='ex4' name="aulas_por_disciplina[]" placeholder="Informe a quantidade de Aulas dessa Disciplina" required><br>
              </div>
              <div class="col-xs-1">
              </div>
                  <a href="javascript:void(0);" id='ex5' type='button' class='btn btn-primary' title="Add field"><span class='glyphicon glyphicon-plus'></span></a>
            </div>
          </div>
          <br>
        </div>
          
	           <button type="submit" class="btn btn-info">Salvar</button>
             <button class="btn btn-danger" type="reset">Limpar</button>

	       </form>
        </div>
  </body>

