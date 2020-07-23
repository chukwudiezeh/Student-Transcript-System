<?php 
  $gradeid=$_GET['gradeid'];
  $studentId=$_GET['studid'];
  $studsubid=$_GET['studsubid'];
  $subjectid=$_GET['subjectid'];
  $deptid=$_GET['deptid'];
  $levelid=$_GET['levelid'];
  $sem=$_GET['sem'];

  $grade=new Grades();
  $cur=$grade->single_grades($gradeid);
    $subjid=$cur->SUBJ_ID;
    $studentid=$cur->IDNO;
?>
<script>
  function suma() {
    var courseunit = document.getElementById('unit').value;
    var cascore = document.getElementById('ca').value;
    var examscore = document.getElementById('exam').value;

    var result = (parseInt(cascore)) + (parseInt(examscore));

    if(!isNaN(result)){
      document.getElementById('total').value=result;

      if(result>=75 && result<=100){
        document.getElementById('gradeletter').value="A1";
        var a=4*courseunit;
        document.getElementById('equiv').value=a;
      }else if(result>=70 && result<=74){
        document.getElementById('gradeletter').value="A2";
        var b=3.50*courseunit;
        document.getElementById('equiv').value=b;
      }else if(result>=65 && result<=69){
        document.getElementById('gradeletter').value="B1";
        var c=3.25*courseunit;
        document.getElementById('equiv').value=c;
      }else if(result>=60 && result<=64){
        document.getElementById('gradeletter').value="B2";
        var d=3*courseunit;
        document.getElementById('equiv').value=d;
      }else if(result>=55 && result<=59){
        document.getElementById('gradeletter').value="C1";
        var e=2.75*courseunit;
        document.getElementById('equiv').value=e;
      }else if(result>=50 && result<=54){
        document.getElementById('gradeletter').value="C2";
        var f=2.50*courseunit;
        document.getElementById('equiv').value=f;
      }else if(result>=45 && result<=49){
        document.getElementById('gradeletter').value="D1";
        var g=2.25*courseunit;
        document.getElementById('equiv').value=g;
      }else if(result>=40 && result<=44){
        document.getElementById('gradeletter').value="D2";
        var h=2*courseunit;
        document.getElementById('equiv').value=h;
      }else if(result>=35 && result<=39){
        document.getElementById('gradeletter').value="E1";
        var i=1.75*courseunit;
        document.getElementById('equiv').value=i;
      }else if(result>=30 && result<=34){
        document.getElementById('gradeletter').value="E2";
        var j=1.50*courseunit;
        document.getElementById('equiv').value=j;
      }else if(result>=25 && result<=29){
        document.getElementById('gradeletter').value="G1";
        var k=1.25*courseunit;
        document.getElementById('equiv').value=k;
      }else if(result>=20 && result<=24){
        document.getElementById('gradeletter').value="G2";
        var l=1*courseunit;
        document.getElementById('equiv').value=l;
      }else if(result>=0 && result<=19){
        document.getElementById('gradeletter').value="F";
        var m=0*courseunit;
        document.getElementById('equiv').value=m;
      }
    }
  }
</script>


<form class="form-horizontal well span6" action="controller.php?action=add&deptid=<?php echo $deptid;?>&levelid=<?php echo $levelid;?>&sem=<?php echo $sem;?>&subjectid=<?php echo $subjectid;?>studentid=<?php echo $studentId;?>&gradeid=<?php echo $gradeid;?>&studsubid=<?php echo $studsubid;?>" method="POST">

      <fieldset>
        <legend>Add Grade</legend>
                          

          <div class="form-group">
                <div class="col-md-8">
                  <?php 
                  $stud=new Student();
                  $cur=$stud->single_student($studentid);
                  ?>
                  <label class="col-md-4 control-label" for="name">Full name</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="name" name="name" placeholder="" type="text" value="<?php echo $cur->LNAME.', '.$cur->FNAME.' '.$cur->MNAME;?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-md-8">
                    <label class="control-label col-md-4" for="matric">Matric No.</label>
                    <div class="col-md-8">
                      <input class="form-control input-sm" type="text" name="matric" id="matric" value="<?php echo $cur->MATRICNO;?>" readonly>
                    </div>
                  </div>
              </div>

                 <div class="form-group">
                <div class="col-md-8">
                  <?php 
                    $sub=new Subject();
                    $cur=$sub->single_subject($subjid);
                  ?>
                  <label class="col-md-4 control-label" for="coursecode">Course Code</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursecode" name="coursecode" placeholder="" type="text" value="<?php echo $cur->SUBJ_CODE;?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="coursename">Course</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursename" name="coursename" placeholder="" type="text" value="<?php echo $cur->SUBJ_DESCRIPTION;?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="unit">Unit</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="unit" name="unit" placeholder="" type="text" value="<?php echo $cur->UNIT;?>" readonly>
                  </div>
                </div>
              </div>
              <div class="form-group">
            <div class="col-md-8">
              <?php 
                  $grader=new Grades();
                  $cur=$grader->single_grades($gradeid);
                  ?>
              <label class="col-md-4 control-label" for="ca">CA (Tests)</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="ca" name="ca" type="text" placeholder="CA Test" value="<?php echo $cur->CONTINOUS_ASSESSMENT;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="exam">Exam</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="exam" name="exam" type="text" placeholder="Exam Score" onkeyup="suma();" value="<?php echo $cur->EXAMINATION;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="total">Total</label>
              <div class="col-md-8">
                 <input class="form-control input-sm" id="total" name="total"  type="text" value="">
              </div>
            </div>
          </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="gradeletter">Grade Letter</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="gradeletter" name="gradeletter" placeholder="Grade Letter" type="text" value="">
                  </div>
                </div>
              </div>

         <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="equiv">Equivalent</label>

                 <div class="col-md-8">
                  <input class="form-control input-sm" name="equiv" id="equiv" value=""> 
              </div>
                </div>
              </div>
         <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="savegrade"></label>

                  <div class="col-md-8">
                    <button class="btn btn-default" name="savegrade" id="savegrade" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                  </div>
                </div>
              </div>

          
      </fieldset> 

              
    </form>

</div><!--End of container-->