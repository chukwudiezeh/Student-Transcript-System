
<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

      <fieldset>
        <legend>New level</legend>
                          

          <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="level">Level</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="level" name="level" placeholder="e.g. ND I (First)" type="text" value="">
                  </div>
                </div>
              </div>

                 <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="semester">Semester</label>

                  <div class="col-md-8">
                     <select class="form-control input-sm" id="semester" name="semester" placeholder="Semester">
                      <option value="#">Please Select...</option>
                      <option value="First">First</option>
                      <option value="Second">Second</option>                    
                     </select>
                    </div>
                </div>
              </div>
            <!--   <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "major">Major</label>

                  <div class="col-md-8">
                      <select class="form-control input-sm" name="major" id="major">
                        <option value="None">None</option>
                        <?php
                     /*   $major = new Major();
                        $cur= $major->listOfmajor();
                        foreach ($cur  as $major) {
                          echo '<option value='.$major->MAJOR.'>'.$major->MAJOR.'</OPTION>';
                        }*/

                        ?>
                      </select> 
                      <input class="form-control input-sm" id="major" name="major" placeholder=
                        "Course Level" type="hidden" value="">
                  </div>
                </div>
              </div>
-->
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="leveldesc">Level Description</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="leveldesc" name="leveldesc" placeholder="e.g. ND I (First)" type="text" value="">
                  </div>
                </div>
              </div>

         <!-- <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "dept">Department</label>

                 <div class="col-md-8">
                  <select class="form-control input-sm" name="dept" id="dept">-->
                    <?php
                    /*$dept = new dept();
                    $cur = $dept->listOfDept(); 
                    foreach ($cur as $Department) {
                      echo '<option value="'. $Department->DEPT_ID.'">'. $Department->DEPARTMENT_NAME .' </option>';
                    }*/

                    ?>
            
          <!--</select> 
              </div>
                </div>
              </div> -->
         <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "savelevel"></label>

                  <div class="col-md-8">
                    <button class="btn btn-default" name="savelevel" type="submit" ><span class="glyphicon glyphicon-floppy-save"><span> Save</button>
                  </div>
                </div>
              </div>

          
      </fieldset> 

              
    </form>

</div><!--End of container-->