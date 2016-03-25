
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php";?>

  <head>
	<meta http-equiv="Content-Type" content="text/html", charset="utf-8" >
  </head>

  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turno</h1>

        	 <form method="post" action="cad_turno.php">
        	
           <div class="form-group">
          <label for="exampleInputPassword1">Turno</label><br>
          <select name="turno" id="turno" class="select form-control">
            <option value="" disabled selected>Selecione um Turno para as Aulas</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
          </select>
          </div> 
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword2">Quantidade de Aulas</label>
        		<input type="number" class="form-control" name="quantidadeAulas" id="aulas" placeholder="Informe a Quantidade de Aulas que esse Turno possui na Semana">
        	  </div>

	           <button type="submit" class="btn btn-info">Salvar</button>
             <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
        </div>
  </body>
</html>


<?php

?>