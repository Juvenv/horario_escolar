
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
  </head>
  
  <body>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Sobre</h1>
          <br>
          <h4><p>Atualmente, grande parte das escolas da rede de ensino público e privado da cidade de Caicó-RN contratam pessosas especializadas em preparar horários escolares. É um problema repetitivo, complexo e com baixa certeza de acerto, pois envolve muitas variáveis e o ambiente sempre muda. Então, para tentar facilitar, agilizar e apoiar as escolas, foi pensando em um sistema gerador de horário escolar automatico (SGHE).<br><br>
 
          O SGHE tem como objetivo armazenar as informações reais que são utilizadas na preparação dos horários e assim, ser capaz de gerar automaticamente um horário viável de acordo com as restrições dos professores e necessidades da escola.<br><br>
 
          Com os dados, o sistema verifica a disponibilidades dos professores nos respectivos horários, turmas e disciplinas e assim, será capaz de gerar um horário. Lembrando que esse horário não será o melhor, mas será uma opção de mudança para pessoa que o utilizará.</p></h4>
        </div>
  </body>
</html>
