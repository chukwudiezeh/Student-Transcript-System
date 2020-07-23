<?php 
require '../../../includes/initialize.php';


	function bringschool($country=''){
		global $mydb;
	$sqlab="SELECT * FROM `school` WHERE `SCHOOL_ID`=$country LIMIT 1";
	$ssqlab=$mydb->setQuery($sqlab);
	$exessqlab=$mydb->executeQuery();
	if ($mydb->num_rows($exessqlab)>0){
		while($result = $mydb->fetch_array($exessqlab)){
			$countr=$result['SCHOOL_NAME'];
			return $countr;
		}
	}
}

function bringdepartment($state=''){
	global $mydb;
	$sqlab1= "SELECT * FROM `department` WHERE `DEPARTMENT_ID`=$state LIMIT 1";
	$ssqlab1=$mydb->setQuery($sqlab1);
	$exessqlab1=$mydb->executeQuery();
	if ($mydb->num_rows($exessqlab1)>0){
		while($result = $mydb->Fetch_array($exessqlab1)){
			$stater=$result['DEPARTMENT_NAME'];
			return $stater;
		}
	}
}

function bringprogramme($city=''){
	global $mydb;
	$sqlab2="SELECT * FROM `programme` WHERE `PROGRAMME_ID`=$city LIMIT 1";
	$ssqlab2=$mydb->setQuery($sqlab2);
	$exessqlab2=$mydb->executeQuery();
	if ($mydb->num_rows($exessqlab2)>0){
		while($result = $mydb->Fetch_array($exessqlab2)){
			$citer=$result['PROGRAMME_NAME'];
			return $citer;
		}
	}
}
?>