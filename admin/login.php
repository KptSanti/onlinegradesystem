<?php require_once("../includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CCDI Grades Evaulation System</title>  
  <link rel="stylesheet" href="<?php echo WEB_ROOT;?>plugins/assets/css/styles.min.css" />
</head>

<body>
<?php if (logged_in()) { ?>
  <script type="text/javascript">
      window.location = "index.php";
  </script>
<?php }  ?>
<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>

  <!--naviagtion bar-->
  <!--  postion center -->
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">

        <!--card start-->
        <div class="row justify-content-center mx-2 w-100">
          <div class="col-md-7 col-lg-5 col-xxl-2">
            <div class="card mb-0">
              <div class="card-body">
               <a href="authentication-login.html" class="text-nowrap logo-img brand-logo d-flex justify-content-center pt-3 pb-2 w-100">
                  <img src="<?php echo WEB_ROOT;?>plugins/assets/images/logos/ccdi.png" class="m-0" height="55" width="60" alt="CCDI">
                  <div class="h1 m-0 p-2 fw-bolder ">CCDI</div>
                </a>
                <h4 class="text-center fw-bold pb-3">Grades Evaulation System</h4>
                <form action="login.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="username" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-2">
                    <label for="exampleInputPasswor1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                  </div>
                 <!--  <div class="mb-4">
                    <a class="text-primary fw-bold" href="#html">Forgot Password ?</a>
                  </div> -->
                  <button name="btnlogin" class="btn btn-primary w-100 py-8 fs-4 mb-2 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 

    <script src="<?php echo WEB_ROOT;?>plugins/assets/js/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>plugins/assets/js/libs/jquery/dist/jquery.min.js"></script>
</body>

</html>