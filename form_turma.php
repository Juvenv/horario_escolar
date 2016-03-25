
<!DOCTYPE html>
<html lang="pt-br">

<?php 

  include "templates.php";
  require_once "conexao.php";

?>
	
  <head>
	<meta http-equiv="Content-Type" content="text/html", charset="utf-8" >
  </head>

  <body>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turma</h1>

      	 <form method="post" action="?go=cadastrar">

          <div class="form-group">
          <label>Turma</label><br>
          <select name="turma" id="turma" class="select form-control">
            <option value="" disabled selected>Selecione uma Turma</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="Q">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="T">T</option>
            <option value="U">U</option>
            <option value="V">V</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Z">Z</option>
          </select>
          </div> 

      	   <div class="form-group">
          <label>Turno</label><br>
          <select name="turno" id="turno" class="select form-control">
            <option value="" disabled selected>Selecione um Turno para as Aulas</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
          </select>
          </div> 

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
           

	         <button type="submit" class="btn btn-info">Salvar</button>
           <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
    </div>
  </body>
</html>
