<?php 
require_once ("../includes/initialize.php");
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
		
	if (isset($_POST['post'])){

	if ($_POST['title'] == "" OR $_POST['content'] == "") {
		message("All field is required!","error");
		//check_message();
	}else{
		

		$announce = new announcement();
		$title   	= $_POST['title'];
		$content   	= $_POST['content'];
		$res = $announce->find_all_announce($title);
				
		if ($res >=1) {
			message("Title already exist!","error");
			//check_message();
            redirect('index.php');
		}
		else{
			$announce->title = $title;
			$announce->content = $content;
			 $istrue = $announce->create(); 
			 if ($istrue == 1){

			 	message("New Announmencement titled: [". $title ."] created successfully!","success");
			 	redirect('index.php');
			 }
		}	 

		
	}
}
}
function doEdit(){
	$courseid = $_GET['id'];
	$singledept = new Course();
	$object = $singledept->single_course($courseid);


	if (isset($_POST['savecourse'])){

		if ($_POST['coursename'] == "" OR $_POST['coursedesc'] == "") {
			
			message("All field is required!", "error");

		}else{
			$course = new Course();
			$courseid		= $_GET['id'];
			$coursename   	= $_POST['coursename'];
			$courselevel   	= $_POST['level'];
			$coursemajor   	= $_POST['major'];
			$coursedesc 	= $_POST['coursedesc'];
			$coursedept		= $_POST['dept'];
					
			$course->COURSE_NAME = $coursename;
			$course->COURSE_LEVEL = $courselevel;
			$course->COURSE_MAJOR = $coursemajor;
			$course->COURSE_DESC = $coursedesc;
			$course->DEPT_ID 	 = $coursedept;	
			$course->update($courseid);
			

			message($coursename. " has updated successfully!", "info");
			redirect('index.php');

		}
	}
		
}

function doDelete(){
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$Course = new Course();
		$Course->delete($id[$i]);
	}
	message("Course(s) already Deleted!","info");
	redirect('index.php');
}
?>