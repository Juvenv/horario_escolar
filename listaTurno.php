  <?php include "templates.php"; ?>
  
  
<table border="1" class="table table-striped">

 <caption>
 <a href="cadastro_turno.php" class="btn btn-primary">
  <span class="glyphicon glyphicon-plus"></span> Adicionar
 </a> 
 </caption>
 
  <thead>
    <tr  class="error">
      <th>Turno</th>
      <th>Número de aulas</th>    
	  <th>Editar</th> 
	  <th>Excluir</th> 
	  
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Matutino</td>      
	  <td>10</td>     
	  
	  <td> <a href="#" class="btn btn-primary">
	  <span class="glyphicon glyphicon-pencil"></span> Editar
	  </a> 
	  </td>
	  
	  <td> <a href="#" class="btn btn-danger">
	  <span class="glyphicon glyphicon-remove"></span> Excluir
	  </a> 
      </td>
	  
     </tr>
  
  </tbody>
</table>