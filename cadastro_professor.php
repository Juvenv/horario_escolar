
<!DOCTYPE html>
<html lang="pt-br">
<?php include "templates.php"; ?>

  <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Cadastro de Professor</h1>

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
        		<input type="number" class="form-control" id="carga_horaria_obrigatoria" placeholder="Informe a quantidade de aulas obrigatórias mensal">
        	  </div>   

            <div class="form-group">
            <label for="exampleInputPassword3">Data de Contratação</label>
            <input type="date" class="form-control" id="data" placeholder="Informe a data que começou a trabalhar">
            </div>  

            <div class="form-group">
          <label for="exampleInputPassword1">Disciplinas que esse Professor Leciona</label><br>
          <select name="select" id="disciplinas" multiple>
            <option value="port">Portugues</option>
            <option value="mat">Matematica</option>
            <option value="fis">Fisica</option>
          </select>
          </div> 

<<<<<<< HEAD
          <div class="form-group">
          <label for="exampleInputPassword4">Restrições de Horário de Professor</label><br>
          <div style="text-align:center">
          <table style="width:100%" id="restricao" border="1">
              <tr>
                <th style="text-align:center">Segunda-Feira</th>
                <th style="text-align:center">Terça-Feira</th>
                <th style="text-align:center">Quarta-Feira</th>
                <th style="text-align:center">Quinta-Feira</th>
                <th style="text-align:center">Sexta-Feira</th>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center" bgcolor="#B0BCA7">Matutino</th>
              </tr>
              <tr>
                <td><input type="checkbox" name="1" value="1">Primeiro Horário<br></td>
                <td><input type="checkbox" name="2" value="2">Primeiro Horário<br></td>
                <td><input type="checkbox" name="3" value="3">Primeiro Horário<br></td>
                <td><input type="checkbox" name="4" value="4">Primeiro Horário<br></td>
                <td><input type="checkbox" name="5" value="5">Primeiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="6" value="6">Segundo Horário<br></td>
                <td><input type="checkbox" name="7" value="7">Segundo Horário<br></td>
                <td><input type="checkbox" name="8" value="8">Segundo Horário<br></td>
                <td><input type="checkbox" name="9" value="9">Segundo Horário<br></td>
                <td><input type="checkbox" name="10" value="10">Segundo Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="11" value="11">Terceiro Horário<br></td>
                <td><input type="checkbox" name="12" value="12">Terceiro Horário<br></td>
                <td><input type="checkbox" name="13" value="13">Terceiro Horário<br></td>
                <td><input type="checkbox" name="14" value="14">Terceiro Horário<br></td>
                <td><input type="checkbox" name="15" value="15">Terceiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="16" value="16">Quarto Horário<br></td>
                <td><input type="checkbox" name="17" value="17">Quarto Horário<br></td>
                <td><input type="checkbox" name="18" value="18">Quarto Horário<br></td>
                <td><input type="checkbox" name="19" value="19">Quarto Horário<br></td>
                <td><input type="checkbox" name="20" value="20">Quarto Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="21" value="21">Quinto Horário<br></td>
                <td><input type="checkbox" name="22" value="22">Quinto Horário<br></td>
                <td><input type="checkbox" name="23" value="23">Quinto Horário<br></td>
                <td><input type="checkbox" name="24" value="24">Quinto Horário<br></td>
                <td><input type="checkbox" name="25" value="25">Quinto Horário<br></td>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center" bgcolor="#B0BCA7">Vespetino</th>
              </tr>
              <tr>
                <td><input type="checkbox" name="26" value="26">Primeiro Horário<br></td>
                <td><input type="checkbox" name="27" value="27">Primeiro Horário<br></td>
                <td><input type="checkbox" name="28" value="28">Primeiro Horário<br></td>
                <td><input type="checkbox" name="29" value="29">Primeiro Horário<br></td>
                <td><input type="checkbox" name="30" value="30">Primeiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="31" value="31">Segundo Horário<br></td>
                <td><input type="checkbox" name="32" value="32">Segundo Horário<br></td>
                <td><input type="checkbox" name="33" value="33">Segundo Horário<br></td>
                <td><input type="checkbox" name="34" value="34">Segundo Horário<br></td>
                <td><input type="checkbox" name="35" value="35">Segundo Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="36" value="36">Terceiro Horário<br></td>
                <td><input type="checkbox" name="37" value="37">Terceiro Horário<br></td>
                <td><input type="checkbox" name="38" value="38">Terceiro Horário<br></td>
                <td><input type="checkbox" name="39" value="39">Terceiro Horário<br></td>
                <td><input type="checkbox" name="40" value="40">Terceiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="41" value="41">Quarto Horário<br></td>
                <td><input type="checkbox" name="42" value="42">Quarto Horário<br></td>
                <td><input type="checkbox" name="43" value="43">Quarto Horário<br></td>
                <td><input type="checkbox" name="44" value="44">Quarto Horário<br></td>
                <td><input type="checkbox" name="45" value="45">Quarto Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="46" value="46">Quinto Horário<br></td>
                <td><input type="checkbox" name="47" value="47">Quinto Horário<br></td>
                <td><input type="checkbox" name="48" value="48">Quinto Horário<br></td>
                <td><input type="checkbox" name="49" value="49">Quinto Horário<br></td>
                <td><input type="checkbox" name="50" value="50">Quinto Horário<br></td>
              </tr>
              <tr>
                <th colspan="5" style="text-align:center" bgcolor="#B0BCA7">Noturno</th>
              </tr>
              <tr>
                <td><input type="checkbox" name="51" value="51">Primeiro Horário<br></td>
                <td><input type="checkbox" name="52" value="52">Primeiro Horário<br></td>
                <td><input type="checkbox" name="53" value="53">Primeiro Horário<br></td>
                <td><input type="checkbox" name="54" value="54">Primeiro Horário<br></td>
                <td><input type="checkbox" name="55" value="55">Primeiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="56" value="56">Segundo Horário<br></td>
                <td><input type="checkbox" name="57" value="57">Segundo Horário<br></td>
                <td><input type="checkbox" name="58" value="58">Segundo Horário<br></td>
                <td><input type="checkbox" name="59" value="59">Segundo Horário<br></td>
                <td><input type="checkbox" name="60" value="60">Segundo Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="61" value="61">Terceiro Horário<br></td>
                <td><input type="checkbox" name="62" value="62">Terceiro Horário<br></td>
                <td><input type="checkbox" name="63" value="63">Terceiro Horário<br></td>
                <td><input type="checkbox" name="64" value="64">Terceiro Horário<br></td>
                <td><input type="checkbox" name="65" value="65">Terceiro Horário<br></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="66" value="66">Quarto Horário<br></td>
                <td><input type="checkbox" name="67" value="67">Quarto Horário<br></td>
                <td><input type="checkbox" name="68" value="68">Quarto Horário<br></td>
                <td><input type="checkbox" name="69" value="69">Quarto Horário<br></td>
                <td><input type="checkbox" name="70" value="70">Quarto Horário<br></td>
              </tr>
          </table>
          </div>
          </div>

	         <button type="submit" class="btn btn-info">Cadastrar</button>
  	   </form>
    </div>
=======
	 <form>
	 
	 <div class="form-group">
		<label for="exampleInputEmail1">Matrícula</label>
		<input type="text" class="form-control" id="matricula" placeholder="Informe a matrícula">
	  </div>
	 
	 <div class="form-group">
		<label for="exampleInputPassword1">Nome</label>
		<input type="text" class="form-control" id="nome" placeholder="Informe o nome">
	  </div>
	  
	  
	  <div class="form-group">
		<label for="exampleInputPassword1">Data de contratação</label>
		<input class="form-control" id="date1" name="date1" placeholder="DD/MM/YYYY" type="text"/>
	  </div>
	  
	  <div class="form-group">
	   <label for="exampleInputPassword1">Carga Horária Obrigatória</label>
      
	  <select class="select form-control" id="select" name="select">

	   <option >
         Selecione 
        </option>
	  
	  <option value="10">
         10 horas/mensal
        </option>

        <option value="15">
         15 horas/mensal       
	   </option>
	   
        <option value="20">
         20 horas/mensal
        </option>
		
		 <option value="30">
         30 horas/mensal
        </option>
		 
		 <option value="35">
         35 horas/mensal
        </option>
		
		 <option value="40">
         40 horas/mensal
        </option>
		
		 <option value="45">
         45 horas/mensal
        </option>
		
		 <option value="50">
         50 horas/mensal
        </option>
		
       </select>
      </div>
	  
	  <button class="btn btn-info" name="submit" type="submit"> cadastrar </button>
     </div>   
    
    
</div>
</div>
</div>
</form>
	
	
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
