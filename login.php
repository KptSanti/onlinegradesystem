<?php require_once("includes/initialize.php");
 if (studlogged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
 
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['upass']);
    
     $h_upass = $upass;
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new Student();
		//make use of the static function, and we passed to parameters
		 $res = $user::Authenticatestudent($uname);
		//then it check if the function return to true
    	//$stud = new Student();
		//$res= $stud::Authenticatestudent($uname);
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CCDI Grade Evaluation System</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>css/login/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>css/login/css/aos.css" />
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>css/login/css/style.css" />
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>plugins/assets/css/styles.min.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header
        class="site-navbar py-3 js-sticky-header site-navbar-target"
        role="banner"
      >
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <div class="site-logo ">
              <a href="<?php echo WEB_ROOT;?>index.php" style="text-decoration: none;">Computer Communication Development Institute</a>
            </div>

            <div class="mx-auto text-center align-items-end">
              <nav
                class="site-navigation position-relative text-right"
                role="navigation"
              >
                <ul
                  class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block m-0 p-0"
                >
                  <li><a href="#home-section" class="nav-link">Home</a></li>
                  <li>
                    <a href="#programs-section" class="nav-link">About</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <div class="intro-section" id="home-section">
        <style>
          .bg-wallpaper{
            background-image: url('images/wallpaper.png');
            background-repeat: no-repeat;
            background-size: cover;
          }
          .overcolor {
            background-color: rgba(0, 0, 10, .7);
            background-blend-mode: overlay;
          }
        </style>
        <div
          class="overcolor bg-wallpaper"
          data-stellar-background-ratio="0.5"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="row align-items-center">
                  <div class="col-lg-6 mb-4">
                    <h1 class="fw-bolder section-title  " data-aos="fade-up" data-aos-delay="100">
                      CCDI Grade Evaluation System
                    </h1>
                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">
                      Computer Communication Development Institute Official
                      Website for Grade Evaluation System.
                    </p>
                  </div>

                  <div
                    class="col-lg-5 ml-auto"
                    data-aos="fade-up"
                    data-aos-delay="500"
                  >
                    <form action="" method="post" class="form-box">
                      <h2 class="text-center fw-bolder mb-4" style="color:black;">Sign In</h2>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="username" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputPasswor1" class="form-label">Password</label>
                        <input type="password" name="upass" class="form-control" id="exampleInputPassword1">
                      </div>
                      <!-- <div class="mb-4">
                        <a class="text-primary fw-bold" href="#html">Forgot Password ?</a>
                      </div> -->
                      <button name="btnlogin" class="btn btn-primary w-100 py-8 fs-4 mt-2 mb-2 rounded-2">Sign In</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section" id="programs-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div
              class="col-lg-7 text-center"
              data-aos="fade-up"
              data-aos-delay=""
            >
              <h2 class="section-title">About CCDI</h2>
              <p class="text-justify">
                More than two decades of quality education – this is CCDI’s
                legacy to the Bicolanos! Inspired by the founder, Hon. Felix R.
                Alfelor, Jr.’s mission of providing affordable quality computer
                education to the underprivileged, CCDI continues to soar and
                satisfy the needs of the Bicolano youth amidst rapid
                technological advancement and globlization. CCDI is a
                non-profit, private education institution that offers I.T.
                related programs at affordable rate. It is dedicated and
                committed to providing quality education with a heart for
                community and national development. CCDI is a specialized
                computer college recognized by the Commission on Higher
                Education (CHED) and accredited by the Technical Education and
                Skills Development Authority (TESDA)and the Department of
                Education. It offers not only I.T courses but also short-term
                training programs for professionals and skilled workers.
              </p>
            </div>
          </div>
        </div>

          
    <!-- .site-wrap -->

    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery-ui.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/popper.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/owl.carousel.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery.stellar.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery.countdown.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/aos.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>js/login/js/jquery.sticky.js"></script>

    <script src="<?php echo WEB_ROOT;?>js/login/js/main.js"></script>

    <script src="<?php echo WEB_ROOT;?>plugins/assets/js/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo WEB_ROOT;?>plugins/assets/js/libs/jquery/dist/jquery.min.js"></script>
  </body>
</html>
