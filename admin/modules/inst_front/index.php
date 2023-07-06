<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'prof' :
		$content    = 'teacherprof.php'; //working profile		
		break;

	case 'record' :
		$content    = 'instructorsubj.php';		//working
		break;

	case 'class' :
		$content    = 'instclass.php';		//not working
		break;
    case 'view' :
		$content    = 'view.php';		//not workung
		break;
	case 'grade' :
		$content    = 'grades.php';		//notworking
		break;
	case 'assign' :
		$content    = 'assignsubj.php';		//not working
		break;

	default :
		$content    = 'home.php';
				
}
require_once '../../theme/templates.php';
?>


  