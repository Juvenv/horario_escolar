
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Professor</h1>

        	 <form>
        	 
        	 <div class="form-group">
        		<label for="exampleInputEmail7">Matrícula</label>
        		<input type="number" class="form-control" id="matricula" placeholder="Informe sua matrícula">
        	  </div>
        	 
        	 <div class="form-group">
        		<label for="exampleInputPassword0">Nome</label>
        		<input type="text" class="form-control" id="nome" placeholder="Informe seu nome">
        	  </div>
        	  
        	  <div class="form-group">
        		<label for="exampleInputPassword2">Carga Horária Obrigatória</label>
        		<input type="number" class="form-control" id="carga_horaria" placeholder="Informe a quantidade de aulas obrigatórias mensal">
        	  </div>

            <div class="form-group">
            <label for="exampleInputPassword3">Data de Contratação</label>
            <input type="date" class="form-control" id="data" placeholder="Informe a data que começou a trabalhar">
            </div>  

            <div class="form-group">
          <label for="exampleInputPassword1">Disciplinas que esse Professor Leciona</label><br>
          <select class="select form-control" name="select" id="disciplinas" multiple>
            <option value="port">Portugues</option>
            <option value="mat">Matematica</option>
            <option value="fis">Fisica</option>
          </select>
          </div> 

          <div class="form-group">
          <label for="exampleInputPassword4">Restrições de Horário de Professor</label><br>
          <table style="width:100%; text-align:center" class="table table-hover" id="restricao">
              <tr>
                <th colspan="5" style="text-align:center; padding: 10px" class="bg-success">Matutino</th>
              </tr>
              <tr>
                <th style="text-align:center; padding: 8px">Segunda-Feira</th>
                <th style="text-align:center; padding: 8px">Terça-Feira</th>
                <th style="text-align:center; padding: 8px">Quarta-Feira</th>
                <th style="text-align:center; padding: 8px">Quinta-Feira</th>
                <th style="text-align:center; padding: 8px">Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="1" value="1">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="2" value="2">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="3" value="3">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="4" value="4">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="5" value="5">Primeiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="6" value="6">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="7" value="7">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="8" value="8">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="9" value="9">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="10" value="10">Segundo Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="11" value="11">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="12" value="12">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="13" value="13">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="14" value="14">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="15" value="15">Terceiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="16" value="16">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="17" value="17">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="18" value="18">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="19" value="19">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="20" value="20">Quarto Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="21" value="21">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="22" value="22">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="23" value="23">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="24" value="24">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="25" value="25">Quinto Horário</label><br></td>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center; padding: 10px;" class="bg-success">Vespetino</th>
              </tr>
              <tr>
                <th style="text-align:center; padding: 8px">Segunda-Feira</th>
                <th style="text-align:center; padding: 8px">Terça-Feira</th>
                <th style="text-align:center; padding: 8px">Quarta-Feira</th>
                <th style="text-align:center; padding: 8px">Quinta-Feira</th>
                <th style="text-align:center; padding: 8px">Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="26" value="26">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="27" value="27">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="28" value="28">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="29" value="29">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="30" value="30">Primeiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="31" value="31">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="32" value="32">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="33" value="33">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="34" value="34">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="35" value="35">Segundo Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="36" value="36">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="37" value="37">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="38" value="38">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="39" value="39">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="40" value="40">Terceiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="41" value="41">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="42" value="42">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="43" value="43">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="44" value="44">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="45" value="45">Quarto Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="46" value="46">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="47" value="47">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="48" value="48">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="49" value="49">Quinto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="50" value="50">Quinto Horário</label><br></td>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center; padding: 10px;" class="bg-success">Noturno</th>
              </tr>
              <tr>
                <th style="text-align:center; padding: 8px">Segunda-Feira</th>
                <th style="text-align:center; padding: 8px">Terça-Feira</th>
                <th style="text-align:center; padding: 8px">Quarta-Feira</th>
                <th style="text-align:center; padding: 8px">Quinta-Feira</th>
                <th style="text-align:center; padding: 8px">Sexta-Feira</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="51" value="51">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="52" value="52">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="53" value="53">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="54" value="54">Primeiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="55" value="55">Primeiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="56" value="56">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="57" value="57">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="58" value="58">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="59" value="59">Segundo Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="60" value="60">Segundo Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="61" value="61">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="62" value="62">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="63" value="63">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="64" value="64">Terceiro Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="65" value="65">Terceiro Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="66" value="66">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="67" value="67">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="68" value="68">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="69" value="69">Quarto Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="70" value="70">Quarto Horário</label><br></td>
              </tr>
          </table>
          </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
	         <button class="btn btn-danger" type="reset">Limpar</button>
  	   </form>
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
	<script src="js/data.js"></script>
>>>>>>> origin/master
  </body>
</html>
