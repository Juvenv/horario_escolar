
<!DOCTYPE html>
<html lang="pt-br">
<?php 
	include "templates.php";
	
?>
  <head>
	<meta http-equiv="Content-Type" content="text/html", charset="utf-8" >
  </head>
	
  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Disciplina</h1>
        	 <form method="post" action="cad_disciplina.php">
        	 <div class="form-group">
        		<label for="exampleInputEmail1">Sigla da Disciplina</label>
        		<input type="text" class="form-control" id="codigo" name="sigla_disciplina" placeholder="Informe o Código da Disciplina">
        	 </div>
        	 
         <div class="form-group">
         <label>Disciplina</label><br>
          <select name="disciplina" id="turno" class="select form-control">
            <option value="" disabled selected>Selecionar</option>
            <option value="Portugues">Português</option>
            <option value="Matemática">Matemática</option>
            <option value="Historia">História</option>
            <option value="Geografia">Geografia</option>
            <option value="Fisica">Física</option>
            <option value="Quimica">Química</option>
            <option value="Biologia">Biologia</option>
            <option value="Religiao">Religião</option>
            <option value="Informatica">Informática</option>
            <option value="Artes">Artes</option>
            <option value="Ciencias">Ciências</option>
            <option value="Educação Fisica">Educação Física</option>
            <option value="Sociologia">Sociologia</option>
            <option value="Ingles">Inglês</option>
            <option value="Espanhol">Espanhol</option>
            <option value="Filosofia">Filosofia</option>
          </select>
          </div> 

        	  <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
      </div>
  </body>
</html>
