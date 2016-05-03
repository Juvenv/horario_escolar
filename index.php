
<?php
  session_start();
  if (isset($_SESSION['login'])){
    session_unset($_SESSION['login'], $_SESSION['senha'], $_SESSION['nome_usuario'], $_SESSION['sobrenome_usuario']);
  }
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Entrar</a></li>
        <li class="tab"><a href="#signup">Criar conta</a></li>
      </ul>

      <div class="tab-content">

        <div id="login">   
          <h1>Bem Vindo ao SGHE!</h1>
          
          <form action="login.php" method="post">
          
          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name='login' required autocomplete="off" maxlength="50" autofocus="autofocus" />
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name='senha'required autocomplete="off" maxlength="50"/>
          </div>
          
          <p class="forgot"><a href="form_recuperar_senha.php">Esqueceu sua senha?</a></p>
          
          <button class="button button-block"/>Entrar</button>
          
          </form>
        </div>

        <div id="signup">   
          <h1>Registre-se no SGHE</h1>
          
          <form action="registrar.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" name='nome_usuario' required autocomplete="off" maxlength="50"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Sobrenome<span class="req">*</span>
              </label>
              <input type="text" name='sobrenome_usuario' required autocomplete="off" maxlength="50"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name='login' required autocomplete="off" maxlength="50"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name='senha' required autocomplete="off" maxlength="50"/>
          </div>

          <div class="field-wrap">
            <label>
              Novamente a Senha<span class="req">*</span>
            </label>
            <input type="password" name='senha_confirmacao' required autocomplete="off" maxlength="50"/>
          </div>
          
          <button type="submit" class="button button-block"/>Registrar</button>
          
          </form>
        </div>

      </div><!-- tab-content -->
</div> <!-- /form -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    
  </body>
</html>
