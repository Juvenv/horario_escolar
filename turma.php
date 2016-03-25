  
<?php include "templates.php"; ?>
 
<table border="1" class="table table-striped">

 <caption>
 <a href="form_turma.php" class="btn btn-primary">
  <span class="glyphicon glyphicon-plus"></span> Adicionar Turma</a> 
 </caption>
 
  <thead>
    <tr  class="error">
      <th>Turma</th>
      <th>Série</th>
      <th>Turno</th>  		  
	  <th>Editar</th> 
	  <th>Excluir</th>
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>A</td>
      <td>Vespertino</td>      
	  <td>6ª Série</td>
	  
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