<?php

$ayid = $_GET['id'];
$ay = new academicyear();
$object = $ay->single_ay($ayid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $ayid;?>" method="POST">

          <fieldset>
            <legend class="fw-bold mb-3">Edit Academic Year</legend>
                              
                  <div class="form-group mb-2">
                    <div class="col-md-8 ">
                      <label class="col-md-4 control-label" for=
                      "aystart">Start Year</label>

                      <div class="col-md-8 mb-2">
                        <input name="ayid" type="hidden" value="<?php echo $object->AY_ID;?>">
                         <input class="form-control input-sm" id="aystart" name="aystart" placeholder=
                            "Edit Starting Year" type="text" value="<?php echo $object->AY_START;?>">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "ayend"> End Year</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="ayend" name="ayend" placeholder=
                            "Input Ending Year" type="text" value="<?php echo $object->AY_END;?>">
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
                          <button class="btn btn-primary" name="save" type="submit" >Save</button>
                        </div>
                        </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      