<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <form class="form-horizontal well span4" action="#.php" method="POST">

          <fieldset>
            <legend>New Lecturer</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="name">Fullname:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder="Account Name" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="address">Current Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder="Current Address" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="Gender">Gender:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="Gender" id="Gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="civilstats">Marital Status:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="civilstats" id="civilstats">
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          <option value="Engaged">Engaged</option>
                          <option value="Divorced">Divorced</option>                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="specialization">Specialization:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="specialization" name="specialization" placeholder="Specialization" type="text" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="empStats">Employment Status:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="empStats" name="empStats" placeholder="Employment Status" type="text" value="">
                      </div>
                    </div>
                  </div>
                  


            <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="email">Email Address:</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="email" name="email" placeholder="Email Address" type="email" value="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="pass">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="pass" name="pass" placeholder="Account Password" type="Password" value="">
                      </div>
                    </div>
                  </div>
            
                        
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for="savelecturer"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="savelecturer" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

                  
        </form>
        </div><!--End of container-->