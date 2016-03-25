
<?php include "templates.php"; ?>

  
<table border="1" class="table table-striped">

 <caption>
 <a href=" form_professor.php" class="btn btn-primary">
  <span class="glyphicon glyphicon-plus"></span> Adicionar Professor</a> 
 </caption>
 
  <thead>
    <tr  class="error">
      <th>Matrícula</th>
      <th>Nome</th>
      <th>Carga Horária</th>
      <th>Data de Contratação</th>
	  <th>Editar</th>
	  <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>25154</td>
	  <td>Hugo Rafael</td>
	  <td>60 horas</td>
	  <td>29/12/1988</td>
	  	  
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
