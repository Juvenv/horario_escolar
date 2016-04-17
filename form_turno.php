
<?php 
  include_once 'seguranca.php';
  protegePagina();
  $login = ''.$_SESSION['login'];
  include_once "templates.php";
?>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turno</h1>

        	 <form method="post" action="dao_turno/insert_turno.php">	
          <div class="form-group">
          <label for="exampleInputPassword1">Turno</label><br>
          <select name="nome_turno" class="select form-control" required>
            <option value="" disabled selected>Selecione um Turno para as Aulas</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
          </select>
          </div>
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword2">Quantidade de Aulas na Semana</label>
        		<input type="number" class="form-control" name="quantidade_de_aulas" placeholder="Informe a Quantidade de Aulas que esse Turno possui na Semana" required>
        	  </div>

	           <button type="submit" class="btn btn-info">Salvar</button>
             <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
        </div>
  </body>

