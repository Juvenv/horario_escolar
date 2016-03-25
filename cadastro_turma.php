
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turma</h1>

      	 <form>
      	 
      	 <div class="form-group">
      		<label for="exampleInputEmail1">Turma</label>
      		<input type="text" class="form-control" id="turma" placeholder="Informe o nome da Turma">
      	  </div>
      	 
      	 <div class="form-group">
      		<label for="exampleInputPassword2">Serie</label>
      		<input type="text" class="form-control" id="serie" placeholder="Informe o nome da serie">
      	  </div>
      	  
      	  <div class="form-group">
      		<label for="exampleInputPassword3">Turma</label><br>
      		<select name="select" id="turno" class="select form-control">
            <option value="" disabled selected>Selecione um Turma para as Aulas</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>
          </select>
      	 </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
           <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
    </div>
  </body>
</html>
