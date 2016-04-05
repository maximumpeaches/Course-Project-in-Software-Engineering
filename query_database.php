<?php

if (isset($_POST['model']) && isset($_POST['year'])
	&& !empty($_POST['model']) && !empty($_POST['year'])){
	?>
	<br/>
	<br/>
	<p class="lead text-center">Query results</p> 
	<table class="table table-bordered">
  	  <thead>
  	     <tr>
  	        <td>Model</td>
  	        <td>Year</td>
  	     </tr>
  	  </thead>
  	  <tbody>
         <tr>
  	        <td><?= $_POST['model'] ?></td>
  	        <td><?= $_POST['year'] ?></td>
  	     </tr>
  	  </tbody>
  	</table>
  	<?php
}



?>