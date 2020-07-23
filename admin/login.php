
<?php require_once("../includes/initialize.php");?>
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
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(254, 205, 11);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(254, 205, 11);
  }
</style>
</head>
<body>
	<?php include'banner.php';?>
    <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Student Transcript Processing System</a>
        </div>

       
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    </div>
<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
//include("banner.php") ?>

<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Enter your Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Invalid Username or Password! Check your entry.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>

<div class="container">
		<?php include("sidebar.php") ?>
	<!-- 	<div class="col-xs-12 col-sm-9">
			<div class="rows">
				<div class="well">
					<fieldset>
						<legend><h4 class="text-center">VISION</h4></legend>
							<p>The Kabankalan Catholic College is an educative and evangelizing community, 
							fostering the values of love, life, justice, and care for creation, 
							an agent of societal transformation and builder of God’s kingdom.</p>
					</fieldset>	
					<fieldset>
						<legend><h4 class="text-center">MISSION</h4></legend>
							<p>The KCC exists to provide quality education and holistic formation to the youth of the Diocese,
							 having a preferential option for the poor, in a Christ-centered environment that cultivates academic
							  excellence and continuous learning.</p>
					</fieldset>	

					
				</div>
			</div>
		</div> -->
		<!--/span--> 
    <hr>
		<footer>
    <p align="center">&copy; 2018&nbsp;&nbsp;<a href="" style="text-decoration: none;">Developed by Ezeh Chukwudi, Akintola Stephen, Jinadu Sanmi</a></p>  
    </footer>
		</div>
	<!--/row-->
	
	
