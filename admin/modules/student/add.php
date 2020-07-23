<?php
  require '../../../includes/initialize.php';


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../../../jquery/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
    $('#school').on('change',function(){
        var schoolID = $(this).val();
        if(schoolID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'SCHOOL_ID='+schoolID,
                success:function(html){
                    $('#department').html(html);
                    $('#programme').html('<option value="">Select department first</option>'); 
                }
            }); 
        }else{
            $('#department').html('<option value="">Select school first</option>');
            $('#programme').html('<option value="">Select department first</option>'); 
        }
    }); 
    
    $('#department').on('change',function(){
        var departmentID = $(this).val();
        if(departmentID){
            $.ajax({
                type:'POST',
                url:'ajax.php',
                data:'DEPARTMENT_ID='+departmentID,
                success:function(html){
                    $('#programme').html(html);
                }
            }); 
        }else{
            $('#programme').html('<option value="">Select department first</option>'); 
        }
    });
});
  </script>
</head>
<body>
<form action="controller.php?action=add" class="form-horizontal well span9" method="post">
    <fieldset>
      <legend>New Student</legend>

      <div class="form-group" id="idno">
        <div class="rows">
        <div class="col-md-4">
          <label class="col-md-4 control-label" for="idno">ID Number<span style="color:red;"> *</span></label>

          <div class="col-md-8">
            <input class="form-control input-sm" id="idno" name="idno" placeholder=
            "ID Number" type="number" value="">
          </div>
        </div>
        <div class="col-md-4">
          <label class="col-md-4 control-label" for="matricno">Matric No.<span style="color: red;"> *</span></label>

          <div class="col-md-8">
            <input type="text" name="matricno" class="form-control input-sm" placeholder="Matriculation Number">
          </div>
        </div>
      </div>
    </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="lName">LastName:<span style="color:red";> *</span></label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="lName" name="lName"
              placeholder="Last Name" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-4 control-label" for="fName">Firstname:<span style="color:red";> *</span></label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="fName" name="fName"
              placeholder="First Name" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-5 control-label" for="mName">Middlename:<span style="color:red";> *</span></label>

            <div class="col-md-7">
              <input class="form-control input-sm" id="mName" name="mName"
              placeholder="Middle Name" type="text">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="gender">Gender <span style="color:red";> *</span></label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="gender" name="gender">
                <option value="#">please select...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>

           <div class="col-md-4">
                <label class="col-md-4 control-label" for=
                "bday">DoB <span style="color:red";> *</span></label>
    
                <div class="col-md-8">
                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
           </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="bplace">Birth place</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="bplace" name="bplace"
              placeholder="Birth Place" type="text">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="status">Marital Status</label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="status" name="status">
                <option value="#">please select...</option>
                <option value="Single">Single</option>
                <option value="Divorced">Divorced</option>
                <option value="Engaged">Engaged</option>
                <option value="Married">Married</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-4 control-label" for="age">Age</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="age" name="age" placeholder=
              "age" type="number">
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-4 control-label" for="nationality">Nationality <span style="color:red";> *</span></label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="nationality" name="nationality" placeholder="Nationality" type="text">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="religion">Religion</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="religion" name="religion"
              placeholder="Religion" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-4 control-label" for="contact">Contact<span style="color:red";> *</span></label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="contact" name="contact"
              placeholder="Contact Number" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <label class="col-md-4 control-label" for="email">Email <span style="color:red";> *</span></label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="email" name="email"
              placeholder="Email address" type="email">
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-8">
            <label class="col-sm-2 control-label" for="home">Home</label>

            <div class="col-md-10">
              <input class="form-control input-sm" id="home" name="home" placeholder="Home Address" type="text">
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="state">State of Origin <span style="color:red";> *</span></label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="state" name="state">
                <option value="#">Please Select...</option>
                <option value="Abia">Abia</option><option value="Adamawa">Adamawa</option><option value="Akwa-Ibom">Akwa-Ibom</option><option value="Anambra">Anambra</option><option value="Bauchi">Bauchi</option><option value="Bayelsa">Bayelsa</option><option value="Benue">Benue</option><option value="Borno">Borno</option><option value="Cross River">Cross River</option><option value="Delta">Delta</option><option value="Ebonyi">Ebonyi</option><option value="Edo">Edo</option><option value="Ekiti">Ekiti</option><option value="Enugu">Enugu</option><option value="Gombe">Gombe</option><option value="Imo">Imo</option><option value="Jigawa">Jigawa</option><option value="Kaduna">Kaduna</option><option value="Kano">Kano</option><option value="Katsina">Katsina</option><option value="Kebbi">Kebbi</option><option value="Kogi">Kogi</option><option value="Kwara">Kwara</option><option value="Lagos">Lagos</option><option value="Nassarawa">Nassarawa</option><option value="Niger">Niger</option><option value="Ogun">Ogun</option><option value="Ondo">Ondo</option><option value="Osun">Osun</option><option value="Oyo">Oyo</option><option value="Plateau">Plateau</option><option value="Rivers">Rivers</option><option value="Sokoto">Sokoto</option><option value="Taraba">Taraba</option><option value="Yobe">Yobe</option><option value="Zamfara">Zamfara</option>
              </select>
            </div>
          </div>
          
          
        </div>
      </div>

      <div class="form-group">
        <div class="rows">
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="school">School</label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="school" name="school">
                <option value="#">please select...</option>
                <?php
                $mydb=new Database;
                $sqlselect="SELECT * FROM `school`";
                $setselect= $mydb->setQuery($sqlselect);
                $queryselectschool=$mydb->executeQuery();
                $rowcount=$mydb->num_rows($queryselectschool);
                  if($rowcount>0){
                    
                  while($fetchschool= $mydb->fetch_array($queryselectschool)){
                    echo '<option value="'.$fetchschool['SCHOOL_ID'].'">'.$fetchschool['SCHOOL_NAME'].'</option>';
                  }
                      
                  }else{
                    echo '<option>no School available</option>';
                  }

                ?>
              </select>
            </div>
          </div>
       <div class="col-md-4">
            <label class="col-md-4 control-label" for="department">Department <span style="color: red";> *</span></label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="department" name="department">
                <option value="#">please select...</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <label class="col-md-4 control-label" for="programme">Programme <span style="color: red";> *</span></label>

            <div class="col-md-8">
              <select class="form-control input-sm" id="programme" name="programme">
                <option value="#">please select...</option>
              </select>
            </div>
          </div>
        </div>
      </div>
            <!--
  <div class="form-group">
      <div class="rows">
        <div class="col-md-3">
        <label class="col-md-4 control-label" for=
        "course">Course</label>

        <div class="col-md-8">
          <select class="form-control input-sm" name="course" id="course">
      <?php
            $course = new Course();
            $cur = $course->listOfcourse(); 
            foreach ($cur as $object) {
            echo '<option value="'. $object->COURSE_ID.'">'.$object->COURSE_NAME .'</option>';
            }

            ?>

      </select> 
        </div>
        </div>

    
      </div>
     
      <div class="rows">      
        <div class="col-md-3">
        <label class="col-md-4 control-label" for=
        "semester">Semester</label>

        <div class="col-md-8">
         <select class="form-control input-sm" name="semester" id="semester">
      <option value="First">First</option>
      <option value="Second">Second</option>  
      <option value="Second">Summer</option>  
      </select> 
        </div>
        </div>
        <div class="col-md-3">
        <label class="col-md-4 control-label" for=
        "AY">AY</label>

        <div class="col-md-8">
         <select class="form-control input-sm" name="AY" id="AY">
      <option value="2013-2014">2013-2014</option>
      <option value="2014-2015">2014-2015</option>
      <option value="2015-2016">2015-2016</option>
      <option value="2016-2017">2016-2017</option>
      <option value="2017-2018">2017-2018</option>
      <option value="2018-2019">2018-2019</option>
      <option value="2019-2020">2019-2020</option>  
      </select> 
        </div>
        </div>
      </div>
      </div>
  
-->
    </fieldset>

    <fieldset>
      <legend>Secondary Details</legend>
      <div class="form-group">
          <div class="col-md-6">
            <label class="col-md-4 control-label" for="guardian_name">Parent/Guardian Name</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="guardian_name" name="guardian_name"
              placeholder="Guardian" type="text">
            </div>
          </div>
          </div>
          <div class="form-group">
          <div class="col-md-6">
            <label class="col-md-4 control-label" for="guardian_address">Parent/Guardian Address</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="guardian_address" name="guardian_address" placeholder="Guardian Address" type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label class="col-md-4 control-label" for="guardian_phone">Parent/Guardian Phone</label>

            <div class="col-md-8">
              <input class="form-control input-sm" id="guardian_phone" name="guardian_phone" placeholder="Guardian Phone" type="text">
            </div>
          </div>
      </div>
    </fieldset>
    <div class="form-group">
      <div class="rows">
        <div class="col-md-6">
          <div class="col-md-6"></div>
        </div>

        <div class="col-md-6" style="text-align: right">
          <button class="btn btn-default" name="submit" type="submit">Save</button>
        </div>
      </div>
    </div>
  </form>
</div><!==End of well-->
  <!--End of container-->

</div><!--End of container-->
</body>
</html>

