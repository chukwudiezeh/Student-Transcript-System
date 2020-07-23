<div class="well">

			    <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Academic Records</h3></caption>
				  <thead>
				  	<tr>
				  		<th>Level</th>
				  	<!--	<th>Semester</th>-->
				  		<th>Academic year</th>
				  		<th>Status</th>
				  		<th>Date Enrolled</th>
				  		<th>Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT *
										FROM  `schoolyr` s,  `level` l
										WHERE s.`LEVEL_ID` = l.`LEVEL_ID` AND IDNO=".$_SESSION['IDNO']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td>' . $schoolyr->LEVEL.'</td>';
				  //		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		echo '<td>'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->LEVEL_ID.'&sy='.$schoolyr->SYID.'">view result</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td></tr>
				  </tfoot>	
				</table>
			
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->