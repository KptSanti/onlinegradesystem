<?php check_message(); ?>
		<div class="well">	    
			<caption><h3 class="mb-3">List of Semesters</h3></caption>					
				<table class="table table-striped table-bordered  table-hover">
				  <thead>
				  	<tr>
				  		<th>Semester ID</th>
				  		<th>Semester Name</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$sem = new Semester();
						$cur = $sem->listSem();
						foreach ($cur as $sem) {
				  		echo '<tr>';
				  		echo '<td>'. $sem->SEM_ID. '</td>';
						echo '<td colspan="3">'. $sem->SEM.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>	
				</table>
	  	</div><!--End of well-->

</div><!--End of container-->
