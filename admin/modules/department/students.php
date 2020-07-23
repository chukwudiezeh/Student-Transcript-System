<?php
		check_message();
			
			$dept = new Dept();
			$cur = $dept->listOfDept();
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">List of Students in this Department</h3></caption>
				  <thead>
				  	<tr>
				  		<th>No:</th>
				  		<th>Student Nam</th>
				  		<th>Department Description</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$dept = new Dept();
						$cur = $dept->listOfDept();
						foreach ($cur as $Department) {
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$Department->DEPARTMENT_ID. '"/>
				  				<a href="index.php?view=edit&id='.$Department->DEPARTMENT_ID.'">' . $Department->DEPARTMENT_NAME.'</a></td>';
				  		echo '<td colspan="">'. $Department->DEPARTMENT_DESC.'</td>';
				  		echo '<td><a href = "index.php?view=students&dept='.$Department->DEPARTMENT_NAME.'&did='.$Department->DEPARTMENT_ID.'">View students</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td></tr>
				  </tfoot>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
			?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
