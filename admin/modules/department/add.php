<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">


          <fieldset>
            <legend class="fw-bold my-2">New Department</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label mt-2" for=
                      "deptname">Department Name</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="deptname" name="deptname" placeholder=
                            "Department Name" type="text" value="" required>
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label mt-2" for=
                      "deptdesc">Department Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="deptdesc" name="deptdesc" placeholder=
                            "Department Description" type="text" value="" required>
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
                        <button class="btn btn-primary" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                        </div>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->