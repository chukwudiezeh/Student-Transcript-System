
<?php require_once "includes/initialize.php";


if(isset($_POST['confirm'])){
	$transcript_num=$_POST['transnum'];
	$sqli="SELECT * FROM `transapplydetails` WHERE TRANS_NUMBER='$transcript_num'";
	$setta=$mydb->setQuery($sqli);
	if($exesetta=$mydb->executeQuery()){
		$county=$mydb->num_rows($exesetta);
		if($county==1){
			$sqlb="UPDATE `transapplydetails` SET STATUS='Payment Confirmed' WHERE TRANS_NUMBER='$transcript_num'";
			$setb=$mydb->setQuery($sqlb);
			if($exesqlb=$mydb->executeQuery()){
				$message="<div class='alert alert-success'>Your Payment has been confirmed<br>Your Transcript will be sent to your recipient School within 24hrs.</div>";
			}
		}elseif ($county==0) {
			$message="<div class='alert alert-danger'>Invalid Transcript Number.<br>you have not completed your application</div>";
		}else{
			$message="<div class='alert alert-danger'>contact CITM</div>";
			header("location: logout.php");
		}
	}
}
?>
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
var a=document.forms["check"]["transnum"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Transcript Number");
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
        <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		  </ul>
       
      </div><!-- /.container -->
    </div>
<div class="container" >
<div id="header"> <h2 style="margin-top:0px; margin-left:110px; font-size:36px; color:#FFFFFF;"></h2></div>

<div id="users" class="users" style="margin:50px; border: 1px solid #E2E2E6;">
<div style=" margin-bottom:10px;"></div>
	<div class="user_add_data" style=" padding:30px 30px 30px 30px;">
		<?php 
		if(isset($message)){
			echo $message;
		}
		?>
	<form method="POST" id="check" class="form-horizontal col-md-8" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
		
		<fieldset>
      <legend>You have successfully completed your transcript application.<br>Enter the Transcript Number to confirm your payment.</legend>
		
		
		<div class="form-group">
			    <label for="email" class="col-md-4">Transcript number:</label>
			    <div class="col-md-8">
			    	<input type="text" class="form-control" id="transnum" name="transnum" placeholder="Transcript number">
			    </div>
			  </div>

			  
		
		<div class="form-group">
        <div class="rows">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="save"></label>

            <div class="col-md-4">
              <button id="save_voter" class="btn btn-primary" name="confirm" type="submit"><i class="icon-save icon-large"></i>Confirm</button>
            </div>
          </div>
		
		
		</fieldset>
		
		
	</form>
	</div>
</div>
</div>
</html>