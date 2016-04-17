
<?php 
  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  $resultado_turno = mysql_query("SELECT * FROM turnos where login='$login' ORDER BY 'nome_turno'");
  $resultado_serie = mysql_query("SELECT * FROM series where login='$login' ORDER BY 'nome_serie'");
?>

  <body>
  
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turma</h1>

      	 <form method="post" action="dao_turma/insert_turma.php">
          <div class="form-group">
          <label>Turma</label><br>
          <select name="nome_turma" class="select form-control" required>
            <option disabled selected>Selecione uma Turma</option>
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
          <select name="nome_turno" class="select form-control" required>
            <option disabled selected>Selecione um Turno para as Aulas</option>
            <?php
              while($linhas = mysql_fetch_array($resultado_turno)){
                $turnoList = $linhas['nome_turno'];
                echo '<option value="'.$turnoList.'">'.$turnoList.'</option>';
              }
            ?>
          </select>
          </div>

          <div class="form-group">
          <label>Série</label><br>
          <select name="nome_serie" class="select form-control" required>
            <option disabled selected>Selecione uma Série</option>
            <?php
              while($linhas = mysql_fetch_array($resultado_serie)){
                $serieList = $linhas['nome_serie'];
                echo '<option value="'.$serieList.'">'.$serieList.'</option>';
              }
            ?>
          </select>
          </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
           <button class="btn btn-danger" type="reset">Limpar</button>
	       </form>
    </div>
  </body>

