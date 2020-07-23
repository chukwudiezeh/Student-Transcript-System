<?php require 'includes/initialize.php';
if (isset($_POST['save'])) {
    if($_POST['transtype'] == "Local"){
        $APPLY_FEE=6000;
        }else{
        $APPLY_FEE=15000;
    }
    $TRANS_NUM=$_POST['transnum'];
	$IDNO = $_POST['idno'];
	$MATRICNO = $_POST['matric'];
	$LNAME = $_POST['lname'];
	$FNAME = $_POST['fname']; 
	$MNAME = $_POST['mname'];
	$SEX = $_POST['gender'];
	$EMAIL = $_POST['email'];
	$PROGRAMME=$_POST['programme'];
	$CONTACT_NO=$_POST['contact'];
	$TRANS_PROG=$_POST['transprog'];
	$RECIPIENT_EMAIL=$_POST['remail'];
	$TRANS_TYPE=$_POST['transtype'];
    $APPLY_FEE;
    $STATUS="Not Confirmed";


    $sl="SELECT * FROM `transapplydetails` WHERE TRANS_NUMBER='$TRANS_NUM'";
    $qr=$mydb->setQuery($sl);
    if($exeqr=$mydb->executeQuery()){
    $counter=$mydb->num_rows($exeqr);


    if($counter<1){
        $sql="INSERT INTO `transapplydetails`(IDNO,MATRICNO,LNAME,FNAME,MNAME,SEX,EMAIL,PROGRAMME,CONTACT_NO,TRANS_PROG,RECIPIENT_EMAIL,TRANS_TYPE,TRANS_NUMBER,APPLY_FEE,STATUS)VALUES($IDNO,'$MATRICNO','$LNAME','$FNAME','$MNAME','$SEX','$EMAIL','$PROGRAMME','$CONTACT_NO','$TRANS_PROG','$RECIPIENT_EMAIL','$TRANS_TYPE','$TRANS_NUM',$APPLY_FEE,'$STATUS')";
        $query=$mydb->setQuery($sql);
        $exesql=$mydb->executeQuery();
        if($exesql){
            $sent='Pending';
        $mydb->setQuery("INSERT INTO `transcriptstatus`(IDNO,MATRICNO,FULLNAME,PROGRAMME,TRANSCRIPT_TYPE,RECEPIENT_EMAIL,STATUS)VALUES($IDNO,'$MATRICNO',CONCAT('$LNAME',' ','$FNAME',' ','$MNAME'),'$PROGRAMME','$TRANS_TYPE','$TRANS_NUM','$RECIPIENT_EMAIL','$sent')");
            $mydb->executeQuery();
        }
    }elseif($counter==1){
        header("location:payprocess.php?id='$TRANS_NUM'");
    }else{
        $sq="DELETE FROM `transapplydetails` WHERE `IDNO`='$IDNO'";
        $qy=$mydb->setQuery($sq);
        if($exesq=$mydb->executeQuery()){
            echo"<div class='alert alert-warning'>please apply properly on this website.</div>";
            header("location:transapply.php");
        }
    }}
}



?>
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
function formSuccess()
{
  {
  alert("Student Successfully Added");
  }
}
</script>
<style>
.mcstyle{
	font-family: 'Lucida Grande',Helvetica,Arial,Verdana,sans-serif; font-size: 0.8em; color: #535353!important;
}
</style>
</head>
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
    <div class="container">
    	<fieldset>
    		<legend>Transcript payment</legend>
            <form method="POST" id="payment" class="col-md-8" action="transaction_insert.php" enctype="multipart/form-data" onSubmit="">
    			<table class="table" border="0" cellspacing="0">
    				<tr>
    					<td>Transcript Number</td>
    					<td><?php echo $TRANS_NUM;?></td>
                    
    				</tr>
    				<tr>
    					<td>Matric Number</td>
    					<td><?php echo $MATRICNO;?></td>
                        <!-- <input type="hidden" name="idno" value="<?php //$IDNO;?>"> -->
                        <!-- <input type="hidden" name="matric" value="<?php //$MATRICNO;?>" id="matric"> -->
    				</tr>
    				<tr>
    					<td>Surname</td>
    					<td><?php echo $LNAME;?></td>
                        <!-- <input type="hidden" name="lname" value="<?php// $LNAME;?>" id="lname"> -->
    				</tr>
    				<tr>
    					<td>First name</td>
    					<td><?php echo $FNAME;?></td>
                        <!-- <input type="hidden" name="fname" value="<?php //$FNAME;?>" id="fname"> -->
    				</tr>
    				<tr>
    					<td>Middle name</td>
    					<td><?php echo $MNAME;?></td>
                        <!-- <input type="hidden" name="mname" value="<?php //$MNAME;?>" id="mname"> -->
    				</tr>
    				<tr>
    					<td>Sex</td>
    					<td><?php echo $SEX;?></td>
                        <!-- <input type="hidden" name="gender" value="<?php //$SEX;?>" id="Sex"> -->
    				</tr>
    				<tr>
    					<td>Email</td>
    					<td><?php echo $EMAIL;?></td>
                        <!-- <input type="hidden" name="email" value="<?php //$EMAIL;?>" id="email"> -->
    				</tr>
    				<tr>
    					<td>Programme</td>
    					<td><?php echo $PROGRAMME;?></td>
                        <!-- <input type="hidden" name="programme" value="<?php //$PROGRAMME;?>" id="programme"> -->
    				</tr>
    				<tr>
    					<td>Phone</td>
    					<td><?php echo $CONTACT_NO;?></td>
                        <!-- <input type="hidden" name="contact" value="<?php //$CONTACT_NO;?>" id="contact"> -->
    				</tr>
    				<tr>
    					<td>Recipient Email</td>
    					<td><?php echo $RECIPIENT_EMAIL;?></td>
                        <!-- <input type="hidden" name="remail" value="<?php //$RECIPIENT_EMAIL;?>" id="remail"> -->
    				</tr>
    				<tr>
    					<td>Transcript Programme</td>
                        <td><?php if($TRANS_PROG == "ND"){
                                    echo "ORDINARY NATIONAL DIPLOMA";
                        }elseif($TRANS_PROG =="HND"){
                            echo "HIGHER NATIONAL DIPLOMA";
                        }else{
                            echo "No transcript programme selected";
                        }
                        ?>
                            <!-- <input type="hidden" name="transprog" value="<?php //$TRANS_PROG;?>" id="transprog"> -->
                        </td>
    				</tr>
                    <tr>
                        <td>Transcript Type</td>
                        <td><?php echo $TRANS_TYPE;?></td>
                        <!-- <input type="hidden" name="transtype" value="<?php //$TRANS_TYPE?>" id="transtype"> -->
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Payment Information</legend>
                <table class="table" border="0" cellspacing="0">
                    <tr>
                        <td>Application Fee</td>
                        <td><?php
                            echo 'N'.$APPLY_FEE.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                        ?>
                        <!-- <input type="hidden" name="applyfee" value="<?php //$APPLY_FEE;?>" id="applyfee"></td> -->
                    </tr>
                </table>
            </fieldset>

            <div class="form-group">
        <div class="rows">
          <div class="col-md-5">
            <label class="col-md-8 control-label" for="le"></label>

            <div class="col-md-4">
              <button id="submit" class="btn btn-primary" name="submit"><i class="icon-save icon-large"></i>Submit</button>
            </div>
          </div>
          <div class="col-md-5">
              <div class="col-md-4">
                  <button id="exit" class="btn btn-warning" name="exit">Exit</button>
              </div>
          </div>
      </div>
  </div>
        </form>

        </div>
        <footer>
            
        </footer>

    </body>
    </html>
