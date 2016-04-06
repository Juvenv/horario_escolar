
<?php
    include "templates.php";
    $turno = $_GET['turno'];
    $quantidade_de_Aulas = $_GET['quantidade_de_Aulas'];
?>

  <body>
        <form method="post" action="dao_turno/update_turno.php">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Turno</h1>
        	 <div class="form-group">
        		<label for="exampleInputEmail1">Turno</label>
        		<input type="text" class="form-control" name="turno" value="<?php echo htmlspecialchars($turno);?>" style='background: #EEE; cursor: not-allowed; color: #777' readonly>
        </div>

             <div class="form-group">
                <label for="exampleInputEmail1">Quantidade de Aulas na Semana</label>
                <input type="text" class="form-control" name="quantidade_de_Aulas" value="<?php echo htmlspecialchars($quantidade_de_Aulas);?>">
        </div>

            <button type="submit" class="btn btn-info">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        
        </div>
        </form>
</body>
