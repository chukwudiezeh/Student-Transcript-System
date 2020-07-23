<?php require '../../includes/initialize.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Student Transcript Processing System</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
   <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
    
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 1
        } ],
        "order": [[ 3, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

/*$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        //vertical scroll
         "scrollY":        "400px",
        "scrollCollapse": true,
        //ordering start at column 2
       "order": [[ 2, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
*/
/*$(document).ready(function() {
    $('#example').dataTable( {
        "pagingType": "full_numbers"
    } );
} );*/
/*$(document).ready(function() {
    $('#example').dataTable();
} );
*///scroll vertical
/*$(document).ready(function() {
    $('#example').dataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
*/       
    </script>

<!-- Custom styles for this template -->
<link href="<?php echo WEB_ROOT; ?>css/offcanvas.css" rel="stylesheet">

  <?php
  //login confirmation
 //confirm_logged_in();

  ?>
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
     <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo WEB_ROOT; ?>admin/index.php">Student Transcript Processing System</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo WEB_ROOT; ?>admin/index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entry<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php">Student</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">Course</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/course/index.php">Grade level</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/instructor/index.php">Lecturers</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">Department</a></li>
                  <li><a href="<?php echo WEB_ROOT;?>admin/modules/grades/index.php">Grades</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>admin/modules/room/index.php">Rooms</a></li>
                </ul>  

            </li>
          <!--   <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="newenrollment.php">Reservation</a></li>
               
                             
                </ul>  

            </li>-->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transcript Info.<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo WEB_ROOT; ?>admin/transstatus/transreq.php">Transcript Requests</a></li>
                   <li><a href="<?php echo WEB_ROOT; ?>admin/sentTrans.php">Sent/Pending Transcript</a></li>
                   <li><a href="<?php echo WEB_ROOT; ?>admin/modules/class/index.php">List of class</a></li>
                 <!--  <li><a href="#.php">New Enrolment</a></li> -->
                             
                </ul>  

            </li>
      <!--       <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grade<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#.php">New Enrolment</a></li>
                             
                </ul>  

            </li>-->
             <!--
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#.php">New Enrolment</a></li>
                     <li><a href="scheduleSubFilter.php">New Schedule</a></li>         
                </ul>  

            </li>-->
                      
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="#">Reports</a></li> -->
                <li><a href="<?php echo WEB_ROOT; ?>admin/modules/user/index.php">Manage User</a></li>
              <!--   <li><a href="#">Others</a></li> -->
                <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>
              </ul>  
            </li>
      

          </ul>
           
      </div><!--/.navbar-collapse -->
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->

<div class="container">

<?php check_message(); ?>
<div class="well">
  <table class="table table-hover" border="0">
    <thead>
    <tr>
              <th>Matric no.</th>
              <th>Fullname</th>
              <th>Sex</th>
              <th>Email</th>
              <th>Recipient Email</th>
              <th>Transcript Type</th>
              <th>Transcript No.</th>
              <th>Apply Fee</th>
              <th>Status</th>
         
            </tr> 
          </thead>
          <tbody>
            <?php 
              
              $mydb->setQuery("SELECT * FROM `transapplydetails`");
              $tur=$mydb->loadResultList();
              foreach ($tur as $tareq) {
                echo '<tr>';
                echo '<td>'.$tareq->MATRICNO.'</td>';
                echo '<td>'.$tareq->LNAME.', '.$tareq->FNAME.' '.$tareq->MNAME.'</td>';
                echo '<td>'.$tareq->SEX.'</td>';
                echo '<td>'.$tareq->EMAIL.'</td>';
                echo '<td>'.$tareq->RECIPIENT_EMAIL.'</td>';
                echo '<td>'.$tareq->TRANS_TYPE.'</td>';
                echo '<td>'.$tareq->TRANS_NUMBER.'</td>';
                echo '<td>'.$tareq->APPLY_FEE.'</td>';
                echo '<td>'.$tareq->STATUS.'</td>';

              }
            ?>
          </tbody>
  </table>
</div>
<hr>
      <footer>
        <p align="center">&copy; 2018&nbsp;&nbsp;<a href="" style="text-decoration: none;">Developed by Ezeh Chukwudi, Akintola Stephen, Jinadu Sanmi</a></p>
   <!--      <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>-->
         <script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
<!--     <script src="assets/js/jquery.js"></script>>-->
       <script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
     <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
    
    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
/*      function calculate(){  

     var first = document.getElementById('first').value; 
     var second = document.getElementById('second').value; 
     var third = document.getElementById('third').value;  
     var fourth = document.getElementById('fourth').value;  

    var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
    document.getElementById('finalave').value = totalVal;
     document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
        }*/
         function calculate(){     
     var grade1 = document.getElementById('first').value; 
     var grade2 = document.getElementById('second').value;  
  
    var totalVal = parseFloat(grade1) + parseFloat(grade2);
   document.getElementById('total').value = parseFloat(totalVal);
   var newGP = (parseFloat(totalVal/20)-1);
   document.getElementById('finalave').value = newGP.toFixed(2);  
        }
</script>
  </script>     
  
      </footer>

      </div>
<!--/.container-->
</body>
</html>