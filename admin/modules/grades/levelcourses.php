<?php require '../../../includes/initialize.php';?>
<div class="container">
<div class="well">

			    <!-- <form action="controller.php?action=delsy&studentId=<?php //echo $_GET['studentId']; ?>" Method="POST">  					 -->
				<table class="table table-hover">
					<caption><h3 align="left">Level Courses </h3></caption>
				  <thead>
				  	<tr>
				  		<th> <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> -->Course Code</th>
				  		<th>Course</th>
				  		<th>Unit</th>
				  		<th>Level</th>
				  		<th>Semester</th>
				  		<th>Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$sem=$_GET['sem'];
				  		$levelid=$_GET['levelid'];
				  		$deptid=$_GET['deptid'];
				  		$mydb->setQuery("SELECT * FROM  `level` l, `subject` s WHERE s.`LEVEL_ID` =l.`LEVEL_ID` AND l.`LEVEL_ID`= '$levelid' AND s.`SEMESTER`='$sem'");
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $subject) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td><!--<input type="checkbox" name="selector[]" id="selector[]" value=""/>-->' . $subject->SUBJ_CODE.'</td>';
				  		echo '<td>'. $subject->SUBJ_DESCRIPTION.'</td>';
				  		echo '<td>'. $subject->UNIT.'</td>';
				  		echo '<td>'. $subject->LEVEL.'</td>';
				  		echo '<td>'. $subject->SEMESTER.'</td>';
				  		echo '<td><a href = "index.php?view=coursestud&subjectid='.$subject->SUBJ_ID.'&deptid='.$deptid.'&levelid='.$subject->LEVEL_ID.'&sem='.$subject->SEMESTER.'">view students</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
						$deptid=$_GET['deptid'];
			echo   '<div class="btn-group">
				  <a href="index.php?view=deptlevel&deptid='.$deptid.'" class="btn btn-default"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
				</div>';/*
				if (isset($schoolyr)){
					echo '<a href = "trans.php?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'" class="btn btn-default"><span class="glyphicon glyphicon-print"></span>View Transcript</a>';
				}*/
				
				 }
				?>

				</form>
	  	</div><!--End of well-->

</div><!--End of container-->