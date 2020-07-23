<?php require '../../../includes/initialize.php';

if(!empty($_POST["SCHOOL_ID"])){
    //Fetch all state data
    $mydb=new Database;
    $qry="SELECT * FROM `department` WHERE SCHOOL_ID = ".$_POST['SCHOOL_ID'];
    $setqry=$mydb->setQuery($qry);
    $exeqry=$mydb->executeQuery();
    $rowCount=$mydb->num_rows($exeqry);

    //" AND status = 1 ORDER BY state_name ASC")
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select department</option>';
        while($fetchdept=$mydb->fetch_array($exeqry)){ 
            echo '<option value="'.$fetchdept['DEPARTMENT_ID'].'">'.$fetchdept['DEPARTMENT_NAME'].'</option>';
        }
    }else{
        echo '<option value="">Department not available</option>';
    }
}elseif(!empty($_POST["DEPARTMENT_ID"])){
    //Fetch all city data
    $qrys="SELECT * FROM `programme` WHERE DEPARTMENT_ID = ".$_POST['DEPARTMENT_ID'];

    $setqrys=$mydb->setQuery($qrys);
    $exeqrys=$mydb->executeQuery();
    $rowCounts=$mydb->num_rows($exeqrys);

    //" AND status = 1 ORDER BY city_name ASC")
    
    //City option list
    if($rowCounts > 0){
        echo '<option value="">Select programme</option>';
        while($fetchprog = $mydb->fetch_array($exeqrys)){ 
            echo '<option value="'.$fetchprog['PROGRAMME_ID'].'">'.$fetchprog['PROGRAMME_NAME'].'</option>';
        }
    }else{
        echo '<option value="">programme not available</option>';
    }
}
?>