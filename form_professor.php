
<!DOCTYPE html>
<html lang="pt-br">

<?php include "templates.php"; ?>

 <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Professor</h1>

        	 <form method="post" action="cad_professor.php">
        	 
        	 <div class="form-group">
        		<label for="exampleInputEmail7">Matrícula</label>
        		<input type="number" class="form-control" name="matricula" id="matricula"  placeholder="Informe sua matrícula">
        	  </div>
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword0">Nome</label>
        		<input type="text" class="form-control" name="nome_professor" id="nome_professor" placeholder="Informe seu nome">
        	  </div>
        	  
        	  <div class="form-group">
        		<label for="exampleInputPassword2">Carga Horária Obrigatória</label>
        		<input type="number" class="form-control" name="carga_horaria" id="carga_horaria" placeholder="Informe a quantidade de aulas obrigatórias semanal">
        	  </div>

            <div class="form-group">
            <label for="exampleInputPassword3">Data de Contratação</label>
            <input type="date"  name="data_contratacao"  id="data_contratacao" class="form-control" id="data">
            </div>

        <div class="form-group">
         <label>Disciplina</label><br>
          <select name="sigla_disciplina" id="sigla_disciplina" class="select form-control">
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

