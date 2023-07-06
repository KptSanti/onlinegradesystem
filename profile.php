
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
					<legend class="fw-bold mb-3">Student Information</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td><b>ID Number :</b></td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td><b>Fullname :</b></td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td><b>Gender :</b></td><td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td><b>Age :</b></td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td><b>Birth Date :</b></td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td><b>Place of Birth :</b></td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td><b>Civil Status :</b></td><td><?php echo $cur->STATUS; ?></td>	</tr>
							<td><b>Nationality :</b></td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td><b>Religion :</b></td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td><b>Contact No. :</b></td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td><b>Email Address :</b></td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td><b>Home Address :</b></td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend class="fw-bold mb-3">Secondary details</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td><b>Father :</b></td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td><b>Occupation :</b></td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td><b>Mother :</b></td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td><b>Occupation :</b></td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td><b>Boarding :</b></td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td><b>With family :</b></td><td><?php echo $det->WITH_FAMILY; ?></td></tr>
							<tr><td><b>Guardian :</b></td><td><?php echo $det->GUARDIAN; ?></td></tr>
							<tr><td><b>Address :</b></td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td><b>Other Person Supporting :</b></td><td><?php echo $det->OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td><b>Address :</b></td><td><?php echo $det->ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	
				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend class="fw-bold mb-3">Requirements</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td><b>NSO :</b></td><td width="80%"><?php echo $res->NSO; ?></td></tr>
							<tr><td><b>Baptismal :</b></td><td><?php echo $res->BAPTISMAL; ?></td></tr>
							<tr><td><b>Entrance test Result :</b></td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td><b>Mirriage Contract :</b></td><td><?php echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td><b>Certificate Of Transfer :</b></td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>					
			
	  	</div><!--End of well-->

</div><!--End of container-->