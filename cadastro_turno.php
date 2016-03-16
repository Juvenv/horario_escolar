
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Cadastro de Turno</h1>

        	 <form>
        	 
        	 <div class="form-group">
          <label for="exampleInputPassword1">Turno</label><br>
          <select name="select" id="turno">
            <option value="default" selected="disabled">Selecione um Turma para as Aulas</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>
          </select>
          </div> 
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword2">Número Aulas na Semana</label>
        		<input type="number" class="form-control" id="aulas" placeholder="Informe a Quantidade de Aulas que esse Turno possui na Semana">
        	  </div>

	           <button type="submit" class="btn btn-info">Cadastrar</button>
	       </form>
        </div>
  </body>
</html>
