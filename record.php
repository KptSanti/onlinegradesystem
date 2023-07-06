 
<div class="container" > 
	  <caption><h3 class="fw-bold mb-3">Student Records</h3></caption>
			    <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">  					
				<table id="single"class="table table-striped table-bordered table-hover">
				  <thead>
				  	<tr>
				  		<th>Course and Year</th> 
						<th>Semester</th>
				  		<th>Schoolyr</th>
				  		<th>Status</th>
				  		<th>Date Enrolled</th>
				  		<th>Options</th> 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_SESSION['IDNO']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td>' . $schoolyr->COURSE_DESC.'</td>';
				  		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'"><span class="btn btn-secondary" >View Grades</span></a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
				  </tfoot>	
				</table>
			
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->