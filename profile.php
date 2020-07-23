<?php //require 'includes/initialize.php';
require 'fetcher.php';?>
<div class="container">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
			?>
			  				
				 <fieldset>
						<legend>Student Information</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID Number :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>
							<tr><td>Matriculation Number:</td><td><?php echo $cur->MATRICNO;?></td></tr>
							<td>Fullname :</td><td><?php echo $cur->LNAME .', '. $cur->FNAME.', '. $cur->MNAME; ?></td>	</tr></tr>
							<td>Gender :</td><td><?php 
								if($cur->SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td>Age :</td><td><?php echo $cur->AGE; ?></td>	</tr>
							<td>Birth Date :</td><td><?php echo $cur->BDAY; ?></td>	</tr>
							<td>Place of Birth :</td><td><?php echo $cur->BPLACE; ?></td>	</tr>
							<td>Civil Status :</td><td><?php echo $cur->STATUS; ?></td>	</tr>
							<td>NationalitY :</td><td><?php echo $cur->NATIONALITY; ?></td>	</tr>
							<td>Religion :</td><td><?php echo $cur->RELIGION; ?></td>	</tr>
							<td>Contact No. :</td><td><?php echo $cur->CONTACT_NO; ?></td>	</tr>
							<td>Email Address :</td><td><?php echo $cur->EMAIL; ?></td>	</tr>
							<td>Home Address :</td><td><?php echo $cur->HOME_ADD; ?></td>	</tr>
							<td>School :</td><td><?php echo bringschool($cur->SCHOOL);?></td></tr>
							<td>Department :</td><td><?php echo bringdepartment($cur->DEPARTMENT);?></td></tr>
							<td>Programme :</td><td><?php echo bringprogramme($cur->PROGRAMME);?></td></tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Secondary details</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<tr><td>Parent/Guardian Name:</td><td><?php echo $det->GUARDIAN_NAME; ?></td></tr>
							<tr><td>Parent/Guardian Address :</td><td><?php echo $det->GUARDIAN_ADDRESS; ?></td></tr>
							<tr><td>Parent/Guardian Phone:</td><td><?php echo $det->GUARDIAN_PHONE; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	
				
				 <!--<fieldset>
						<legend>Requirements</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>NSO :</td><td width="80%"><?php //echo $res->NSO; ?></td></tr>
							<tr><td>Baptismal :</td><td><?php //echo $res->BAPTISMAL; ?></td></tr>
							<tr><td>Entrance test Result :</td><td><?php// echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Mirriage Contract :</td><td><?php //echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td>Certificate Of Transfer :</td><td><?php// echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>-->					
			
	  	</div><!--End of well-->

</div><!--End of container-->