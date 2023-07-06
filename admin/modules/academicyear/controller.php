<?php 
require_once ("../../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
if (isset($_POST['save'])){

	if ($_POST['aystart'] == "" OR $_POST['ayend'] == "") {
		message("All field is required!", "error");
		redirect('index.php?view=add');

	}else{
		$ay = new academicyear();
		$aystart = $_POST['aystart'];
		$ayend = $_POST['ayend'];
		$ayname		= $_POST['aystart'] . "-" . $_POST['ayend'];
		$res = $ay->find_all_ay($ayname);
				
		if ($res >=1) {
			message("Academic year already exist!","error");
			redirect('index.php?view=add');

		}else{
			$ay->AY_START = $aystart;
			$ay->AY_END = $ayend;
			$ay->ACADYR = $ayname;
			 $istrue = $ay->create(); 
			 if ($istrue == 1){
			 
			 	message("New [". $ayname ."] Academic Year created successfully!","success");
				redirect('index.php');

			 }
		}	 

		
	}
}
}



function doEdit(){
	$ayid = $_GET['id'];

	if (isset($_POST['save'])){

		if ($_POST['aystart'] == "" OR $_POST['ayend'] == "") {
			$message= "All field is required!";
			redirect('index.php?view=edit&id='.$ayid);

		}else{
			$ay = new academicyear();
			$ayid		= $_POST['ayid'];
			$aystart = $_POST['aystart'];
			$ayend = $_POST['ayend'];
			$ayname		= $_POST['aystart'] . "-" . $_POST['ayend'];
			
			$ay->AY_ID = $ayid;
			$ay -> AY_START = $aystart;
			$ay -> AY_END = $ayend;
			$ay->ACADYR = $ayname;
			$ay->update($ayid);

			$message = $ayname. " has updated successfully!";
			message($message,"success");
			redirect('index.php');
		}
}
}

function doDelete(){
		
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$ay = new academicyear();
		$ay->delete($id[$i]);
	}

message("Academic year(s) already Deleted!","info");
redirect('index.php');

}

?>