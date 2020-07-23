<div class="container">
<div class="well">
	<h3 align="left">List of Levels</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr>
				  		<!--  <th>No.</th> -->
				  		<th >
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Level</th>
				  		
				  	<!--	 <th>Major</th>-->
				  		<th>Semester</th>
				  		<!--  <th width="">Level</th> -->
				  		<th align="center">Option</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
	  			  		$mydb->setQuery("SELECT * FROM  `level` ORDER BY `LEVEL_ID`");
				  		
						  	loadresult();
					  	
					function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						//echo '<td width="5%" align="center"></td>';
				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->LEVEL_ID. '"/>
				  				' . $result->LEVEL.'</a></td>';
				  	
				  		//echo '<td>'. $result->COURSE_MAJOR.'</td>';
				  		echo '<td>'. $result->SEMESTER.'</td>';
				  		//echo '<td align="left">'. $result->COURSE_LEVEL.'</td>';
				  		echo '<td><a href="index.php?view=edit&id='.$result->LEVEL_ID.'">Edit</td>';
				  		echo '</tr>';
				  		} 
				  	}	
				  	?>
				  </tbody>
				
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
				  <a href="index.php?view=import" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-up"></span>  Import</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->