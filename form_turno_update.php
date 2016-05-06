
<?php
    include_once 'seguranca.php';
    protegePagina();
    $login = ''.$_SESSION['login'];
    include_once "templates.php";
    if (isset($_GET['id_turno'])){
      $id_turno = $_GET['id_turno'];
      $nome_turno = $_GET['nome_turno'];
      $quantidade_de_aulas = $_GET['quantidade_de_aulas'];
    }
    else {
      echo "<script>alert('Acesso Invalido.'); window.location.href='turno.php';</script>";
    }
    
?>

  <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Turno</h1>

          <form method="post" action="dao_turno/update_turno.php">

          <div class="form-group">
            <input type="hidden" class="form-control" name="id_turno" value="<?php echo htmlspecialchars($id_turno);?>">
          </div>

          <div class="form-group">
          <label for="exampleInputPassword11">Turno</label><br>
          <select name="nome_turno" class="select form-control" required>
            <option value="<?php echo htmlspecialchars($nome_turno);?>" selected><?php echo htmlspecialchars($nome_turno);?></option>
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
          </select>
          </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Quantidade de Aulas na Semana</label>
                <input type="number" min="5" step="5" class="form-control" name="quantidade_de_aulas" value="<?php echo htmlspecialchars($quantidade_de_aulas);?>" required>
        </div>

            <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        
        </form>
        </div>
</body>
