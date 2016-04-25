
<?php 

  include_once 'seguranca.php';
  protegePagina();
  $login = $_SESSION['login'];
  include_once "templates.php";
  if (isset($_GET['id_docente'])){
    $id_docente = $_GET['id_docente'];
    $matricula = $_GET['matricula'];
    $nome_professor = $_GET['nome_professor'];
    $resultado_professor = mysql_query("SELECT * FROM docentes where login='$login' ORDER BY 'nome_professor'");
  }
  else{
    echo "<script>alert('Acesso Feito de Forma Indevida.');</script>";
    expulsaVisitante();
  }
  
?>
 
 <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-11 col-md-offset-2 main">
          <h1 class="page-header">Restrição de Horário</h1>

        <form method="post" action="dao_restricoes/update_restricoes.php" >

        <div class="form-group">
          <input name='id_docente' value="<?php echo htmlspecialchars($id_docente);?>" type="hidden"></input>
        </div>

          <div class="form-group">
          <label>Professor</label><br>
          <select name="matricula" class="select form-control">
            <option value="<?php echo htmlspecialchars($matricula);?>" selected><?php echo htmlspecialchars($matricula).' - '.htmlspecialchars($nome_professor);?></option>
            <?php
              while($linhas = mysql_fetch_array($resultado_professor)){
                $docenteList = $linhas['matricula'].' - '.$linhas['nome_professor'];
                $docenteMatricula = $linhas['matricula'];
                echo '<option value="'.$docenteMatricula.'">'.$docenteList.'</option>';
              }
            ?>
          </select>
          </div>

          <div class="form-group">
          <label for="exampleInputPassword4">Restrições de Horário de Professor</label><br>
          <table class="table table-hover" align="left">
              <tr>
                <th colspan="6" class="bg-success">Matutino</th>
              </tr>
              <tr>
                <th>Segunda-Feira</th>
                <th>Terça-Feira</th>
                <th>Quarta-Feira</th>
                <th>Quinta-Feira</th>
                <th>Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2M1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3M1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4M1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5M1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6M1">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2M2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3M2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4M2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5M2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6M2">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2M3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3M3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4M3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5M3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6M3">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2M4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3M4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4M4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5M4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6M4">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2M5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3M5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4M5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5M5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6M5">5º Horário</label><br></td>
              </tr>
              <tr>
                <th colspan="6" class="bg-success">Vespetino</th>
              </tr>
              <tr>
                <th>Segunda-Feira</th>
                <th>Terça-Feira</th>
                <th>Quarta-Feira</th>
                <th>Quinta-Feira</th>
                <th>Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2T1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3T1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4T1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5T1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6T1">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2T2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3T2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4T2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5T2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6T2">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2T3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3T3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4T3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5T3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6T3">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2T4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3T4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4T4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5T4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6T4">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2T5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3T5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4T5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5T5">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6T5">5º Horário</label><br></td> 
              </tr>
              <tr>
                <th colspan="6" class="bg-success">Noturno</th>
              </tr>
              <tr>
                <th>Segunda-Feira</th>
                <th>Terça-Feira</th>
                <th>Quarta-Feira</th>
                <th>Quinta-Feira</th>
                <th>Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="2N1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="3N1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="4N1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="5N1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="6N1">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="2N2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="3N2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="4N2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="5N2">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="6N2">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2N3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3N3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4N3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5N3">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6N3">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="2N4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="3N4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="4N4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="5N4">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="6N4">4º Horário</label><br></td>
              </tr>
          </table>
          </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
	         <button class="btn btn-danger" type="reset">Limpar</button>
  	   </form>
    </div>
  </body>

