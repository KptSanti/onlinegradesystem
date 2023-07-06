<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <fieldset>
      <legend class="fw-bold mb-3" >New Subject</legend>
                        

        <div class="form-group mb-2">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjcode">Subject Code</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
                      "Subject Code" type="text" value="" required>
                </div>
              </div>
            </div>

            <div class="form-group mb-2">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjdesc">Subject Description</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
                      "Subject Description" type="text" value="" required>
                </div>
              </div>
            </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "unit">No of units</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="unit" name="unit" placeholder=
                      "No of units" type="number" value="" required>
                </div>
              </div>
            </div>
         <!--    <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "pre">Prerequisite</label>

                <div class="col-md-8">-->
                   <input class="form-control input-sm" id="pre" name="pre" placeholder=
                      "Prerequisite" type="hidden" value="">
            <!--    </div>
              </div>
            </div>-->
             <div class="form-group mb-2">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "course">Course and Year</label>

                <div class="col-md-8">
                 <select class="form-control input-sm" name="course" id="course">
                      <?php
                      $course = new Course();
                      $cur = $course->listOfDistinctcourse(); 
                      foreach ($cur as $course) {
                        echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
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
                      "Semester" type="hidden" value="First">
               </div>
              </div>
            </div>
     

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                  <div class="btn-group">
                  <a href="index.php" name="back" class="btn btn-primary">Back </a>
                  <button class="btn btn-primary" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                 <button class="btn btn-primary" name="saveandnewcourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save and Add new</button>
                </div>
                </div>
              </div>
            </div>

        
    </fieldset> 

            
  </form>
  </div><!--End of container-->