<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  	
					<caption><h3 class="mb-3 fw-bold">List of Department</h3></caption>				
				<table id="singletwo" class="table table-striped table-bordered  table-hover">
				  <thead>
				  	<tr>
				  		<th> <input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Department Name</th>
				  		<th>Department Description</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$dept = new Dept();
						$cur = $dept->listOfDept();
						foreach ($cur as $Department) {
				  		echo '<tr>';

				  		echo '<td><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$Department->DEPT_ID. '"/>
				  				<a href="index.php?view=edit&id='.$Department->DEPT_ID.'">' . $Department->DEPARTMENT_NAME.'</a></td>';
				  		echo '<td colspan="3">'. $Department->DEPARTMENT_DESC.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group mt-2">
				  <a href="index.php?view=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
