
<?php
    include_once 'seguranca.php';
    protegePagina();
    $login = $_SESSION['login'];
    include_once "templates.php";
    $id_disciplina = $_GET['id_disciplina'];
    $sigla_disciplina = $_GET['sigla_disciplina'];
    $nome_disciplina = $_GET['nome_disciplina'];
?>

  <body>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Disciplina</h1>

        <form method="post" action="dao_disciplina/update_disciplina.php">

        <div class="form-group">
                <input type="hidden" class="form-control" name="id_disciplina" value="<?php echo htmlspecialchars($id_disciplina);?>">
        </div>

       	 <div class="form-group">
        		<label for="exampleInputEmail1">Sigla da Disciplina</label>
        		<input type="text" class="form-control" name="sigla_disciplina" value="<?php echo htmlspecialchars($sigla_disciplina);?>">
        </div>

        <div class="form-group">
         <label>Disciplina</label><br>
          <select name="nome_disciplina" class="select form-control" required>
            <option value="<?php echo htmlspecialchars($nome_disciplina);?>" selected><?php echo htmlspecialchars($nome_disciplina);?></option>
            <option value='Português'>Português</option>
            <option value='Matemática'>Matemática</option>
            <option value="Historia">História</option>
            <option value="Geografia">Geografia</option>
            <option value="Física">Física</option>
            <option value="Química">Química</option>
            <option value="Biologia">Biologia</option>
            <option value="Religião">Religião</option>
            <option value="Informática">Informática</option>
            <option value="Artes">Artes</option>
            <option value="Ciências">Ciências</option>
            <option value="Educação Física">Educação Física</option>
            <option value="Sociologia">Sociologia</option>
            <option value="Inglês">Inglês</option>
            <option value="Espanhol">Espanhol</option>
            <option value="Filosofia">Filosofia</option>
          </select>
        </div>

            <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        
        </div>
        </form>
</body>
