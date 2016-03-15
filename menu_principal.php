
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

    <title>Tela principal</title>

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
		  
          <a class="navbar-brand" href="index.php">Sistema Gerador de Horário Escolar (SGHE)</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Início</a></li>
			<li><a href="#">Ajuda</a></li>
            <li><a href="#">Sair</a></li>                      
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Categorias<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Turno</a></li>
            <li><a href="#">Professor</a></li>
            <li><a href="#">Disciplina</a></li>
			<li><a href="#">Turma</a></li>
			<li><a href="#">Gerar Horário</a></li>
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Passo a passo</h1>

          <div class="row placeholders">
            
			<div class="col-xs-6 col-sm-2 placeholder">
              <img src="imagens/turno.jpg" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail">
              <h4>Turno</h4>
              <span class="text-muted"> 1º Passo</span>
            </div>
            
			<div class="col-xs-6 col-sm-2 placeholder">
              <img src="imagens/professor.jpg" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail">
              <h4>Professor</h4>
              <span class="text-muted"> 2º Passo</span>
            </div>
            
			<div class="col-xs-6 col-sm-2 placeholder">
              <img src="imagens/disciplina.png" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail">
              <h4>Disciplina</h4>
              <span class="text-muted"> 3º Passo</span>
            </div>
            
			<div class="col-xs-6 col-sm-3 placeholder">
              <img src="imagens/turma.png" width="100" height="100" class="img-circle" alt="Generic placeholder thumbnail">
              <h4>Turma</h4>
              <span class="text-muted"> 5º Passo</span>
            </div>			
			
			<div class="col-xs-6 col-sm-2 placeholder">
				
			 <img src="imagens/gerar_horario.png" width="100"  height="100" class="img-circle" alt="Generic placeholder thumbnail">
              <h4>Gerar Horário</h4> 
              <span class="text-muted"> 6º Passo</span>
            </div>
          </div>

               
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
