<div class="container">
<div class="well">
	<h3 align="left">List of Department</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr>
				  		<!--  <th>No.</th> -->
				  		<th>No.</th>
				  		
				  	<!--	 <th>Major</th>-->
				  		<th>Department</th>
				  		<!--  <th width="">Level</th> -->
				  		<th align="center">Level</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		$dept=new Dept();
				  		$cur=$dept->listOfDept();
				  		foreach ($cur as $Department) {
				  			echo '<tr>';
				  			echo '<td>'.$Department->DEPARTMENT_ID.'</td>';
				  			echo '<td>'.$Department->DEPARTMENT_NAME.'</td>';
				  			echo '<td><a href="index.php?view=deptlevel&deptid='.$Department->DEPARTMENT_ID.'">view Levels</a></td>';
				  			echo '</tr>';
				  		}
	  			  		/*$mydb->setQuery("SELECT * 
						FROM  `level` l,  `department` d
						WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL");
				  		
						  	loadresult();
					  	
					function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						//echo '<td width="5%" align="center"></td>';
				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->COURSE_ID. '"/>
				  				<a href="index.php?view=edit&id='.$result->COURSE_ID.'">' . $result->COURSE_NAME.'</a></td>';
				  	
				  		//echo '<td>'. $result->COURSE_MAJOR.'</td>';
				  		echo '<td>'. $result->COURSE_DESC.'</td>';
				  		//echo '<td align="left">'. $result->COURSE_LEVEL.'</td>';
				  		echo '<td>'. $result->DEPARTMENT_DESC.'</td>';
				  		echo '</tr>';
				  		} 
				  	}*/	
				  	?>
				  </tbody>
				
				</table>
				<?php
				/*if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				</div>';
			}*/
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->