<?php
require_once("../../../includes/initialize.php");
//checkAdmin();
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;
	default :
		$content    = 'list.php';		
}
require_once '../../theme/templates.php';
?>


  
