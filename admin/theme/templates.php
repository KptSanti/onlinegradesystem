<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="x-icon" href="<?php echo WEB_ROOT?>plugins/assets/images/logos/ccdi.png">
  <title>CCDI Evaluation System</title>
  <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/assets/css/styles.min.css" />
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/bootstrap.min.css" rel="stylesheet" /> 
  <!--style para sa design san table-->
  <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>plugins/datatables/datatables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>plugins/datatables/datatables.min.css">
  <!--responsive table-->
  <link rel="stylesheet" typw="text/css" href="<?php echo WEB_ROOT;?>plugins/datatables/responsive/css/responsive.bootstrap5.min.css">
  <!--date and time-->
  <link rel="stylesheet" href="<?php echo WEB_ROOT;?>plugins/datatables/datatime/css/dataTables.dateTime.min.css">
  <!--date 2 downdated-->
  <link rel="stylesheet" href="<?php echo WEB_ROOT;?>css/bootstrap-datetimepicker.css">
  <link rel="stylesheet" href="<?php echo WEB_ROOT;?>css/bootstrap-datetimepicker.min.css">
  
  
</head>
<style>
table, table tr td {
  font-size: 1em;
}
</style>
<?php confirm_logged_in(); ?>
<body >
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-center"> <!--ccdi logo-->
          <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="text-nowrap fw-bolder d-flex flex-row m-1 align-items-center">
            <img src="<?php echo WEB_ROOT;?>plugins/assets/images/logos/ccdi.png" class="w-25" alt="ccdilogo" />  
            <h4 class="my-1 fw-bolder mx-2"><?php echo $_SESSION['ACCOUNT_TYPE'];?></h4>        
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <li class="sidebar-item <?php echo (currentpage_admin() == '') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ ?>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Functions</span>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'student') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/student/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                <span class="hide-menu">Students</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'subject') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/subject/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-book"></i>
                </span>
                <span class="hide-menu">Subjects</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'course') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/course/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-certificate"></i>
                </span>
                <span class="hide-menu">Courses</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'instructor') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/instructor/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Instructor</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'department') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/department/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-chalkboard"></i>
                </span>
                <span class="hide-menu">Department</span>
              </a>
            </li>
            <!-- unessacry na ini HAHAHHAH -->
            <!-- <li class="sidebar-item <//?php echo (currentpage_admin() == 'semester') ? "active" : false;?>">
              <a class="sidebar-link" href="<//?php echo WEB_ROOT;?>admin/modules/semester/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-writing"></i>
                </span>
                <span class="hide-menu">Semester</span>
              </a>
            </li> -->
            <li class="sidebar-item <?php echo (currentpage_admin() == 'academicyear') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/academicyear/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-stats"></i>
                </span>
                <span class="hide-menu">Academic Year</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'room') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/room/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-notebook"></i>
                </span>
                <span class="hide-menu">Room</span>
              </a>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'class') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/class/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar-time"></i>
                </span>
                <span class="hide-menu">Class</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Manage User</span>
            </li>
            
            <li class="sidebar-item <?php echo (currentpage_admin() == 'user') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/user/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-search"></i>
                </span>
                <span class="hide-menu">Accounts</span>
              </a>
            </li>
            <?php }?>

            <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ ?> 
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Functions</span>
            </li>
            <li class="sidebar-item <?php echo (currentpage_admin() == 'inst_front') ? "active" : false;?>">
              <a class="sidebar-link" href="<?php echo WEB_ROOT;?>admin/modules/inst_front/index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-chalkboard"></i>
                </span>
                <span class="hide-menu">Record</span>
              </a>
            </li> 
            <?php }?>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
                <h4 class="ms-auto my-3 fw-bolder">Computer Communication Development Institute</h4>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end"> 
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <i class="ti ti-user-circle" style="font-size: 1.55em;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <div class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-point fs-6"></i>
                      <p class="mb-0 fs-3 fw-bold"><?php echo $_SESSION['ACCOUNT_NAME'];?></p>
                    </div>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-point fs-6"></i>
                      <p class="mb-0 fs-3 fw-bold"><?php echo $_SESSION['ACCOUNT_TYPE'];?></p>
                    </a>
                    <!-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a> -->
                    <a href="<?php echo WEB_ROOT;?>admin/logout.php" class="btn btn-outline-primary mx-3 mt-1 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      
      <!-- start here -->
      <div class="container-fluid" style="background-color: #FCFAFF  ">
        <div class="card" >
          <div class="card-body">
            <!-- <h4 class=" fw-semibold mb-4">Dashboard</h4> -->
            <?php check_message(); ?>
            <?php require_once $content;?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="<?php echo WEB_ROOT; ?>plugins/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/sidebarmenu.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/app.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/libs/simplebar/dist/simplebar.js"></script>
  <!--custom pagination table ini-->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.js"></script> 
  <script src="<?php echo WEB_ROOT; ?>plugins/datatables/datatables.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/datatables/datatables.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
  <!--custom pagination table responsive-->
  <script src="<?php echo WEB_ROOT;?>plugins/datatables/responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo WEB_ROOT;?>plugins/datatables/responsive/js/responsive.bootstrap5.min.js"></script>
  <!-- custom time table -->
  <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo WEB_ROOT; ?>plugins/datatables/datatime/js/dataTables.dateTime.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo WEB_ROOT; ?>plugins/datatables/datatime/js/dataTables.dateTime.min.js" charset="UTF-8"></script>
  <!--custom-->
  <script type="text/javascript">
  
  $('#test').dtDateTime({
    format: 'D MMM YYYY HH:mm'
  });

  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      function calculate(){  

     var first = document.getElementById('first').value; 
     var second = document.getElementById('second').value; 
     var third = document.getElementById('third').value;  
     var fourth = document.getElementById('fourth').value;  

    var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
    document.getElementById('finalave').value = totalVal;
     document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
        }
  </script>     
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [0, 1]
        } ],
        "order": [[ 3, 'asc' ]],
        responsive: true
    } );
    t.cells().nodes().to$().css('padding', '1em');
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

$(document).ready(function() {
    var t = $('#singlewithnum').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [0]
        } ],
        "order": [[ 3, 'asc' ]],
        responsive: true
    } );
    t.cells().nodes().to$().css('padding', '1em');
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

$(document).ready(function() {
    var t = $('#single').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [0]
        } ],
        "order": [[2 , 'asc' ]],
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          /*   cell.innerHTML = i+1; */
        } );
    } ).draw();
} );

$(document).ready(function() {
    var t = $('#singletwo').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": [0]
        } ],
        "order": [[1 , 'asc' ]],
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
          /*   cell.innerHTML = i+1; */
        } );
    } ).draw();
} );



/*$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        //vertical scroll
         "scrollY":        "400px",
        "scrollCollapse": true,
        //ordering start at column 2
       "order": [[ 2, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
*/
/*$(document).ready(function() {
    $('#example').dataTable( {
        "pagingType": "full_numbers"
    } );
} );*/
/*$(document).ready(function() {
    $('#example').dataTable();
} );
*///scroll vertical
/*$(document).ready(function() {
    $('#example').dataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
*/       
    </script>
</body>

</html>