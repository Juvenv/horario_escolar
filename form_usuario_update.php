
<?php
    include_once 'seguranca.php';
    protegePagina();
    $login = $_SESSION['login'];
    $nome_usuario = $_SESSION['nome_usuario'];
    include_once "templates.php";
    $resultado = mysql_query("SELECT * FROM usuarios where login='$login'");
    $sobrenome = mysql_fetch_array($resultado);
    $sobrenome_usuario = $sobrenome['sobrenome_usuario'];
?>

  <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Usuário</h1>

          <form method="post" action="dao_usuario/update_usuario.php">

            <div class="form-group">
            <input type="hidden" class="form-control" name="id_login" value="<?php echo htmlspecialchars($login);?>" required maxlength="50">
          </div>

          <div class="form-group">
          <label>Login</label><br>
            <input type="email" class="form-control" name="login" value="<?php echo htmlspecialchars($login);?>" required maxlength="50">
          </div>

          <div class="form-group">
          <label>Nome</label><br>
            <input type="text" class="form-control" name="nome_usuario" value="<?php echo htmlspecialchars($nome_usuario);?>" required maxlength="50">
          </div>

          <div class="form-group">
          <label>Sobrenome</label><br>
            <input type="text" class="form-control" name="sobrenome_usuario" value="<?php echo htmlspecialchars($sobrenome_usuario);?>" required maxlength="50">
          </div>

          <div class="form-group">
          <label>Senha</label><br>
            <input type="password" class="form-control" name="senha" required maxlength="50">
          </div>

          <div class="form-group">
          <label>Novamente a Senha</label><br>
            <input type="password" class="form-control" name="confirmacao_senha" required maxlength="50">
          </div>
           

            <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        
        </form>
        </div>
</body>
