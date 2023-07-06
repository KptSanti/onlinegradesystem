<?php

$subjid = $_GET['id'];
$singlesubject = new Subject();
$object = $singlesubject->single_subject($subjid);

?>
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $subjid;?>" method="POST">

<fieldset>
	<legend class="fw-bold mb-3">Edit Subject</legend>
										

		<div class="form-group mb-2">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjcode">Subject Code</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
								  "Subject Code" type="text" value="<?php echo $object->SUBJ_CODE;?>" required>
          </div>
        </div>
      </div>

      <div class="form-group mb-2">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjdesc">Subject Description</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
								  "Subject Description" type="text" value="<?php echo $object->SUBJ_DESCRIPTION;?>" required>
          </div>
        </div>
      </div>

       <div class="form-group mb-2">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "unit">No of units</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="unit" name="unit" placeholder=
								  "No of units" type="number" value="<?php echo $object->UNIT;?>" required>
          </div>
        </div>
      </div>
<!--       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "pre">Prerequisite</label>

          <div class="col-md-8">-->
             <input class="form-control input-sm" id="pre" name="pre" placeholder=
								  "Prerequisite" type="hidden" value="<?php echo $object->PRE_REQUISITE;?>">
      <!--    </div>
        </div>
      </div>-->
       <div class="form-group  mb-2">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "course">Course and Year</label>

          <div class="col-md-8">
           <select class="form-control input-sm" name="course" id="course">
              	<?php
              	$course = new Course();
              	$cur = $course->listOfcourse();	
              	foreach ($cur as $course) {
              		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
              	}

              	?>
					
				</select>	
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "ay">Academic Year</label>

          <div class="col-md-8">
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
	  <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "Semester">Semester</label>

          <div class="col-md-8">
             <select class="form-control input-sm" name="Semester" id="Semester">
             <?php
									$sem = new Semester();
									$cur = $sem->listSem();
									foreach ($cur as $sem) {
										echo '<option value="'. $sem->SEM.'">'.$sem->SEM.'</option>';
									}
									
									?>
			</select>
			  <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Prerequisite" type="hidden" value="First">
         </div>
        </div>
      </div>
	<?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
	 <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
          <div class="btn-group">
          <a href="index.php" name="back" class="btn btn-primary">Back </a>
            <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
          </div>
          </div>
        </div>
      </div>';
    }
    ?>

		
</fieldset>	

				
</form>
</div><!--End of container-->