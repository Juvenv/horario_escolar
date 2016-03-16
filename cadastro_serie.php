
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Cadastro de Série</h1>

        	 <form>        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword2">Nome da Série</label>
        		<input type="text" class="form-control" id="serie" placeholder="Informe o nome da Série">
        	  </div>

          <div class="form-group">
          <label for="exampleInputPassword3">Disciplinas dessa Série</label><br>
          <select class="select form-control" name="select" id="disciplinas" multiple>
            <option value="port">Portugues</option>
            <option value="mat">Matematica</option>
            <option value="fis">Fisica</option>
          </select>
          </div> 

	           <button type="submit" class="btn btn-info">Cadastrar</button>
	       </form>
        </div>
  </body>
</html>
