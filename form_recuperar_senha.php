
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

      <div class="tab-group">
          <h1>Esqueceu a senha?</h1>
          
          <form>
          
            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email" name='email' required autocomplete="off" maxlength="50" autofocus="autofocus" />
            </div>

            <p class="forgot"><a>Informe o Email do seu Cadastro,<br>que Enviaremos sua Senha</a></p>
          
            <div class="top-row">
              <div class="field-wrap">
                <button class="button button-block"/>Enviar</button>
              </div>
              <div class="field-wrap">
                <button class="button button-block" onclick="window.location.href='index.php';" />Voltar</button>
              </div>
            </div>

          </form>
      </div>        
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    
  </body>
</html>
