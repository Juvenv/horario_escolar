
<?php 
  include "templates.php"; 
  $matricula = $_GET['matricula'];
?>
 
 <body>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Restrição de Horário</h1>

        <form method="post" action="dao_restricoes/update_restricoes.php" >
          <div class="form-group">
            <label for="exampleInputEmail7">Matrícula</label><br>
            <input type="number" class="form-control" name="matricula" value="<?php echo htmlspecialchars($matricula);?>" style='background: #EEE; cursor: not-allowed; color: #777' readonly>
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
                <th>Sábado</th>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="211">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="311">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="411">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="511">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="611">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="711">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="212">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="312">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="412">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="512">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="612">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="712">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="213">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="313">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="413">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="513">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="613">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="713">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="214">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="314">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="414">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="514">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="614">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="714">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="215">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="315">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="415">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="515">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="615">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="715">5º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="216">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="316">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="416">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="516">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="616">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="716">6º Horário</label><br></td>
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
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="221">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="321">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="421">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="521">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="621">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="721">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="222">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="322">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="422">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="522">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="622">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="722">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="223">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="323">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="423">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="523">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="623">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="723">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="224">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="324">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="424">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="524">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="624">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="724">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="225">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="325">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="425">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="525">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="625">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="725">5º Horário</label><br></td>  
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="226">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="326">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="426">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="526">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="626">6º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="726">6º Horário</label><br></td>  
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
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="231">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="331">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="431">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="531">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="631">1º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"   value="731">1º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="232">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="332">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="432">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="532">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="632">2º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]"  value="732">2º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="233">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="333">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="433">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="533">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="633">3º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="733">3º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="234">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="334">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="434">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="534">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="634">4º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="734">4º Horário</label><br></td>
              </tr>
              <tr>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="235">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="335">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="435">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="535">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="635">5º Horário</label><br></td>
                <td><label class="checkbox-inline"><input type="checkbox" name="horario_inviavel[]" value="735">5º Horário</label><br></td>
              </tr>
          </table>
          </div>

	         <button type="submit" class="btn btn-info">Salvar</button>
	         <button class="btn btn-danger" type="reset">Limpar</button>
  	   </form>
    </div>
	
  </body>
</html>
