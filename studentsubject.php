
<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
				if ($_GET['studentId']==""){
					message("ID Number is required!","error");
					check_message();
					
				}else{

					
					$Schoolyr = new Schoolyr();
					$NumberofResult = $Schoolyr->findsy($_GET['studentId']);
					if ($NumberofResult == 0){
						// message("This Student is advice to go back from step 1!","error");
						// check_message();
 						redirect("enrollment.php?studentId=".$_GET['studentId']);


					}else{

						$sy = $Schoolyr->single_sy($_GET['sy']);
						$lele = new Level();
						$studlevel = $lele->single_level($sy->LEVEL_ID);
						//the button in assigning the subjects.
						$button ='<a href = "index.php?page=3" class="btn btn-default"><span class="glyphicon glyphicon-step-backward"></span>Back</a>';

					}

					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);

				}
			}

  ?>
     
		  <!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
	<div class="panel panel-primary">
	    <div class="panel-heading">
		    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enrolled Course by the Student </h3>
		</div>
		<div class="panel-body">
		    <div class="row">      	  		            		          
			    <div class="container">
			 		<div class="well">
					    <span id="printout">
				           <table >       
						     	<tbody>
						     		<tr>
						     		
						     			<td>
						     				<p><b>ID Number : </b><?php echo (isset($cur)) ? $cur->MATRICNO : 'ID' ;?><br/>
						     					<b>Name :</b><?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME.' '.$cur->MNAME : 'Fullname' ;?><br/>
						     					<b>Status : </b><?php echo (isset($sy)) ? $sy->STATUS : 'STATUS' ;?><br/>
						     					<b>AY : </b><?php echo (isset($sy)) ? $sy->AY : 'ACADEMIC YEAR' ;?><br/>
								     			<b>YR/Section : </b><?php echo (isset($studlevel)) ? $studlevel->LEVEL : 'lEVEL' ;?>
											</p>
										</td>
						     		
						     		</tr>
						      	</tbody>
						     
					     	</table>
					     	<br>
					     	<form class="form-horizontal span4" action="controller.php?action=delsubj&studentId=<?php echo $_GET['studentId']; ?>&cid=<?php echo $_GET['cid']; ?>&sy=<?php echo $_GET['sy']; ?>" method="POST">					    
								<table  class="table table-striped" cellspacing="0" id="table">
									<thead>
								  		<tr >

								  			<th>Couse code</th>
								  			<th class="bottom">Course</th>
								  			<th>Unit</th>
								  			<th>CA (Tests)</th>
								  			<th>EXAM</th>
								  			<th>total</th>
								  			<th>Grade Letter</th>
								 			<th class="bottom">Equivalent</th>
								  		</tr>	   
								  	</thead>
								  	<tbody>
								  	<?php
							 			// $cid = (isset($studlevel)) ? $studlevel->LEVEL_ID : 'level';
									  		$mydb->setQuery("SELECT * 
															FROM  `grades` g, `level` l,`subject` s
															WHERE s.`LEVEL_ID` = l.`LEVEL_ID` AND s.`SUBJ_ID`=g.`SUBJ_ID` 
															AND  g.`IDNO` = ".$_GET['studentId']. " AND l.`LEVEL_ID`=".$_GET['cid']);
										$pointadder=0;
										$unitadder=0;
								  		$cur = $mydb->loadResultlist();
										foreach ($cur as $result) {
											echo '<tr>';
										  		echo '<td width="15%">'. $result->SUBJ_CODE .'</td>';
										  		echo '<td width="30%">'. $result->SUBJ_DESCRIPTION.'</td>';
										  		echo '<td>'. $result->UNIT.'</td>';
									  			echo '<td>'.$result->CONTINOUS_ASSESSMENT.'</td>';
										  		echo '<td>'. $result->EXAMINATION.'</td>';
										  		echo '<td>'. $result->TOTAL.'</td>';  
										  		echo '<td>'. $result->GRADE_LETTER.'</td>';  	
										  		echo '<td>'. $result->EQUIVALENT.'</td>';
												$unitadder+=$result->UNIT;		  
												$pointadder+=$result->EQUIVALENT;

										  		echo '</tr>';
									  		}
									  	 
								  	?>
								  </tbody>
								  <tfoot>
								  	<tr>
								  	<td></td>
								  	<td><strong>Total Units:</strong></td>
								  	<td><strong><?php echo $unitadder;?></strong></td>
								  	<td></td>
								  	<td></td>
								  	<td></td>
								  	<td></td>
								  	<td><strong><?php echo $pointadder;?></strong></td>
								  </tr>
								  <tr>
								  	<td></td>
								  	<td></td>
								  	<td></td>
								  	<td><strong>Grade Point:</strong></td>
								  	<?php $gp=$pointadder/$unitadder?>
								  	<td><strong><?php echo round($gp,2);?></strong></td>
								  	<td></td>
								  	<td></td>
								  	<td></td>
								  </tr>
								  </tfoot>
								 
								</table>
								</span>




						<div class="btn-group" id="divButtons" name="divButtons">
							<?php echo $button;?>
							</
					</form>
						</body>
						</html>		
					  </div>
					</div>
									
				</form>
					 
					    </div>	
					   </div>				            	              
			          </div>				          
			         </div><!--/span-->
			    <!--  </form> -->
							  
		
	

						</div>
</div>
  <script>
function tablePrint(){ 
 document.all.divButtons.style.visibility = 'hidden';  
    var display_setting="toolbar=no,location=no,directories=no,menubar=no,";  
    display_setting+="scrollbars=no,width=500, height=500, left=100, top=25";  
 //   var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
    var content_innerhtml = document.getElementById("printout").innerHTML;  
    var document_print=window.open("","",display_setting);  
    document_print.document.open();  
    document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');  
    document_print.document.write(content_innerhtml);  
    document_print.document.write('</body></html>');  
    document_print.print();  
    document_print.document.close(); 
   
    return false;  
    } 
  $(document).ready(function() {
    oTable = jQuery('#example').dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers"
    } );
  });   
</script>