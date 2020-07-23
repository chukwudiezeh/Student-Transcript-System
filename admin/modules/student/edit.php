<?php 
require '../../../includes/initialize.php';
require 'fetcher.php';

				$student = new Student();
				$cur = $student->single_student($_GET['id']);
			?>
			<head>
				<script type="text/javascript" src="../../../jquery/jquery-1.8.3.min.js"></script>
				<script type="text/javascript">
$(document).ready(function(){
    $('#school').on('change',function(){
        var schoolID = $(this).val();
        if(schoolID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'SCHOOL_ID='+schoolID,
                success:function(html){
                    $('#department').html(html);
                    $('#programme').html('<option value="">Select department first</option>'); 
                }
            }); 
        }else{
            $('#department').html('<option value="">Select school first</option>');
            $('#programme').html('<option value="">Select department first</option>'); 
        }
    }); 
    
    $('#department').on('change',function(){
        var departmentID = $(this).val();
        if(departmentID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'DEPARTMENT_ID='+departmentID,
                success:function(html){
                    $('#programme').html(html);
                }
            }); 
        }else{
            $('#programme').html('<option value="">Select department first</option>'); 
        }
    });
});
  </script>
			</head>
		        <form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->IDNO; ?>" method="POST">

					<fieldset>
						<legend>New Student</legend>
															

						<div class="form-group" id="idno">
			            <div class="col-md-4">
			              <label class="col-md-4 control-label" for=
			              "idno">ID Number*</label>

			              <div class="col-md-8">
			                 <input class="form-control input-sm" id="idno" name="idno" placeholder="ID Number" type="text" value="<?php echo $cur->IDNO; ?>" readonly>
			              </div>

			            </div>
			            <div class="col-md-4">
          <label class="col-md-4 control-label" for="matricno">Matric No.<span style="color: red;"> *</span></label>

          <div class="col-md-8">
            <input type="text" name="matricno" class="form-control input-sm" placeholder="Matriculation Number" value="<?php echo $cur->MATRICNO;?>" readonly>
          </div>
        </div>

			          </div>
			        
			         <div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "lName">LastName:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="lName" name="lName" type=
			                  "text" placeholder="Last Name" value="<?php echo $cur->LNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "fName">Firstname:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="fName" name="fName" type=
			                  "text" placeholder="First Name" value="<?php echo $cur->FNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "mName">Middlename:*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="mName" name="mName" type=
			                  "text" placeholder="Middle Name" value="<?php echo $cur->MNAME; ?>">
			                </div>
			              </div>
			            </div>
			          </div>
						
						<div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "gender">Gender </label>

			                <div class="col-md-8">
				                <select class="form-control input-sm" name="gender" id="gender">
				                	<option value="<?php echo $cur->SEX; ?>"><?php echo $cur->SEX; ?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "bday">Birth Date</label>
			    
							<div class="col-md-8">
			                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
			                    <input class="form-control" size="11" type="text" value="<?php echo $cur->BDAY; ?>" readonly name="bday" id="bday">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			                </div>
			              </div>
						</div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "bplace">Birth place</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="bplace" name="bplace" type=
			                  "text" placeholder="Birth Place" value="<?php echo $cur->BPLACE; ?>">
			                </div>
			              </div>
			            </div>
			          </div>
												 
			          	<div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "status">Marital Status </label>

			                <div class="col-md-8">
				                <select class="form-control input-sm" name="status" id="status">
				                	<option value="<?php echo $cur->STATUS; ?>"><?php echo $cur->STATUS; ?></option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option><option value="Engaged">Engaged</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "age">Age</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="age" value="<?php echo $cur->AGE; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "nationality">Nationality</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="nationality" name="nationality" type=
			                  "text" placeholder="Nationality" value="<?php echo $cur->NATIONALITY; ?>">
			                </div>
			              </div>
			            </div>
			          </div>
							
						<div class="form-group">
			            <div class="rows">
			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for="religion">Religion </label>

			                <div class="col-md-8">
				                 <input class="form-control input-sm" id="religion" name="religion" type=
			                  "text" placeholder="Religion" value="<?php echo $cur->RELIGION; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "contact">Contact </label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="contact" name="contact" type="text" placeholder="Contact Number" value="<?php echo $cur->CONTACT_NO; ?>">
			                </div>
			              </div>
			               <div class="col-md-4">
			                <label class="col-md-4 control-label" for=
			                "email">Email*</label>

			                <div class="col-md-8">
			                  <input class="form-control input-sm" id="email" name="email" type=
			                  "email" placeholder="Email address" value="<?php echo $cur->EMAIL; ?>">
			                </div>
			              </div>
			          </div>
			          </div>

			          	<div class="form-group">
			            <div class="rows">
			              <div class="col-md-8">
			                <label class="col-sm-2 control-label" for=
			                "home">Home   </label>

			                <div class="col-md-10">
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $cur->HOME_ADD; ?>">
			                </div>
			              </div>
			              	<div class="col-md-4">
            <label class="col-md-4 control-label" for="state">State of Origin <span style="color:red";> *</span></label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="state" name="state">
                <option value="<?php echo $cur->STATE;?>"><?php echo $cur->STATE;?></option>
                <option value="Abia">Abia</option><option value="Adamawa">Adamawa</option><option value="Akwa-Ibom">Akwa-Ibom</option><option value="Anambra">Anambra</option><option value="Bauchi">Bauchi</option><option value="Bayelsa">Bayelsa</option><option value="Benue">Benue</option><option value="Borno">Borno</option><option value="Cross River">Cross River</option><option value="Delta">Delta</option><option value="Ebonyi">Ebonyi</option><option value="Edo">Edo</option><option value="Ekiti">Ekiti</option><option value="Enugu">Enugu</option><option value="Gombe">Gombe</option><option value="Imo">Imo</option><option value="Jigawa">Jigawa</option><option value="Kaduna">Kaduna</option><option value="Kano">Kano</option><option value="Katsina">Katsina</option><option value="Kebbi">Kebbi</option><option value="Kogi">Kogi</option><option value="Kwara">Kwara</option><option value="Lagos">Lagos</option><option value="Nassarawa">Nassarawa</option><option value="Niger">Niger</option><option value="Ogun">Ogun</option><option value="Ondo">Ondo</option><option value="Osun">Osun</option><option value="Oyo">Oyo</option><option value="Plateau">Plateau</option><option value="Rivers">Rivers</option><option value="Sokoto">Sokoto</option><option value="Taraba">Taraba</option><option value="Yobe">Yobe</option><option value="Zamfara">Zamfara</option>
              </select>
            </div>
          </div>
			              
			            </div>
			          </div>
			          <div class="form-group">
			          	<div class="rows">
			          		<div class="col-md-4">
			            <label class="col-md-4 control-label" for="school">School</label>

			            <div class="col-md-8">
			              <select class="form-control input-sm" id="school" name="school">
			              	<option value="<?php echo $cur->SCHOOL;?>"><?php echo bringschool($cur->SCHOOL);?></option>
			              	<?php
                $mydb=new Database;
                $sqlselect="SELECT * FROM `school`";
                $setselect= $mydb->setQuery($sqlselect);
                $queryselectschool=$mydb->executeQuery();
                $rowcount=$mydb->num_rows($queryselectschool);
                  if($rowcount>0){
                    
                  while($fetchschool= $mydb->fetch_array($queryselectschool)){
                    echo '<option value="'.$fetchschool['SCHOOL_ID'].'">'.$fetchschool['SCHOOL_NAME'].'</option>';
                  }
                      
                  }else{
                    echo '<option>no School available</option>';
                  }

                ?>
			             </select>
			            </div>
			          </div>	
			           <div class="col-md-4">
				            <label class="col-md-4 control-label" for="department">Department</label>

				            <div class="col-md-8">
				            	<select class="form-control input-sm" id="department" name="department">
				            		<option value="<?php echo $cur->DEPARTMENT;?>"><?php echo bringdepartment($cur->DEPARTMENT);?></option>

				            	</select>
				            </div>
				          </div>
				          <div class="col-md-4">
				            <label class="col-md-4 control-label" for="programme">Programme</label>

				            <div class="col-md-8">
				            	<select class="form-control input-sm" id="programme" name="programme">
				            		<option value="<?php echo $cur->PROGRAMME;?>"><?php echo bringprogramme($cur->PROGRAMME);?></option>
				            		
				            	</select>
				            </div>
				          </div>
			          	</div>
			          </div>
			            
    								
				</fieldset>	
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_GET['id']);
				?>
				<fieldset>
				<legend>Secondary Details</legend>
				<div class="form-group">
		 
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for="guardian_name">Parent/Guardian Name</label>

		                <div class="col-md-8">
			                 <input class="form-control input-sm" id="guardian_name" name="guardian_name" type="text" placeholder="Guardian" value="<?php echo $det->GUARDIAN_NAME; ?>">
		                </div>
		              </div>
		          </div>
		          <div class="form-group"> 
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for="guardian_address">Parent/Guardian Address</label>

		                <div class="col-md-8">
		                  <input class="form-control input-sm" id="guardian_address" name="guardian_address" type="text" placeholder="Guardian Address" value="<?php echo $det->GUARDIAN_ADDRESS; ?>">
		                </div>
		              </div>
		          </div>
		          <div class="form-group">
		              <div class="col-md-6">
		                <label class="col-md-4 control-label" for="guardian_phone">Parent/Guardian Phone</label>

		                <div class="col-md-8">
		                  <input class="form-control input-sm" id="guardian_phone" name="guardian_phone" type="text" placeholder="Guardian Phone" value="<?php echo $det->GUARDIAN_PHONE; ?>">
		                </div>
		              </div>
		              
		  
		          </div>
		          
				</fieldset>	
				<div class="form-group">
					<div class="rows">
						<div class="col-md-6">
							<div class="col-md-6"></div>
						</div>

						 <?php
							if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
		              <div class="col-md-6" align="right">
		               <button class="btn btn-primary" name="submit" type="submit" >Save</button>

		               </div>';
		           } ?>
					</div>
				</div>
		             
		              
		          </div>
		          </div>
					
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			
