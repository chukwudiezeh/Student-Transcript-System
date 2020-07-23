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

case 'import' :
		doimport();
	break;

	}

	function doimport(){
		if(isset($_POST["Import"])){
		//require_once("includes/initialize.php");

		echo $filename=$_FILES["file"]["tmp_name"];
		//echo $ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));


		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	            //print_r($emapData);
	            global $mydb;
	            $mydb->setQuery("INSERT into course values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]')");
	          	$mydb->executeQuery();
	           	
	         }
	         fclose($file);
	         message("CSV File has been successfully Imported","info");
			 redirect('index.php?view=import');
		         
		 }
		 else
		 	message("Invalid File:Please Upload CSV File","error");
			redirect('index.php?view=import');
		 }
	}
function doInsert(){
		
	if (isset($_POST['savelevel'])){

	if ($_POST['level'] == "" OR $_POST['leveldesc'] == "") {
		message("All field is required!","error");
		check_message();
	}else{
		

		$leveler = new Level();
		$level  	= $_POST['level'];
		$leveldesc 	= $_POST['leveldesc'];
		$semester		= $_POST['semester'];
		$res = $leveler->find_all_level($level, $leveldesc, $semester);
				
		if ($res >=1) {
			message("Level already exist!","error");
			check_message();
		}else{
			$leveler->LEVEL = $level;
			$leveler->LEVEL_DESCRIPTION = $leveldesc;
			$leveler->SEMESTER = $semester;	
			 $istrue = $leveler->create(); 
			 if ($istrue == 1){
			 	
			 	message("New [". $level ."] course created successfully!","success");
			 	redirect('index.php');
			 }
		}	 

		
	}
}
}
function doEdit(){
	$levelid = $_GET['id'];
	$singlelevel = new Level();
	$object = $singlelevel->single_level($levelid);


	if (isset($_POST['savelevel'])){

		if ($_POST['level'] == "" OR $_POST['leveldesc'] == "") {
			
			message("All field is required!", "error");

		}else{
			$levell = new Level();
			$levelid		= $_GET['id'];
			$level  	 	= $_POST['level'];
			$leveldesc 	= $_POST['leveldesc'];
			$semester		= $_POST['semester'];
					
			$levell->LEVEL = $level;
			$levell->LEVEL_DESCRIPTION = $leveldesc;
			$levell->SEMESTER 	 = $semester;	
			$levell->update($levelid);
			

			message($level. " has updated successfully!", "info");
			redirect('index.php');

		}
	}
		
}

function doDelete(){
	  @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$levelee = new Level();
		$levelee->delete($id[$i]);
	}
	message("Level(s) Deleted!","info");
	redirect('index.php');
}
?>