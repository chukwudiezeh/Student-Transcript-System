	<?php require 'includes/initialize.php';
	require 'fetcher.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Transcript Generation System</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!-- Custom styles for this template -->
<link href="css/offcanvas.css" rel="stylesheet">
<link href="css/layout-z.css" rel="stylesheet">

<script type="text/javascript">
/*function formSuccess()
{
  {
  alert("Student Successfully Added");
  }
}*/
</script>
<style>
.mcstyle{
	font-family: 'Lucida Grande',Helvetica,Arial,Verdana,sans-serif; font-size: 0.8em; color: #535353!important;
}

.navbar-inverse{
      background-color: #006600;
      border-color: #006600;
      
    }
    .navbar-inverse .navbar-brand {
  color: #ffffff;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fecd0b;
  background-color: transparent;
}

.navbar-inverse .navbar-text {
  color: #ffffff;
}

.navbar-inverse .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fecd0b;
  background-color: transparent;
}

.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #fecd0b;
}
	.form-control:focus{
		border-color: #fecd0b;
	}
</style>

</head>


<body>

	<?php include "banner.php";?>
		<div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Student Transcript Processing System </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		  </ul>
       
      </div><!-- /.container -->
    </div>



	<?php 

					$student = new Student();
					$cur = $student->single_student($_SESSION['IDNO']);
				?>
			<div class="container">	  		
	<form method="POST" id="save_user" class="form-horizontal col-md-8" action="finalapply.php" enctype="multipart/form-data" onSubmit="return formSuccess()">
			
			
			<fieldset>
	      <legend>Transcript Application Details</legend>
			
			<div class="form-group">
			   <label for="matric" class="col-md-2 control-label">Matric No</label>
				<div class="col-md-10">
				
					<input id="idno" name="idno" type="hidden" value="<?php echo $cur->IDNO;?>" />
				    <input type="text" class="form-control input-sm" id="matric" name="matric" placeholder="" readonly="readonly" value="<?php echo $cur->MATRICNO; ?>"/>
				    <input type="hidden" name="transnum" value="<?php echo $cur->MATRICNO.'_YCT'.date('Ymd').$cur->IDNO;?>" id="transnum">
				</div>
			</div>

	  		<div class="form-group">
				<label for="lname" class="col-md-2 control-label">Lastname</label>
				<div class="col-md-10">
				  	<input type="text" class="form-control input-sm" id="lname" name="lname" placeholder="" readonly="readonly" value="<?php echo $cur->LNAME?>"/>
				</div>
			</div>
				  
			<div class="form-group">
				<label for="fname" class="col-md-2 control-label">Firstname</label>
				<div class="col-md-10">
				   <input type="text" class="form-control input-sm" id="fname" name="fname" placeholder="" readonly="readonly" value="<?php echo $cur->FNAME; ?>"/>
				</div>
			</div>

				  <div class="form-group">
				    <label for="mname" class="col-md-2 control-label">Middle name</label>
				    <div class="col-md-10">
				    	<input type="text" class="form-control input-sm" id="mname" name="mname" placeholder="" readonly="readonly" value="<?php echo $cur->MNAME; ?>"/>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="gender" class="col-md-2 control-label">Sex</label>
				    <div class="col-md-10">
				    	<select class="form-control input-sm" id="gender" readonly="readonly" name="gender">
	                        <option><?php echo $cur->SEX; ?></option>                
	                        <option value="M">Male</option>
	                        <option value="F">Female</option>
	                    </select>
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="email" class="col-md-2 control-label">Email</label>
				    <div class="col-md-10">
				    	<input type="text" class="form-control input-sm" id="email" name="email" placeholder="" readonly="readonly" value="<?php echo $cur->EMAIL; ?>"/>
				    </div>
				  </div>
				  

					<div class="form-group">
				    <label for="programme" class="col-md-2 control-label">Programme</label>
				    <div class="col-md-10">
				    	<input type="text" name="programme" class="form-control input-sm" id="programme" readonly="readonly" value="<?php echo bringprogramme($cur->PROGRAMME);?>">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="contact" class="col-md-2 control-label">Phone</label>
				    <div class="col-md-10">
				    	<input type="number" name="contact" class="form-control input-sm" required="required" id="contact" value="<?php echo $cur->CONTACT_NO;?>">
				    </div>
				  </div>

				  <div class="form-group">
					<label for="transprog" class="col-md-2 control-label">Transcript Programme</label>
					<div class="col-md-10">
				    	<select class="form-control input-sm" id="transprog" required="required" name="transprog">
				    		<option value="#">Please Select...</option>
							<option value="ND">ND</option>
							<option value="HND">HND</option>
	              		</select>
				    </div>
				  </div>

				  
				 <div class="form-group">
				    <label for="recipientemail" class="col-md-2 control-label">Recipient Email</label>
				    <div class="col-md-10">
				    	<input type="text" class="form-control input-sm" id="email" required="required" name="remail" placeholder="Recipient Email">
				    </div>
				  </div>
				<div class="form-group">
				    <label for="transtype" class="col-md-2 control-label">Transcript Type</label>
				    <div class="col-md-10">
				    	<select class="form-control input-sm" id="transtype" required="required" name="transtype" >
				    		<option value="#">Please Select...</option>
				    		<option value="Local">Local</option>
				    		
				    		<option value="International">International</option>
				    		
				    	</select>
				  
				    </div>
				  </div>
			
			<div class="form-group">
	        <div class="rows">
	          <div class="col-md-4">
	            <label class="col-md-4 control-label" for="save"></label>

	            <div class="col-md-8">
	              <button id="save" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
	            </div>
	          </div>
		</div>
	            </div>
			
			
			</fieldset>
			
			
		</form>
	</div>

	</body>
	</html>