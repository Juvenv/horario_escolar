
<?php 

  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  if (isset($_GET['id_docente'])){
    $id_docente = $_GET['id_docente'];
    $matricula = $_GET['matricula'];
    $nome_professor = $_GET['nome_professor'];
    $carga_horaria = $_GET['carga_horaria'];
    $data_contratacao = $_GET['data_contratacao'];
    $resultado_sigla = mysql_query("SELECT * FROM disciplinas where login='$login' ORDER BY 'sigla_disciplina'");
    $resultado_sigla2 = mysql_query("SELECT * FROM disciplinas where login='$login' ORDER BY 'sigla_disciplina'");
  }
  else {
    echo "<script>alert('Acesso Invalido.'); window.location.href='docente.php';</script>";
  }
  

?>


 <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Professor</h1>

        	<form method="post" action="dao_docente/update_docente.php">

          <div class="form-group">
            <input type="hidden" class="form-control" name="id_docente" value="<?php echo htmlspecialchars($id_docente);?>">
           </div>

        	 <div class="form-group">
        		<label for="exampleInputEmail7">Matrícula</label>
        		<input type="number" min="1" step="1" class="form-control" name="matricula" value="<?php echo htmlspecialchars($matricula);?>" required>
        	 </div>
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword0">Nome do Professor</label>
        		<input type="text" class="form-control" name="nome_professor" value="<?php echo htmlspecialchars($nome_professor);?>" required maxlength="20">
        	  </div>
        	  
        	  <div class="form-group">
        		<label for="exampleInputPassword2">Carga Horária Obrigatória</label>
        		<input type="number" min="1" step="1" class="form-control" name="carga_horaria" value="<?php echo htmlspecialchars($carga_horaria);?>" required>
        	  </div>

            <div class="form-group">
                <label for="exampleInputPassword87">Data de Contratação</label>
                <input type="date" class="form-control" name="data_contratacao" value="<?php echo htmlspecialchars($data_contratacao);?>" required>
            </div>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                  <script type="text/javascript">
                  $(document).ready(function(){
                      var maxField = 20; //Input fields increment limitation
                      var addButton = $('.btn-primary'); //Add button selector
                      var wrapper = $('.field_wrapper'); //Input field wrapper
                      var fieldHTML = '<div><br><div class="col-xs-11"><br><select name="sigla_disciplina[]" id="ex3" class="select form-control" required><option value="" disabled selected>Selecione uma Sigla de Disciplina</option><?php while($linhas = mysql_fetch_array($resultado_sigla)){ $siglaList = $linhas['sigla_disciplina']; echo '<option value="'.$siglaList.'">'.$siglaList.'</option>';
                              }?></select><br></div><div class="col-xs-1"><br></div><a href="javascript:void(0);" type="button" class="btn btn-danger" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div>'; //New input field html
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
                  <label for="ex3">Sigla da Disciplina</label>
                  <div class="field_wrapper">
                    <div>
                     <br>
                      <div class="col-xs-11">
                          <br>
                          <select name="sigla_disciplina[]" id="ex3" class="select form-control" required>
                            <option disabled selected>Selecione uma Sigla de Disciplina</option>
                            <?php
                              while($linhas2 = mysql_fetch_array($resultado_sigla2)){
                                $siglaList2 = $linhas2['sigla_disciplina'];
                                echo '<option value="'.$siglaList2.'">'.$siglaList2.'</option>';
                              }
                            ?>
                          </select><br>
                      </div>
                      <div class="col-xs-1">
                          <br>
                      </div>
                          <a href="javascript:void(0);" type='button' class='btn btn-primary' title="Add field"><span class='glyphicon glyphicon-plus'></span></a>
                    </div>
                  </div>
                </div>

            <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
	         
  	   </form>
    </div>
</body>


