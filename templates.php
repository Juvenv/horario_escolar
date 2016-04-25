
<?php
  include_once "seguranca.php";
  protegePagina();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema geração de horario escolar">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>SGHE</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
          <a class="navbar-brand" href="menu_principal.php">Sistema Gerador de Horário Escolar (SGHE)</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="form_usuario_update.php"><?php echo "".$_SESSION['nome_usuario'];?></a></li>
            <li><a href="sobre.php">Sobre</a></li>
			      <li><a href="ajuda.php">Ajuda</a></li>
            <li><a href="index.php" onclick="<?php expulsaVisitante();?>">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="menu_principal.php">Categorias<span class="sr-only">(current)</span></a></li>
            <li><a href="turno.php">Turno</a></li>
            <li><a href="disciplina.php">Disciplina</a></li>
            <li><a href="docente.php">Professor</a></li>
            <li><a href="restricoes.php">Restrição de Horário</a></li>
            <li><a href="serie.php">Série</a></li>
   	        <li><a href="turma.php">Turma</a></li>
            <li><a href="informacoes_gerais.php">Gerar Horário</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 
      Bootstrap core JavaScript 
      Placed at the end of the document so the pages load faster
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../js/bootstrap.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/vendor/holder.min.js"></script>
      <script src="../js/ie10-viewport-bug-workaround.js"></script>
    -->

  </body>
</html>

