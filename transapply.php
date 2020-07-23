
<?php require_once "includes/initialize.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Student Transcript Processing System</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<!-- Custom styles for this template -->
<link href="<?php echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">

<script type="text/javascript">
function validateForm()
{
var a=document.forms["check"]["matric"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Matric No");
  return false;
  }
}
</script>
<style type="text/css">
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
        <div class="">
        <ul class="nav navbar-nav navbar-right">
			<li class=""><a href="index.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		  </ul>
    </div>
       
      </div><!-- /.container -->
    </div>
<div class="container" >
<div id="header"> <h2 style="margin-top:0px; margin-left:110px; font-size:36px; color:#FFFFFF;"></h2></div>

<div id="users" class="users" style="margin:50px; border: 1px solid #E2E2E6;">
<div style=" margin-bottom:10px;"></div>
	<div class="user_add_data" style=" padding:30px 30px 30px 30px;">
	<form method="POST" id="check" class="form-horizontal col-md-8" action="check.php" enctype="multipart/form-data" onsubmit="return validateForm()">
		
		
		<fieldset>
      <legend>Check if you are registered Student</legend>
		
		
		<div class="form-group">
			    <label for="email" class="col-md-4">Matriculation Number:</label>
			    <div class="col-md-8">
			    	<input type="text" class="form-control" id="matric" name="matric" placeholder="Matric No">
			    </div>
			  </div>

			  
		
		<div class="form-group">
        <div class="rows">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="save"></label>

            <div class="col-md-4">
              <button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Submit</button>
            </div>
          </div>
		
		
		</fieldset>
		
		
	</form>
	</div>
</div>
</div>
</html>