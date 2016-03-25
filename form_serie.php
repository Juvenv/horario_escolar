
<!DOCTYPE html>
<html lang="pt-br">

<?php 
  include "templates.php";
  require_once "conexao.php";?>
 
  <head>
  <meta http-equiv="Content-Type" content="text/html", charset="iso-8859-1" >
  </head>
	
  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Série</h1>

        	 <form method="post" action="cad_serie.php">        	 
        
          <div class="form-group">
          <label>Série</label><br>
          <select name="serie" id="serie" class="select form-control">
            <option value="" disabled selected>Selecione uma Série</option>
            <option value="6 Ano">6º Ano</option>
            <option value="7 Ano">7º Ano</option>
            <option value="8 Ano">8º Ano</option>
            <option value="9 Ano">9º Ano</option>
            <option value="1 Grau">1º Grau</option>
            <option value="2 Grau">2º Grau</option>            
            <option value="3 Grau">3º Grau</option>

          </select>
          </div> 

	           <button type="submit" class="btn btn-info">Salvar</button>
             <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
        </div>
  </body>
</html>
