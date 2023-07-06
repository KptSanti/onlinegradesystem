<div class="well">
	<h3 class="mb-3 fw-bold">List of Faculty</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-bordered table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No</th>
				  		<th>
				  		<input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Fullname</th>
				  		<th>Address</th>
				  		<th>Gender</th>
				  		<th>Civil Status</th>
				  		<th>Specialization</th>
				 		<th>Email Address</th>
				 		<th>Loads</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  
				  	<?php
				        if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						

				  		$instructor = new Instructor();
			  	  		$instructor->listOfinstructor();
				  		loadresult();
				  	}else{
				  			$mydb->setQuery("SELECT * 
							FROM   instructor");
							loadresult();
					  		
					}
				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';
						  		echo '<td class="align-middle" width="5%" align="center"></td>';
						  		echo '<td><input  class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$result->INST_ID. '"/>
						  				<a href="index.php?view=edit&id='.$result->INST_ID.'">' . $result->INST_FULLNAME.'</a></td>';
						  		echo '<td>'. $result->INST_ADDRESS.'</td>';
						  		echo '<td>'. $result->INST_SEX.'</td>';
						  		echo '<td>'. $result->INST_STATUS.'</td>';
						  		echo '<td>'. $result->SPECIALIZATION.'</td>';
						  		echo '<td>'. $result->INST_EMAIL.'</td>';
					 			echo '<td><a href="index.php?view=instSubj&instructorId='.$result->INST_ID.'"><span class="btn btn-primary">List</span></a></td>';
						  		
						  		
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
				  <a href="index.php?view=add" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->