<?php require '../../../includes/initialize.php';?>
<div class="container">
<div class="well">  					
				<table class="table table-hover">
					<caption><h3 align="left">Department Levels</h3></caption>
				  <thead>
				  	<tr>
				  		<th>Level</th>
				  		<th>Semester</th>
				  		<!-- <th>Schoolyr</th> -->
				  		<th>Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  	$deptid=$_GET['deptid'];
				  	$mydb->setQuery("SELECT * FROM `level`");
				  		//$mydb->setQuery("SELECT l.`LEVEL` , s.`AY` ,  s.`SEMESTER` , l.`LEVEL_ID`  FROM  `schoolyr` s,  `level` l WHERE s.`LEVEL_ID`=l.`LEVEL_ID`");
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $deptlevel) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td>'.$deptlevel->LEVEL.'</td>';
				  		echo '<td>'. $deptlevel->SEMESTER.'</td>';
				  		//echo '<td>'. $deptlevel->AY.'</td>';
				  		echo '<td><a href = "index.php?view=levelcourses&deptid='.$deptid.'&levelid='.$deptlevel->LEVEL_ID.'&sem='.$deptlevel->SEMESTER.'">view courses</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '<div class="btn-group">
				  <a href="index.php" class="btn btn-default"><span class="glyphicon glyphicon-step-backward"></span> Back</a>
				</div>';/*
				if (isset($schoolyr)){
					echo '<a href = "trans.php?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'" class="btn btn-default"><span class="glyphicon glyphicon-print"></span>View Transcript</a>';
				}*/
				
				 }
				?>

				</form>
	  	</div><!--End of well-->

</div><!--End of container-->