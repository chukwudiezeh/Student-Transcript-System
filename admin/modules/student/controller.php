<?php 
require '../../../includes/initialize.php';

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
	case 'assign' :
	doAssignsubj();
	break;
	case 'delsubj' :
	doDelsubj();
	break;
	case 'enroll' :
	doEnroll();
	break;
	case 'delsy' :
		doDelsy();
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
	            $mydb->setQuery("INSERT into tblstudent values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]')");
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

	function doDelsy(){
		$studentId=$_GET['studentId'];
		
		  @$id=$_POST['selector'];
		  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$sy = new Schoolyr();
				$sy->delete($id[$i]);
			}
					message("Schoolyear is successfully deleted!","info");
					redirect('index.php?view=view&studentId='.$studentId.'');
		}else{
			message("Select your Schoolyear first, if you want to delete it!","error");
			redirect('index.php?view=view&studentId='.$studentId.'');
		}
	}
function doEnroll(){

	if (isset($_POST['savestep1'])){

 				 $created =  strftime("%Y-%m-%d %H:%M:%S", time()); 
				 $idno  =  $_POST['idno'];
				 $Status = $_POST['status'];
				 $level = $_POST['level'];
				 $ay 	 = $_POST['ay'];
				 $semester = $_POST['Semester'];

				$sy = new Schoolyr();
				$sy->AY = $ay;
				$sy->STATUS = $Status;
				$sy->SEMESTER = $semester;
				$sy->LEVEL_ID = $level;
				$sy->IDNO = $idno;
				$sy->DATE_RESERVED = $created;

				if($istrue=$sy->create()){
			if ($istrue==1){
			 	
			 	message("Students successfully enrolled! Assign now the student's subjects.","success");
			 	// check_message();
			 	redirect('index.php?view=view&studentId='.$idno.'');
				
			}
}


			}
}	
function doInsert(){
		
	//primary Details
$IDNO  = $_POST['idno'];
$MATRICNO=$_POST['matricno'];
$FNAME = $_POST['fName'];
$LNAME = $_POST['lName'];
$MNAME = $_POST['mName'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['bday'];
$BPLACE= $_POST['bplace'];
$STATUS= $_POST['status'];
$AGE   = $_POST['age'];
$NATIONALITY = $_POST['nationality'];
$RELIGION = $_POST['religion'];
$CONTACT_NO = $_POST['contact'];
$HOME_ADD = $_POST['home'];
$STATE=$_POST['state'];
$SCHOOL=$_POST['school'];
$DEPARTMENT=$_POST['department'];
$PROGRAMME=$_POST['programme'];
$EMAIL   = $_POST['email'];



$student = new Student();
//$student->S_ID				= "null";
$student->IDNO 				=	$IDNO;
$student->MATRICNO 			=	$MATRICNO;
$student->LNAME				=	$LNAME;
$student->FNAME				=	$FNAME;
$student->MNAME				=	$MNAME;
$student->SEX				=	$SEX;
$student->BDAY				=	$BDAY;
$student->BPLACE			=	$BPLACE;
$student->STATUS			=	$STATUS;
$student->AGE				=	$AGE;
$student->NATIONALITY		=	$NATIONALITY;
$student->RELIGION			=	$RELIGION;
$student->CONTACT_NO		=	$CONTACT_NO;
$student->HOME_ADD			=	$HOME_ADD;
$student->STATE 			=	$STATE;
$student->EMAIL 			=	$EMAIL;
$student->SCHOOL 			=	$SCHOOL;
$student->DEPARTMENT		=	$DEPARTMENT;
$student->PROGRAMME 		=	$PROGRAMME;


//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newstudent.php');
}

*/  
//secondary Details
$GUARDIAN_NAME 		=  $_POST['guardian_name'];
$GUARDIAN_ADDRESS 	=  $_POST['guardian_address'];
$GUARDIAN_PHONE = $_POST['guardian_phone'];

$studdetails = new Student_details();
$studdetails->GUARDIAN_NAME			=	$GUARDIAN_NAME;
$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
$studdetails->GUARDIAN_PHONE 		=	$GUARDIAN_PHONE;
$studdetails->IDNO 				    =	$IDNO;

//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newstudent.php');
}
*/

//requirements
/*$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

$requirements = new Requirements();

$requirements->NSO				 		= $nso;
$requirements->BAPTISMAL		   		= $bapt;
$requirements->ENTRANCE_TEST_RESULT		= $entrance;
$requirements->MARRIAGE_CONTRACT        = $mir_contract;
$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
$requirements->IDNO 			   		= $IDNO;
//$istrue = $requirements->create(); 
if ($istrue) {
	output_message('Student requirements successfully added!');
	redirect ('newstudent.php');
} 
*/

if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('index.php?view=add');
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=add');
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('index.php?view=add');
	
}else{

	$student->create(); 
	#$sy->create();  
	$studdetails->create();
	//$requirements->create(); 
	message('New student added successfully!', "success");
	redirect('index.php?view=list');	


}

}
function doEdit(){
	if (isset($_POST['submit'])){	

$IDNO  = $_POST['idno'];
$MATRICNO=$_POST['matricno'];
$FNAME = $_POST['fName'];
$LNAME = $_POST['lName'];
$MNAME = $_POST['mName'];
$SEX   = $_POST['gender'];
$BDAY  = $_POST['bday'];
$BPLACE= $_POST['bplace'];
$STATUS= $_POST['status'];
$AGE   = $_POST['age'];
$NATIONALITY = $_POST['nationality'];
$RELIGION = $_POST['religion'];
$CONTACT_NO = $_POST['contact'];
$HOME_ADD = $_POST['home'];
$STATE=$_POST['state'];
$SCHOOL=$_POST['school'];
$DEPARTMENT=$_POST['department'];
$PROGRAMME=$_POST['programme'];
$EMAIL   = $_POST['email'];

$student = new Student();
//$student->S_ID				= "null";
$student->IDNO 				=	$IDNO;
$student->MATRICNO 			=	$MATRICNO;
$student->LNAME				=	$LNAME;
$student->FNAME				=	$FNAME;
$student->MNAME				=	$MNAME;
$student->SEX				=	$SEX;
$student->BDAY				=	$BDAY;
$student->BPLACE			=	$BPLACE;
$student->STATUS			=	$STATUS;
$student->AGE				=	$AGE;
$student->NATIONALITY		=	$NATIONALITY;
$student->RELIGION			=	$RELIGION;
$student->CONTACT_NO		=	$CONTACT_NO;
$student->HOME_ADD			=	$HOME_ADD;
$student->EMAIL 			=	$EMAIL;
$student->STATE 			=	$STATE;
$student->SCHOOL 			=	$SCHOOL;
$student->DEPARTMENT 		=	$DEPARTMENT;
$student->PROGRAMME 		=	$PROGRAMME;
//course infor
/*$course	= $_POST['course'];
$semester = $_POST['semester'];
$ay		= $_POST['AY'];
$sy = new Schoolyr();
$sy->AY 		= $ay;
$sy->SEMESTER 	= $semester;
$sy->COURSE_ID	= $course;
$sy->IDNO 		= $IDNO;*/
/*if ($istrue) {
	output_message('course info successfully added!');
	redirect ('newstudent.php');
}

*/  
//secondary Details
$GUARDIAN_NAME 		=  $_POST['guardian_name'];
$GUARDIAN_ADDRESS 	=  $_POST['guardian_address'];
$GUARDIAN_PHONE = $_POST['guardian_phone'];

$studdetails = new Student_details();
$studdetails->GUARDIAN_NAME			=	$GUARDIAN_NAME;
$studdetails->GUARDIAN_ADDRESS		=	$GUARDIAN_ADDRESS;
$studdetails->GUARDIAN_PHONE 		=	$GUARDIAN_PHONE;
$studdetails->IDNO 				    =	$IDNO;
//  
/*if ($istrue) {
	output_message('Seccondary details successfully added!');
	redirect ('newstudent.php');
}
*/

//requirements
/*$nso  				  = isset($_POST['nso']) ? "Yes" : "No";
$bapt 				  = isset($_POST['baptismal']) ? "Yes" : "No";
$entrance 			  = isset($_POST['entrance']) ? "Yes" : "No";
$mir_contract  		  = isset($_POST['mir_contract']) ? "Yes" : "No";
$certifcateOfTransfer = isset($_POST['certifcateOfTransfer']) ? "Yes" : "No";

$requirements = new Requirements();

$requirements->NSO				 		= $nso;
$requirements->BAPTISMAL		   		= $bapt;
$requirements->ENTRANCE_TEST_RESULT		= $entrance;
$requirements->MARRIAGE_CONTRACT        = $mir_contract;
$requirements->CERTIFICATE_OF_TRANSFER	= $certifcateOfTransfer;
$requirements->IDNO 			   		= $IDNO;
//$istrue = $requirements->create(); 
if ($istrue) {
	output_message('Student requirements successfully added!');
	redirect ('newstudent.php');
} 
*/

if ($IDNO == "") {
	message('ID Number is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($LNAME == "") {
	message('Last Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($FNAME == "") {
	message('First Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($MNAME == "") {
	message('Middle Name is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
}elseif ($EMAIL == "") {
	message('Email address is required!', "error");
	redirect ('index.php?view=edit&id='.$IDNO);
	
}else{

	$student->update($_GET['id']); 
	//$sy->update($_GET['id']);  
	$studdetails->update($_GET['id']);
	//$requirements->update($_GET['id']); 
	message('Student infomation updated successfully!', "info");redirect('index.php');	


}
}

		
}

function doDelete(){
 @$id=$_POST['selector'];
	  $key = count($id);
	//multi delete using checkbox as a selector
	
	for($i=0;$i<$key;$i++){
 
		$student = new Student();
		$student->delete($id[$i]);
		$details = new Student_details();
		$details->delete($id[$i]);
		$sy = new Schoolyr();
		$sy->delete($id[$i]);
		$req = new Requirements();
		$req->delete($id[$i]);

	}
		message("Student has successfully deleted!","info");
		redirect('index.php');
	}
	function doAssignsubj(){
		global $mydb;
		$studentId = $_GET['studentId'];
		$SY = $_GET['SY'];
		//$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];


		$subjectId = $_POST['selector'];
		$subjId = count($subjectId);

		if (!$subjectId==''){
		//echo $selector,$selector;
		$mydb->setQuery("SELECT * FROM `schoolyr` WHERE `AY` ='{$SY}' AND `IDNO`='{$studentId}'");
		if($res = $mydb->loadSingleResult()){
			$syid=$res->SYID;
		}

		//echo $res->SYID . '<br/>';
		for ($i=0;$i<$subjId; $i++){
			$mydb->setQuery("SELECT  * FROM  `subject` s ,`level` l WHERE s.`LEVEL_ID`=l.`LEVEL_ID` AND SUBJ_ID='{$subjectId[$i]}'");
			$cur = $mydb->loadResultlist();

			foreach ($cur as  $result) {
		  
		 		$studsub = New StudentSubjects();
		 		$grade=new Grades();
				$studsub->SUBJ_ID			=	$result->SUBJ_ID;
				$studsub->IDNO				=	$studentId;
				$studsub->SY 				=	$result->AY;
				$studsub->SEMESTER			=	$result->SEMESTER;
				$studsub->LEVEL_ID			=	$result->LEVEL_ID;

				
				$grade->SUBJ_ID=$result->SUBJ_ID;
				$grade->IDNO=$studentId;
				$grade->SYID=$sy;
				$grade->CONTINOUS_ASSESSMENT='0';
				$grade->EXAMINATION='0';
				$grade->TOTAL='0';
				$grade->GRADE_LETTER='-';
				$grade->EQUIVALENT='0';

				$studsub->create();
				$grade->create();
			}

		message("Student's subjects already Added!","info");
		redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		 
		}
		}else{
			message("Select first the subject(s) you want to Add!","error");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}

	}
	function doDelsubj(){
		$studentId=$_GET['studentId'];
		$cid=$_GET['cid'];
		$sy=$_GET['sy'];
		
	  @$id=$_POST['selector'];
	  $key = count($id);


		if (!$id==''){
		//multi delete using checkbox as a selector
			
			for($i=0;$i<$key;$i++){

				 //echo $id[$i];
		 
				$studSubjects = NEW Grades();
				$studSubjects->delete($id[$i]);
			}
					message("Student subject(s) already Deleted!","info");
					redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}else{
			message("Select your subject(s) first, if you want to delete it!","error");
			redirect('index.php?view=subject&studentId='.$studentId.'&cid='.$cid.'&sy='.$sy.'');
		}
	}
?>