<div class="container">
<div class="well">
			<caption><h3 class="fw-bold mb-3">Student Enrollment Records</h3></caption>
			    <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" Method="POST">  					
				<table id="single" class="table table-bordered table-striped table-hover">
					
				  <thead>
				  	<tr>
				  		<th> <input class="form-check-input" type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Course/Year</th>
				  		<th>Semester</th>
				  		<th>School Yr</th>
				  		<th>Status</th>
				  		<th>Date Enrolled</th>
				  		<th>Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_GET['studentId']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td><input class="form-check-input" type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>
				  				<a href="index.php?view=editenrollment&studentId='.$_GET['studentId'].'&id='.$schoolyr->SYID.'">' . $schoolyr->COURSE_DESC.'</a></td>';
				  		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">
						<span class="btn btn-secondary">Enrolled Subjects</span></a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '<div class="mt-2 btn-group">
				<a href="index.php" name="back" class="btn btn-primary">Back </a>
				  <a href="index.php?view=enroll&studentId='. $_GET['studentId'].'" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-primary" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
				
				 }
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->