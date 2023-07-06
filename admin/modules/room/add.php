<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">


          <fieldset>
            <legend class="fw-bold my-2">New Room</legend>
                              
                  <div class="form-group mb-2">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "rmname">Room Name</label>

                      <div class="col-md-8">
                        <input name="roomid" type="hidden" value="">
                         <input class="form-control input-sm" id="rmname" name="rmname" placeholder=
                            "Room Name" type="text" value="">
                      </div>
                    </div>
                  </div>

             <div class="form-group mb-2">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label mt-2" for=
                      "roomdesc">Room Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="roomdesc" name="roomdesc" placeholder=
                            "Room Description" type="text" value="">
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