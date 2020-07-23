<?php
require_once 'includes/initialize.php';
//$regno=$_POST['regno'];

if (isset($_POST['save'])) {
    //form has been submitted
    
    $idno = trim($_POST['matric']);
    
   // $h_upass = $upass;
    //check if the idno is equal to nothing or null then it will show message box
    if ($idno == '') {
?>    <script type="text/javascript">
                alert("you must enter something");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        //$user = new User();
		//make use of the static function, and we passed to parameters
		//$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
    	$stud = new Student();
		$res= $stud::Authenticatestudent($idno);
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "transapplydetails.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("matric number Not Registered! Contact CITM.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $idno = "";
  
    
}

?>

/*Create query
	$qry="SELECT * FROM tblstudent WHERE Regno='$regno'";
	$result=mysqli_query($conn,$qry);
	
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Got result Successful
            header("location: app.php?id=$regno");
		}else {
			//Did not get result
			echo 'Wrong Confirmation Code';
			//exit();
		}
	}else {
		die("Query failed");
	}
?>*/