<div class="container">
<div class="well">
	<h3 class="mb-3 fw-bold">List of Year and Section</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table  id="single" class="table table-bordered table-striped" cellspacing="0">
					
				  <thead>
				  	<tr>
				  		<!--  <th>No.</th> -->
				  		<th >
				  		 <input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Course and Year</th>
				  		
				  	<!--	 <th>Major</th>-->
				  		<th>Description</th>
				  	<!-- <th width="">Level</th> -->
				  	<th 	>Department</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
	  			  		$mydb->setQuery("SELECT * 
						FROM  `course` c,  `department` d
						WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL");
				  		
						  	loadresult();
					  	
					function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						//echo '<td width="5%" align="center"></td>';
				  		echo '<td><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$result->COURSE_ID. '"/>
				  				<a href="index.php?view=edit&id='.$result->COURSE_ID.'">' . $result->COURSE_NAME.'</a></td>';
				  	
				  		//echo '<td>'. $result->COURSE_MAJOR.'</td>';
				  		echo '<td>'. $result->COURSE_DESC.'</td>';
				  		/* echo '<td align="left">'. $result->COURSE_LEVEL.'</td>'; */
				  		echo '<td>'. $result->DEPARTMENT_DESC.'</td>';
				  		echo '</tr>';
				  		} 
				  	}	
				  	?>
				  </tbody>
				
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group mt-2">
				  <a href="index.php?view=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->