
<?php 
  include_once 'seguranca.php';
  protegePagina();
  $login = ''.$_SESSION['login'];
  include_once "templates.php";
?>

        <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Passo a Passo</h1>
          <div class="row placeholders">
            
			<div class="col-xs-6 col-sm-2 placeholder">
              <a href="turno.php"><img src="imagens/turno.jpg" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Turno</h4>
              <span class="text-muted"> 1º Passo</span>
            </div>
            
      <div class="col-xs-6 col-sm-2 placeholder">
              <a href="disciplina.php"><img src="imagens/disciplina.png" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Disciplina</h4>
              <span class="text-muted"> 2º Passo</span>
            </div>

			<div class="col-xs-6 col-sm-2 placeholder">
              <a href="docente.php"><img src="imagens/professor.jpg" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Professor</h4>
              <span class="text-muted"> 3º Passo</span>
            </div>

       <div class="col-xs-6 col-sm-2 placeholder">
              <a href="restricoes.php"><img src="imagens/turno.jpg" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Restrições de Horario</h4>
              <span class="text-muted"> 4º Passo</span>
            </div>

      <div class="col-xs-6 col-sm-2 placeholder">
              <a href="serie.php"><img src="imagens/turma.png" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Série</h4>
              <span class="text-muted"> 5º Passo</span>
            </div>  
            
			<div class="col-xs-6 col-sm-2 placeholder">
              <a href="turma.php"><img src="imagens/turma.png" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail"></a>
              <h4>Turma</h4>
              <span class="text-muted"> 6º Passo</span>
            </div>

          </div>  
        </div>

