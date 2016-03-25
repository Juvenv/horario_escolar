
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
        		<input type="number" class="form-control" id="carga_horaria" placeholder="Informe a quantidade de aulas obrigatórias semanal">
        	  </div>

            <div class="form-group">
            <label for="exampleInputPassword3">Data de Contratação</label>
            <input type="date" class="form-control" id="data">
            </div>  

            <div class="form-group">
          <label for="exampleInputPassword1">Disciplinas que esse Professor Leciona</label><br>
          <select class="select form-control" name="select" id="disciplinas" multiple>
            <option value="port">Portugues</option>
            <option value="mat">Matematica</option>
            <option value="fis">Fisica</option>
          </select>
          </div>

          <div class="container" align="left">
          <label for="exampleInputPassword4">Restrições de Horário de Professor</label>
          <table class="table table-hover" id="restricao" >
              <tr>
                <th colspan="6" class="bg-success">Matutino</th>
              </tr>
              <tr>
                <th>Segunda-Feira</th>
                <th>Terça-Feira</th>
                <th>Quarta-Feira</th>
                <th>Quinta-Feira</th>
                <th>Sexta-Feira</th>
                <th>Sábado</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="1"  value="1">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="2"  value="2">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="3"  value="3">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="4"  value="4">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="5"  value="5">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="6"  value="6">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="7"  value="7">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="8"  value="8">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="9"  value="9">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="10" value="10">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="11" value="11">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="12" value="12">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="13" value="13">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="14" value="14">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="15" value="15">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="16" value="16">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="17" value="17">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="18" value="18">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="19" value="19">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="20" value="20">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="21" value="21">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="22" value="22">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="23" value="23">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="24" value="24">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="25" value="25">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="26" value="26">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="27" value="27">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="28" value="28">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="29" value="29">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="30" value="30">5º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="31" value="31">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="32" value="32">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="33" value="33">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="34" value="34">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="35" value="35">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="36" value="36">6º Horário</label><br></td>
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
                <th>Sábado</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="37"  value="37">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="38"   value="38">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="39"   value="39">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="40"   value="40">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="41"   value="41">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="42"   value="42">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="43"   value="43">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="44"   value="44">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="45"   value="45">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="46"   value="46">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="47 " value="47">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="48 " value="48">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="49" value="49">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="50" value="50">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="51" value="51">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="52" value="52">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="53" value="53">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="54" value="54">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="55" value="55">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="56" value="56">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="57" value="57">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="58" value="58">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="59" value="59">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="60" value="60">4º Horário</label><br></td>
              </tr>
              <tr>
				        <td><label class="checkbox-inline"><input type="checkbox" name="61" value="61">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="62" value="62">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="63" value="63">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="64" value="64">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="65" value="65">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="66" value="66">5º Horário</label><br></td>	
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="67" value="67">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="68" value="68">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="69" value="69">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="70" value="70">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="71" value="71">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="72" value="72">6º Horário</label><br></td>  
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
                <th>Sábado</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="73"   value="73">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="74"   value="74">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="75"   value="75">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="76"   value="76">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="77"   value="77">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="78"   value="78">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="79"   value="79">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="80"   value="80">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="81"   value="81">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="82"   value="82">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="83"   value="83">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="84"   value="84">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="85" value="85">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="86" value="86">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="87" value="87">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="88" value="88">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="89" value="89">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="90" value="90">3º Horário</label><br></td>
              </tr>
              <tr>
				        <td><label class="checkbox-inline"><input type="checkbox" name="91" value="91">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="92" value="92">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="93" value="93">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="94" value="94">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="95" value="95">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="96" value="96">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="97" value="97">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="98" value="98">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="99" value="99">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="100" value="100">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="101" value="101">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="102" value="102">5º Horário</label><br></td>
              </tr>
          </table>
          </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
	         <button class="btn btn-danger" type="reset">Limpar</button>
  	   </form>
    </div>

  </body>
</html>
