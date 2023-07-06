<div class="conatiner-fluid">
  <div class="conatiner">
    <div class="row">
      <legend class="fw-bold">Welcome, <?php echo $_SESSION['ACCOUNT_NAME'];?></legend>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="">Create  Annoucement Post</button>
<!--modal ini start sin modal-->
<div class="modal fade" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <legend class="container fw-bold my-2">Create an Announcement</legend>  
        <form class="form-horizontal" action="homecontroller.php?action=add" method="POST">             
            <div class="container-fluid mb-2">
                <div>
                  <label class="col-md-4 mb-2 control-label mt-2" for="title">Title</label>
                  <div class="col-md-12">
                    <input name="title" type="hidden" value="">
                     <input class="form-control input-sm" id="title" name="title" placeholder="Input Title" type="text" value="" required>
                  </div>
                </div>
            </div>

            <div class="form-group container-fluid mb-2">
                <div>
                    <label class="col-md-4 mb-2 control-label mt-2" for="content">Content</label>
                        <div class="col-md-12   ">
                           <textarea class="form-control input-sm" id="content" name="content" placeholder="Input Content" type="text" value="" required></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
              <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" name="post" type="submit" >Post</button>
              </div>
            </div>
        </form>
    </div>
    </div>
  </div>
</div>
<!--modal ini last na sin modal-->