<div class="wells">
		<h3 class="fw-bold mb-3" >List of Subject</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-bordered table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th>
				  		 <input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject</th>
				  		<th>Description</th>
				  			<th>Unit</th>
				  	<!-- <th>Pre-requisite</th> -->
				  		<th>Semester</th>
				 		<th>Course/Year</th>
				 	<!--	<th>Level</th>-->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	
					  		$mydb->setQuery("SELECT * 
											FROM  `subject` s,  `course` c
											WHERE s.`COURSE_ID` = c.`COURSE_ID` ");
						  	loadresult();
					
				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
						  		echo '<tr>';
						  		echo '<td width="5%" align="center"></td>';
						  		echo '<td ><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				<a href="index.php?view=edit&id='.$result->SUBJ_ID.'">' . $result->SUBJ_CODE.'</a></td>';
						  		echo '<td >'. $result->SUBJ_DESCRIPTION.'</td>';
						  		echo '<td>'. $result->UNIT.'</td>';
						  		//echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		echo '<td>'. $result->SEMESTER.'</td>';
						  		echo '<td>'. $result->COURSE_NAME.'</td>';
						  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';

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