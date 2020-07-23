<style type="text/css">
	.form-control:focus{
		border-color: #fecd0b;
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(254, 205, 11);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgb(254, 205, 11);
	}

</style>

<div class="row row-offcanvas row-offcanvas-middle">
<div class="col-xs-12 col-sm-12 sidebar-offcanvas" id="sidebar" role="navigation">
	<div class="sidebar-nav">
		<div class="panel panel-success">
					
					  <div class="panel-heading"><strong>Student Login</strong></div>
					   <div class="panel-body">	
						   <form  method="POST" action="login.php">
								<div class="col-xs-12 col-sm-12">

					            	<div class="form-group">
					            		<div class="row" >
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="text" placeholder="ID number" class="form-control" name="uname">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						              			<input type="password" placeholder="Password" class="form-control" name="pass">
						              		</div>
						            	</div>
						            </div>

						            <div class="form-group">
						            	<div class="row">
					            			<div class="col-xs-12 col-sm-12">
						           				 <button type="submit" class="btn btn-success" align="right" name="btnlogin">Sign in <span class="glyphicon glyphicon-log-in"></span></button>
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
						</div>
				</div>
	</div>
	<!--/.well --> 
</div>
<!--/span-->