
<!DOCTYPE html>
<html lang="pt-br">

<?php
  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
?>
 
  <head>
  <meta http-equiv="Content-Type" content="text/html", charset="iso-8859-1" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  
  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Ajuda</h1>


<div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
      <h4 class="panel-title">
        Turno
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">Para o Cadastro de turno, o operador deve selecionar o(s) turno(s) na qual a escola funciona, além disso, deve informa a quantidade de aulas que aquele turno terá.
      <br><br>
      			Exemplo: <br/><br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Turno: Matutino<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Quantidade de aulas: 5
      </div>
    </div>
  </div>
  

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
      <h4 class="panel-title">
        Disciplina
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Para cadastro de disciplina, o operador deve considerar duas variáreis, são elas: Sigla da disciplina, ou seja, é a mesma coisa que abreviação, além disso, deve considerar
      a disciplina, na qual deverá ser seleciona.

      <br><br>
      			Exemplo: <br/><br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Sigla da disciplina: Mat<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Quantidade de aulas: Matemática

      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
      <h4 class="panel-title">
        Professor
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Abaixo segue um exemplo para cadastro de professor.  
      	
      	<br><br>
      			Exemplo: <br/><br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Matricula: 1524588<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Nome do professor: Francisco Santos<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Carga Horárioa Obrigatória: 20<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Data de contratação: 08/04/2016<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Sigla da disciplina: Mat<br/>
      					
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      <h4 class="panel-title">
        Restrição de horário
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">Nesta sessão, o operador deve selecionar o professor e marcar todas as restrições de acordo com os turnos.</div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
      <h4 class="panel-title">
        Série
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">Neste item, o operador deve selecionar a série na qual quer cadastrar, e disciplinas contidas na série. Para cada disciplina adiciona, deve-se informar aos sistema 
      a quantidade de aulas por semana.

<br><br>
      			Exemplo: <br/><br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Série: 3º ano<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Sigla disciplina: Port<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Quantidade de aulas na semana: 5


      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
      <h4 class="panel-title">
        Turma
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body"> Para o cadastro de turma, o operador deve selecionar o turno, e associar a turma a uma série.
      	
      	Exemplo: <br/><br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Turma: A<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Turno: Matutino<br/>
      					&nbsp;&nbsp;&nbsp;&nbsp;	Série: 3º ano
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
      <h4 class="panel-title">
        Gerar Horário
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">Ao clicar nesse link, o sistema irá analisar e processar todas as informações para que seja gerado o horário escolar.</div>
    </div>
  </div>


    <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
      <h4 class="panel-title">
        Importante
        <span class="glyphicon glyphicon-chevron-down pull-right"></span>
      </h4>
    </div>  
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body">Para que o sistema funcione de forma correta, o operador desse sistema deve seguir o passo a passo exposto na barra de navegação e na página principal.</div>
    </div>
  </div>


</div>

          
</div>
  </body>
</html>
