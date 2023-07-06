
		<div class="wells">
				<h3 class="mt-0 mb-3">List of Student</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="	table table-striped m-0 table-bordered border-black " cellspacing="0">
				
				  <thead class="align-middle">
				  	<tr>
				  		<th scope="col">No.</th>
				  		<th scope="col"><input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th scope="col">Fullname</th>
				  		<th scope="col">Age</th>
				  		<th scope="col">Birth Date</th>
				  		<th scope="col">Sex</th>
				  		<th scope="col">Email Address</th>
				  		<th scope="col">Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	
				  	  	$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
				  						  `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
				  						  FROM  `tblstudent`");
				  	  	loadresult();

				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr class="">';
					  		echo '<td scope="row" class="align-middle" align="center"></td>';
					  		echo '<td "><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  				<a href="index.php?view=edit&id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td>'. $student->Name.'</td>';
					  		echo '<td align="center">'. $student->AGE.'</td>';
					  		echo '<td align="center">'. $student->BDAY.'</td>';
					  		echo '<td align="center">'. $student->SEX.'</td>';
					  		echo '<td>'. $student->EMAIL.'</td>';
					  		echo '<td align="center"><a href="index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span> 
							<span class="btn btn-secondary align-middle"> View</span></a></td>';
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
