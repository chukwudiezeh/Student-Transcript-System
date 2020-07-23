<?php require_once ("../../../includes/initialize.php"); 
      require 'fetcher.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

   

    <title>Student Transcript</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="">
<style type="text/css">
body { 
background-image: url(../../../img/yabatrans.jpg); 
background-repeat: repeat; 
background-size: 90px;
height: 100%;
width: 100%;
background-position: top; 
margin-top: 0cm;
font-size:10px;

} 
.top {
    border-top:thin solid;
    border-color:black;
}

.bottom {
    border-bottom:thin solid;
    border-color:black;
}

.left {
    border-left:thin solid;
    border-color:black;
}

.right {
    border-right:thin solid;
    border-color:black;
}
.header-row { position:fixed; top:0; left:0; }
.table {padding-top:5px; }

.out{
  border: 1px solid green;
}
</style>
    <!-- Custom styles for this template -->
    <link href="non-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
 
 <!--<script>
function sum() {

           

            var txtFirstNumberValue = document.getElementById('first').value;
			var iframe = document.getElementById('myFrame');
			var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
            var txtSecondNumberValue = innerDoc.getElementById('second').value;
            var result = (parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue)).toFixed(2);
            
       	 if (!isNaN(result)) {
               		 document.getElementById('ave').value = (result/2).toFixed(2);
               
   

		  }

        }


</script>-->
 
  </head>

  <body>
<?php
  $mydb->setQuery("SELECT * 
  FROM tblstudent WHERE IDNO=".$_GET['studentId']);
  $cur = $mydb->loadResultList();
  foreach($cur as $stud){


  ?>
    <div class="container">

      <div class="page-header">
        <div class="row">
          <img src="../../../img/logo3.png">
        </div>
     <hr>
      <div class="row">
        <div class="col-xs-6"><h5 style="color: #006600;">INSTITUTION: <strong>YABA COLLEGE OF TECHNOLOGY<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YABA, LAGOS.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P.M.B 2011</strong></h5></div>
        <div class="col-xs-6" align="right"></div>
      </div>
      <hr>
        <div class="row">
        <div class="col-xs-6"><h5 style="color: #006600;">NAME:<strong><?php echo $stud->LNAME . ' '.$stud->FNAME.' '.$stud->MNAME; ?></strong></h5></div>
        <div class="col-xs-6" align="right"><h5 style="color: #006600;">PROGRAMME TYPE: <strong>ORDINARY NATIONAL DIPLOMA</strong></h5></div>
<!--         <div class="col-xs-4">One third</div> -->
      </div>
       <div class="row">
        <div class="col-xs-6"><h5 style="color: #006600;">MATRIC NO.: <strong><?php echo $stud->MATRICNO; ?></strong></h5></div>
        <div class="col-xs-6" align="right"><h5 style="color: #006600;">SCHOOL: <strong><?php echo strtoupper(bringschool($stud->SCHOOL)); ?></strong></h5></div>
<!--         <div class="col-xs-4">One third</div> -->
      </div>
       <div class="row">
        <div class="col-xs-6"><h5 style="color: #006600;">SEX: <strong><?php echo $stud->SEX;  ?></strong></h5></div>
        <div class="col-xs-6" align="right"><h5 style="color: #006600;">DEPARTMENT: <strong><?php echo strtoupper(bringdepartment($stud->DEPARTMENT));?></strong></h5></div>
<!--         <div class="col-xs-4">One third</div> -->
      </div>
      <div class="row">
        <div class="col-xs-6"><h5 style="color: #006600;">EMAIL: <strong><?php echo $stud->EMAIL;?></strong></h5></div>
        <div class="col-xs-6" align="right"><h5 style="color: #006600;">PROGRAMME: <strong><?php echo strtoupper(bringprogramme($stud->PROGRAMME));?></strong></h5></div>
<!--         <div class="col-xs-4">One third</div> -->
      </div>
      <div class="row">
        <div class="col-xs-6" align="Left"><h5 style="color: #006600;">GRADUATION YEAR: <strong>2018</strong></h5></div>
        <div class="col-xs-6" align="right"><h5 style="color: #006600;"><strong></strong></h5></div>

      </div>
    

      <?php
    }
    ?>
     </div>
     
      <!-- <div class="row">
        <div class="col-xs-6"><h5></h5></div>
        <div class="col-xs-6" align="right"><h5 align="Right">GRADE SYSTEM</h5></div>
        <div class="col-xs-4">One third</div>
      </div>  -->
      <div class="row">
     
<!--         <div class="col-xs-4">One third</div> -->
      </div>

      
<table class="container">
  <tr class="row">
    <td align="left" id="table" class="col-md-6" style="margin-bottom: 10px;">
      <h6 style="color:#006600;"><strong>ND I (FIRST SEMESTER) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-2017</strong></h6>
      <table  style="width:100%;"  border="0">
        <thead>
        <tr style="color: #006600;">
          <th align="left" width="50" class=" bottom"><h6><strong>Course Code</strong></h6></th>
          <th align="left" width="150" class="bottom"><h6><strong>Course Title</strong></h6></th>
          <th align="left" width="30" class=" bottom"><h6><strong>Unit</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>CA (Tests)</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Exam</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Total</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Grade Letter</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Points</strong></h6></th>
        </tr>
      </thead>
      <tbody>
         
      
      <?php
      $studer=$_GET['studentId'];
      /*$mydb->setQuery("SELECT * FROM `subject`,`studentsubjects`ss,`grade`g WHERE g.`IDNO`='$studer' AND g.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`SEMESTER`='First' AND ss.`LEVEL_ID`=1");*/
        $mydb->setQuery("SELECT * FROM `subject`s,`studentsubjects`ss,`grades`g WHERE g.`IDNO`='$studer' AND ss.`LEVEL_ID`=1 AND ss.`SEMESTER`='First' AND ss.`SUBJ_ID`=g.`SUBJ_ID`AND s.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`IDNO`=g.`IDNO`");
        $pointadd1=0;
        $unitadd1=0;
        $curr=$mydb->loadResultList();
        foreach ($curr as $nd1f) {
          ?>
          <tr style="color: #006600;">
            <td width="15%"><h6><strong><?php echo $nd1f->SUBJ_CODE;?></strong></h6></td>
            <td width="30%"><h6><strong><?php echo $nd1f->SUBJ_DESCRIPTION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->UNIT;
                $unitadd1+=$nd1f->UNIT;
            ?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->CONTINOUS_ASSESSMENT;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->EXAMINATION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->TOTAL;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->GRADE_LETTER;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1f->EQUIVALENT;
              $pointadd1+=$nd1f->EQUIVALENT;

            ?></strong></h6></td>
          </tr>
        </tbody>
        <?php
        }

          ?>
          <tfoot>
            <tr style="color: #006600;">
            <td class="top bottom"></td>
            <td align="right" class="top bottom"><h6><strong>Total Units=</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $unitadd1;?></strong></h6></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Points =</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $pointadd1;?></strong></h6></td>
            </tr>
            <tr style="color: #006600;">
              <td></td>
              <td></td>
              <td></td> 
              <td class="left bottom"><h6><strong>Grade Point=</strong></h6></td>
              <td class="right bottom"><h6><strong><?php $gpa1=$pointadd1/$unitadd1;
                           echo round($gpa1,2);
              ?></strong></h6></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </td>
      <td align="right" id="table" class="col-md-6" style="margin-bottom: 10px;">
        <h6 style="color: #006600;" align="left"><strong>ND I (SECOND SEMESTER) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2016-2017</strong></h6>
      <table  style="width:100%;" border="0">
        <thead>
        <tr style="color: #006600;">
          <th align="left" width="50" class="bottom"><h6><strong>Course Code</strong></h6></th>
          <th align="left" width="150" class="bottom"><h6><strong>Course Title</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Unit</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>CA (Tests)</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Exam</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Total</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Grade Letter</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Points</strong></h6></th>
        </tr>
      </thead>
      <tbody>
         
      
      <?php
      $studer=$_GET['studentId'];
      /*$mydb->setQuery("SELECT * FROM `subject`,`studentsubjects`ss,`grade`g WHERE g.`IDNO`='$studer' AND g.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`SEMESTER`='First' AND ss.`LEVEL_ID`=1");*/
        $mydb->setQuery("SELECT * FROM `subject`s,`studentsubjects`ss,`grades`g WHERE g.`IDNO`='$studer' AND ss.`LEVEL_ID`=2 AND ss.`SEMESTER`='Second' AND ss.`SUBJ_ID`=g.`SUBJ_ID`AND s.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`IDNO`=g.`IDNO`");
        $pointadd2=0;
        $unitadd2=0;
        $curr=$mydb->loadResultList();
        foreach ($curr as $nd1s) {
          ?>
          <tr style="color: #006600;">
            <td width="15%"><h6><strong><?php echo $nd1s->SUBJ_CODE;?></strong></h6></td>
            <td width="30%"><h6><strong><?php echo $nd1s->SUBJ_DESCRIPTION;?></strong></h6></td>
            <td><strong><?php echo $nd1s->UNIT;
                $unitadd2+=$nd1s->UNIT;
            ?></strong></td>
            <td><h6><strong><?php echo $nd1s->CONTINOUS_ASSESSMENT;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1s->EXAMINATION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1s->TOTAL;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1s->GRADE_LETTER;?></strong></h6></td>
            <td><h6><strong><?php echo $nd1s->EQUIVALENT;
              $pointadd2+=$nd1s->EQUIVALENT;

            ?></strong></td>
          </tr>
        </tbody>
        <?php
        }

          ?>
          <tfoot>
            <tr style="color: #006600;">
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Units=</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $unitadd2;?></strong></h6></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Points =</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $pointadd2;?></strong></h6></td>
            </tr>
            <tr style="color: #006600;">
              <td></td>
              <td></td>
              <td></td>
              <td class="left bottom"><h6><strong>Grade Point=</strong></h6></td>
              <td class="right bottom"><h6><strong><?php $gpa2=$pointadd2/$unitadd2;
                           echo round($gpa2,2);
              ?></strong></h6></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </td>
  
    </tr>



    <tr class="row">
          <td align="left" id="table" class="col-md-6">
      <h6><strong>ND II (FIRST SEMESTER) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-2018</strong>
      <table  style="width:100%;" border="0">
        <thead>
        <tr style="color: #006600;">
          <th align="left" width="50" class="bottom"><h6><strong>Course Code</strong></h6></th>
          <th align="left" width="150" class="bottom"><h6><strong>Course Title</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Unit</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>CA (Tests)</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Exam</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Total</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Grade Letter</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Points</strong></h6></th>
        </tr>
      </thead>
      <tbody>
         
      
      <?php
      $studer=$_GET['studentId'];
      /*$mydb->setQuery("SELECT * FROM `subject`,`studentsubjects`ss,`grade`g WHERE g.`IDNO`='$studer' AND g.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`SEMESTER`='First' AND ss.`LEVEL_ID`=1");*/
        $mydb->setQuery("SELECT * FROM `subject`s,`studentsubjects`ss,`grades`g WHERE g.`IDNO`='$studer' AND ss.`LEVEL_ID`=3 AND ss.`SEMESTER`='First' AND ss.`SUBJ_ID`=g.`SUBJ_ID`AND s.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`IDNO`=g.`IDNO`");
        $pointadd3=0;
        $unitadd3=0;
        $curr=$mydb->loadResultList();
        foreach ($curr as $nd2f) {
          ?>
          <tr style="color: #006600;">
            <td width="15%"><h6><strong><?php echo $nd2f->SUBJ_CODE;?></strong></h6></td>
            <td width="30%"><h6><strong><?php echo $nd2f->SUBJ_DESCRIPTION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->UNIT;
                $unitadd3+=$nd2f->UNIT;
            ?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->CONTINOUS_ASSESSMENT;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->EXAMINATION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->TOTAL;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->GRADE_LETTER;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2f->EQUIVALENT;
              $pointadd3+=$nd2f->EQUIVALENT;

            ?></strong></h6></td>
          </tr>
        </tbody>
        <?php
        }

          ?>
          <tfoot>
            <tr style="color: #006600;">
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Units=</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $unitadd3;?></strong></h6></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Points =</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $pointadd3;?></strong></h6></td>
            </tr>
            <tr style="color: #006600;">
              <td></td>
              <td></td>
              <td></td>
              <td class="left bottom"><h6><strong>Grade Point=</strong></h6></td>
              <td class="right bottom"><h6><strong><?php $gpa3=$pointadd3/$unitadd3;
                           echo round($gpa3,2);
              ?></strong></h6></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </td>
      <td align="right" id="table" class="col-md-6">
        <h6 style="color: #006600;" align="left"><strong>ND II (SECOND SEMESTER) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-2018</strong></h6>
      <table  style="width:100%;" border="0">
        <thead>
        <tr style="color: #006600;">
          <th align="left" width="50" class="bottom"><h6><strong>Course Code</strong></h6></th>
          <th align="left" width="150" class="bottom"><h6><strong>Course Title</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Unit</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>CA (Tests)</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Exam</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6><strong>Total</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Grade Letter</strong></h6></th>
          <th align="left" width="30" class="bottom"><h6> <strong>Points</strong></h6></th>
        </tr>
      </thead>
      <tbody>
         
      
      <?php
      $studer=$_GET['studentId'];
        $mydb->setQuery("SELECT * FROM `subject`s,`studentsubjects`ss,`grades`g WHERE g.`IDNO`='$studer' AND ss.`LEVEL_ID`=4 AND ss.`SEMESTER`='Second' AND ss.`SUBJ_ID`=g.`SUBJ_ID`AND s.`SUBJ_ID`=ss.`SUBJ_ID` AND ss.`IDNO`=g.`IDNO`");
        $pointadd4=0;
        $unitadd4=0;
        $curr=$mydb->loadResultList();
        foreach ($curr as $nd2s) {
          ?>
          <tr style="color: #006600;">
            <td width="15%"><h6><strong><?php echo $nd2s->SUBJ_CODE;?></strong></h6></td>
            <td width="30%"><h6><strong><?php echo $nd2s->SUBJ_DESCRIPTION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->UNIT;
                $unitadd4+=$nd2s->UNIT;
            ?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->CONTINOUS_ASSESSMENT;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->EXAMINATION;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->TOTAL;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->GRADE_LETTER;?></strong></h6></td>
            <td><h6><strong><?php echo $nd2s->EQUIVALENT;
              $pointadd4+=$nd2s->EQUIVALENT;

            ?></strong></h6></td>
          </tr>
        </tbody>
        <?php
        }

          ?>
          <tfoot>
            <tr style="color: #006600;">
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Units=</strong></h6></td>
            <td class="top bottom"><strong><?php echo $unitadd4;?></strong></td></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"></td>
            <td class="top bottom"><h6><strong>Total Points =</strong></h6></td>
            <td class="top bottom"><h6><strong><?php echo $pointadd4;?></strong></h6></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td class="left bottom"><h6><strong>Grade Point=</strong></h6></td>
              <td class="right bottom"><h6><strong><?php $gpa4=$pointadd4/$unitadd4;
                           echo round($gpa4,2);
              ?></strong></h6></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </td>
    </tr>
   </table>
   <br/>
   <br/>
     <div class="row">
       <div align="left" class="col-md-6"><h5 style="color: #006600;">Total course units: <strong><?php 
              $totunit=$unitadd1+$unitadd2+$unitadd3+$unitadd4;
              echo $totunit;
       ?></strong></h5></div>
       <div align="right" class="col-md-6"><h5 style="color: #006600;">Registrar Signature: <strong>........................</strong></h5></div>
     </div>
     <div class="row">
       <div align="left" class="col-md-6"><h5 style="color: #006600;">CGPA:<strong><?php $totgpa=$gpa1+$gpa2+$gpa3+$gpa4;
       $cgpa=$totgpa/4;
            echo round($cgpa,2); 
       ?></strong></h5></div>
       <div align="right" class="col-md-6"></div>
     </div>
     <div class="row">
       <?php 
          if (round($cgpa,2)>=3.50 && round($cgpa,2)<=4.00){
            $award="DISTINCTION";
          }elseif (round($cgpa,2)>=3.00 && round($cgpa,2)<=3.49) {
            $award="UPPER CREDIT";
          }elseif (round($cgpa,2)>=2.50 && round($cgpa,2)<=2.99) {
            $award="LOWER CREDIT";
          }elseif (round($cgpa,2)>=2.00 && round($cgpa,2)<=2.49) {
            $award="PASS";
          }else{
            $award="FAIL";
          }
        ?>
        <div align="left" class="col-md-6"><h5 style="color: #006600;">AWARD:<strong><?php echo $award;?></strong></h5></div>
        <div align="right" class="col-md-6"><h5 style="color: #006600;">HOD Signature: <strong>...........................</strong></h5></div>
     </div>
   <br><br>
    <form class="" method="" action="">
      <a href="index.php?view=view&studentId=<?php  echo $_GET['studentId'];?>" class="btn btn-default" style="margin-left: 200px;"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
      <button type="submit" name="sendtranscript" class="btn btn-success" style="margin-left: 100px;"><i class="glyphicon glyphicon-send"></i> Send Transcript</button>
    </form>
    <?php 
      if(isset($_POST['sendtranscript'])){
      $studenter=$_GET['studentId'];
      $mydb->setQuery("UPDATE `` SET `STATUS`='Sent' WHERE IDNO='$studenter'");
      $mydb->executeQuery();
      echo ("<script>alert('Data connection not available!!!'); </script>");
    }
    ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>