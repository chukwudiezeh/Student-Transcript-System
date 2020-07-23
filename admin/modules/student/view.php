<?php require '../../../includes/initialize.php';?>
<div class="container">
<div class="well">

			    <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Student Enrollment Records</h3></caption>
				  <thead>
				  	<tr>
				  		<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Grade and Section</th>
				  		<th>Semester</th>
				  		<th>Schoolyr</th>
				  		<th>Status</th>
				  		<th>Date Enrolled</th>
				  		<th>Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT  l.`LEVEL` ,LEVEL_DESCRIPTION,  `SYID` ,  `AY` ,  l.`SEMESTER` ,s.`SEMESTER`, s.`LEVEL_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `level` l
										WHERE l.`SEMESTER`=s.`SEMESTER` AND  s.`LEVEL_ID` = l.`LEVEL_ID` AND s.`IDNO`=".$_GET['studentId']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>
				  				<a href="index.php?view=editenrollment&studentId='.$_GET['studentId'].'&id='.$schoolyr->SYID.'">' . $schoolyr->LEVEL.'</a></td>';
				  		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'&sem='.$schoolyr->SEMESTER.'">Enrolled Course</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '<div class="btn-group">
				  <a href="index.php?view=enroll&studentId='. $_GET['studentId'].'" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
				if (isset($schoolyr)){
					echo '<a href = "transgen.php?studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'&ay='.$schoolyr->AY.'" class="btn btn-default"><span class="glyphicon glyphicon-print"></span>View Transcript</a>';
				}
				echo '<a href="index.php" class="btn btn-default" align="right"><span class="glyphicon glyphicon-step-backward"></span>Back</a>';
				 }
				?>

				</form>
	  	</div><!--End of well-->

</div><!--End of container-->