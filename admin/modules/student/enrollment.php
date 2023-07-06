<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			
			  ?>
 
		  <form class="form-horizontal span6" action="controller.php?action=enroll" method="POST">

					<div class="panel panel-primary col-offset-5">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row mt-2">  
				            <div class="col-md-8 ">
      						<div class="form-group">
				              <label for=
				              "Semester">ID Number: </label> 
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div> 
				      	</div>
				          <div class="row mt-2" id="idno">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Semester">Name: </label> 
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="row	 mt-2">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Status">Status : </label> 
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="New">New Student</option>
									<option value="Continuing">Continuing</option>	
									<option value="Trasferee">Trasferee</option>	
								</select>
				              </div>
				            </div>
				          </div>

			             <div class="row	 mt-2">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "course">Year and Section :</label> 
				               <select class="form-control input-sm" name="course" id="course">
				                  	<?php
				                $mydb->setQuery("SELECT DISTINCT  `COURSE_NAME` ,  `COURSE_ID` 
									FROM course");
									$cur = $mydb->loadResultList();
				                  	foreach ($cur as $course) {
				                  		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
				                  	}

				                  	?>
										
									</select>	
				              </div>
				            </div>
				          </div>
				          
			           
				           
			         
			             
			             <div class="row	 mt-2">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for="ay">Academic Year :</label> 
				                <select class="form-control input-sm" name="ay" id="ay">
								<?php
									$ay = new academicyear();
									$cur = $ay->listOfay();
									foreach ($cur as $ay) {
										echo '<option value="'. $ay->ACADYR.'">'.$ay->ACADYR.'</option>';
									}
									
									?>	
								</select>	
				              </div>
				            </div>
				          </div>

				          <div class="form-group mt-2">
				            <div class="col-md-8">
				              <label for="Semester">Semester : </label>

				              <div class="col-md-6">
				               <select class="form-control input-sm" name="Semester" id="Semester">
							   <?php
									$sem = new Semester();
									$cur = $sem->listSem();
									foreach ($cur as $sem) {
										echo '<option value="'. $sem->SEM.'">'.$sem->SEM.'</option>';
									}
									
									?>
								</select>
				              </div>
				            </div>
				          </div>
				         <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "First" type="hidden" value="First">

				          <div class="row" id="idno">
				            <div class="col-md-10">  
      						<div class="form-group">
							         <div class="btn-group mt-3"> 
									 <a href="index.php?view=view&studentId=' <?php echo $_GET['studentId']; ?> '" name="back" class="btn btn-primary"></span>Back</a>
									    <button type="submit" name="savestep1" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									  
									  
									  
									</div>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			           

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>