<?php require '../../../includes/initialize.php'; ?>
<div class="container">	
	<?php

  	 if (isset($_GET['levelid'])){
  	 	global $levelid;
  	 $levelid=$_GET['levelid'];
  	 $sem=$_GET['sem'];
  	 $deptid=$_GET['deptid'];
  	 $subid=$_GET['subjectid'];
  	 		$mydb->setQuery("SELECT * FROM  `level` l, `subject` s,`department` d WHERE s.`LEVEL_ID` = l.`LEVEL_ID` AND l.`LEVEL_ID`= '$levelid' AND s.`SEMESTER`='$sem' AND d.`DEPARTMENT_ID`='$deptid' AND s.`SUBJ_ID`='$subid'");
			/*$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `level` l  ,`studsubjects` ss
								WHERE s.`LEVEL_ID` = l.`LEVEL_ID` 
								AND s.`SUBJ_ID`=ss.`SUBJ_ID` 
								AND  `CLASS_ID` = ".$_GET['id']."");*/
			$cur = $mydb->loadSingleResult();		
		}
	  ?>
<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Students Grades</h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >
	   <div class="container">	
		
			  
    	<form class="form-horizontal span4" action="" method="POST">
    		<table class="table" align="center" >	 
    			
				  <tbody>				    
			     	<tr>
			     		<td><strong>Course Code:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?><br/>
			     		<strong>Description:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?><br/>
			     		<strong>Level:</strong> <?php echo (isset($cur)) ? $cur->LEVEL : 'Course' ;?><br/>
			     		<strong>Semester:</strong><?php echo (isset($cur)) ? $cur->SEMESTER : 'Semester' ;?><br/>
			     		<strong>Department:</strong><?php echo (isset($cur)) ? $cur->DEPARTMENT_NAME : 'Department' ;?></td>
			     	</td>
			     	 
			     	</tr>
		    	</tbody>
		    </table>
				</form>

</div><!--End of container-->
<div class="container">
	<?php
		check_message();
	?>
		<div class="wellss">
			<h3 align="left">List of Student</h3>
			    <form action="" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr id="table" >
				  		<tr>
				  			<th>No.</th>
				  		<th>  ID#.</th>
				  		<th>Fullname</th>
				  		<th>Sex</th>
				  		<th>CA (Tests)</th>
				  		<th>Exam</th>
				  		<th>Total</th>	
						<th>Grade Letter</th>
						<th>Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				

				  		$mydb->setQuery(" SELECT * 
										FROM  `studentsubjects` ss, `grades` g,  `tblstudent` s, `schoolyr` sy
										WHERE ss.`SUBJ_ID` = g.`SUBJ_ID` AND sy.`SYID`=g.`SYID` AND ss.`LEVEL_ID`=sy.`LEVEL_ID`
										AND g.`IDNO` = s.`IDNO` AND ss.`IDNO`=g.`IDNO` AND g.`SUBJ_ID`='$subid'");
				  		loadresult();
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  		// 		<a href="edit_studentinfo.php?id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td>' . $student->MATRICNO.'</td>';
					  		echo '<td>'. $student->LNAME. ',' .$student->FNAME.' '.$student->MNAME.'</td>';
					  		echo '<td>'. $student->SEX.'</td>';
					  		/*echo '<td>'. $student->AGE.'</td>';
					  		echo '<td>'. $student->BDAY.'</td>';
					  		echo '<td>'. $student->STATUS.'</td>';*/
					  		echo '<td>'. $student->CONTINOUS_ASSESSMENT.'</td>';
					  		echo '<td>'. $student->EXAMINATION.'</td>';
					  		
				  		echo '<td>'. $student->TOTAL.'</td>';  
						echo '<td>'. $student->GRADE_LETTER.'</td>';  
						echo '<td><a href="index.php?view=add&studid='.$student->IDNO.'&deptid='.$_GET['deptid'].'&levelid='.$_GET['levelid'].'&sem='.$_GET['sem'].'&subjectid='.$_GET['subjectid'].'&gradeid='.$student->GRADE_ID.'&studsubid='.$student->STUDSUBJ_ID.'" class="btn btn-success">Add Grade</a>&nbsp;&nbsp;<a href="index.php?view=edit&studid='.$student->IDNO.'&gradeid='.$student->GRADE_ID.'&studsubid='.$student->STUDSUBJ_ID.'" class="btn btn-warning">Edit Grade</a>
						</td>';
					  		//echo '<td>'. $student->FOURTH.'</td>';
					  		//echo '<td>'. $student->REMARKS.'</td>';  
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>

 
				  </tbody>
				 
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
			echo   '<div class="btn-group">
				  <a href="index.php?view=levelcourses&deptid='.$deptid.'&levelid='.$levelid.'&sem='.$sem.'" class="btn btn-default"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
				</div>';/*
				if (isset($schoolyr)){
					echo '<a href = "trans.php?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'" class="btn btn-default"><span class="glyphicon glyphicon-print"></span>View Transcript</a>';
				}*/
				
				 }
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
</div>
</div>
</div>
</div>