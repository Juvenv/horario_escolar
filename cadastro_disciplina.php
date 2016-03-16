
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Disciplina</h1>
        	 <form>
        	 <div class="form-group">
        		<label for="exampleInputEmail1">Código da Disciplina</label>
        		<input type="text" class="form-control" id="codigo" placeholder="Informe o Código da Disciplina">
        	 </div>
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword2">Nome da Disciplina</label>
        		<input type="text" class="form-control" id="disciplina" placeholder="Informe o nome da Disciplina">
       	  </div>

        	  <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
      </div>
  </body>
</html>
