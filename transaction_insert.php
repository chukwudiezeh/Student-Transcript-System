<?php 
require 'includes/initialize.php';
if(isset($_POST['submit'])){
    header("location:payprocess.php");}

   /* $TRANS_NUM=$_POST['transnum'];
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
    $APPLY_FEE=$_POST['applyfee'];
    $STATUS="Not Confirmed";


    $my=new Database;
    $sl="SELECT * FROM `transapplydetails` WHERE $TRANS_NUM='$TRANS_NUM' LIMIT 1";
    $qr=$my->setQuery($sl);
    $exeqr=$my->executeQuery();
    $counter=$my->num_rows($exeqr);

    if($counter=0){
        $sql="INSERT INTO `transapplydetails`(IDNO,MATRICNO,LNAME,FNAME,MNAME,SEX,EMAIL,PROGRAMME,CONTACT_NO,TRANS_PROG,RECIPIENT_EMAIL,TRANS_TYPE,TRANS_NUMBER,APPLY_FEE,STATUS)VALUES($IDNO,'$MATRICNO','$LNAME','$FNAME','$MNAME','$SEX','$EMAIL','$PROGRAMME','$CONTACT_NO','$TRANS_PROG','$RECIPIENT_EMAIL','$TRANS_TYPE','$TRANS_NUM',$APPLY_FEE,'$STATUS')";
        $query=$my->setQuery($sql);
        $exesql=$my->executeQuery();

        if($exesql==true){
            header("location: payprocess.php?id=$TRANS_NUM");
        }else{
            echo "<div class='alert alert-danger'>you can not mke payments now...try again</div>";
        }
    }else{
        header("location:payprocess.php?id=$TRANS_NUM");
    }
    
    }*/
?>