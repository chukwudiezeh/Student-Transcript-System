<?php require '../../../includes/initialize.php';
		require '../../theme/frontendTemplate.php';
?>
<div class="container">
<div class="well">

			    <form action="" Method="POST">  					
				<table class="table table-hover">
					<caption><h3 align="left">Transcript Requests</h3></caption>
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th>Matric no.</th>
				  		<th>Fullname</th>
				  		<th>Sex</th>
				  		<th>Email</th>
				  		<th>Porgramme</th>
				  		<th>Phone</th>
				  		<th>Transcript Prog.</th>
				  		<th>Recipient Email</th>
				  		<th>Transcript Type</th>
				  		<th>Transcript No.</th>
				  		<th>Apply Fee</th>
				  		<th>Status</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		
				  		$mydb->setQuery("SELECT * FROM `transapplydetails`");
				  		$tur=$mydb->loadResultList();
				  		foreach ($tur as $tareq) {
				  			echo '<tr>';
				  			echo '<td></td>';
				  			echo '<td>'.$tareq->MATRICNO.'</td>';
				  			echo '<td>'.$tareq->LNAME.', '.$tareq->FNAME.' '.$tareq->MNAME.'</td>';
				  			echo '<td>'.$tareq->SEX.'</td>';
				  			echo '<td'.$tareq->EMAIL.'</td';
				  			echo '<td>'.$tareq->PROGRAMME.'</td>';
				  			echo '<td>'.$tareq->CONTACT_NO.'</td>';
				  			echo '<td>'.$tareq->TRANS_PROG.'</td>';
				  			echo '<td>'.$tareq->RECIPIENT_EMAIL.'</td>';
				  			echo '<td>'.$tareq->TRANS_TYPE.'</td>';
				  			echo '<td>'.$tareq->TRANS_NUMBER.'</td>';
				  			echo '<td>'.$tareq->APPLY_FEE.'</td>';
				  			echo '<td>'.$tareq->STATUS.'</td>';

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