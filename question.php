<?php

	session_start();

	

	$_SESSION['newapp'] = 'new';

	include('connect.php');

	

?>

<!DOCTYPE html>

<html>
<style type="text/css">
	.img{

		position: absolute;

		top: 350px;

		left: 8%;

		right: 5%;

		z-index: 0;

		background-attachment: fixed;

		background-position: center;



	}



</style>

<head>

	<title>Application Form</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

	<link rel="shortcut icon" href="favicon.ico" />	

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">

	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">

	<link rel="stylesheet" type="text/css" href="css/ripples.css">

	<link rel="stylesheet" type="text/css" href="css/inputmask.css">

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

	<!-- Javascript file -->

	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/material.js"></script>

	<script type="text/javascript" src="js/angular.js"></script>

	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

	<script type="text/javascript" src="js/jquery.dropdown.js"></script>

	<script type="text/javascript" src="js/inputmask.js"></script>

	<script type="text/javascript" src="js/jquery.inputmask.js"></script>



<div class="card container" id="questcon">
			
					
					<h6 style="padding-top: 30px"><i class="fa fa-book"> </i><b>Question</b> </h6>  

					<hr>


					<div class="row col-md-12" >

<form action="" method="post">
					<form action="" method="post">
					<div class="form-group">
					<?php
						$ref_number = $_GET['ref'];
						$employeeType = $_GET['type'];

						$cnt_res = $conn->query("SELECT * from tbl_application where REFERENCE_NO = '$ref_number'");

							

							while($row10 = $cnt_res->fetch_assoc()) {

								$myID = $row10['ID']; 


							}	


					?>
						<label class="control-label">Applicant ID</label>
						<input type="text" name="ref_number" id = "id" value = "26515"class="form-control" required readonly>
						<br>
						<input type="text" name="type" id = "type" value = "Agent" class="form-control" required readonly>
					</div>
					
					<div class="form-group">
						<div class="form-group label-floating">

								
								<b>
								<input type="text" name="mother_lname" id="mlname" class="form-control" value = "1.	What experience do you have in a call center?" readonly></b>

							</div>
							<div id="removeWorkid">

                    <div class="input_fields_wrap_work">
                    	<div class="row col-md-12">

                          <div class="col-md-6">
                    	<div class="form-group label-floating">

                              <label class="control-label" for="yearsofexperience">Years of Experience:</label>

                              <input class="form-control" type="text" name="yearsofexperience" id="yearsofexperience">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>
                        </div>
                    </div>
                    <hr>

                            <button type="button" class="btn btn-raised btn-sm btn-info add_field_button_work">Add Work Experience</button>

                      <div class="row col-md-12">

                          <div class="col-md-6">

                            <div class="form-group label-floating">

                              <label class="control-label" for="date"><i class="fa fa-calendar" ></i> Date</label>
                              <input class="form-control" type="text" name="date" id="date">
                             

                            </div>

                          </div>

                       

                          <div class="col-md-6">


                            <div class="form-group label-floating">

                              <label class="control-label" for="company_name">Company Name</label>

                              <input class="form-control" type="text" name="company_name" id="company_name">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>

                          </div>

                          <div class="col-md-6">

                            <div class="form-group label-floating">

                              <label class="control-label" for="account">Account</label>

                              <input class="form-control" type="text" name="account" id="account">

                            </div>

                          </div>

                          <div class="col-md-6">

                            <div class="form-group label-floating">

                              <label class="control-label" for="role">Role</label>

                              <input class="form-control" type="text" name="role" id="role">

							  <div class="help-block with-errors" style="color: red;"></div>

                            </div>

                          </div>

                          </div>

						  <div class="row col-md-12">

                          <div class="col-md-6">

                            <div class="form-group label-floating">

                              <label class="control-label" for="lineofbusiness">Line of Business</label>

                              <textarea class="form-control" type="text" name="lineofbusiness" id="lineofbusiness"></textarea>

							  <div class="help-block with-errors" style="color: red"></div>

                            </div>

                          </div>

                          <div class="col-md-6">

                            <div class="form-group label-floating">

                              <label class="control-label" for="reason-for-leaving">Reason For Leaving</label>

                              <textarea class="form-control" type="text" name="reason" id="reason"></textarea>

                            </div>

                          </div>
                      </div>

                    </div>
                    <div class="form-group label-floating">

								
								<b>
								<input type="text" name="mother_lname" id="mlname" class="form-control" value = "2.	What is the key to success for a call center agent?" readonly></b>
								 <textarea class="form-control" rows="5" name="questions" id="questions" ></textarea>

							</div>

                            </div>
					
					</div> 
					
					<div class="modal-footer">

					<div class="form-group">
						<input type="button" value = "Submit" name="interviewquestionbtn1" id ="interviewquestionbtn1" class="btn btn-primary" onclick="document.getElementById('container6')">
						<p> <span style="color:green"><?php ;?></span> </p>
					</div>
					</div>
					</form>

				</div>

</div>
<script type="text/javascript">
	 $(document).ready(function() { 

                var max_fields = 5; 

                var wrapper = $(".input_fields_wrap_work"); //Fields wrapper

                var add_button = $(".add_field_button_work"); //Add button ID

                

                var x = 1; //initlal text box count
                 /*<?php
						include 'connect.php';
						
						$errormsg="";

								if (isset($_POST['interviewquestionbtn1'])) {
									//echo "<script>window.close();</script>";
									
									$date = $_POST['date'];
									$business = $_POST['lineofbusiness'];
									$company_name = $_POST['company_name'];
									$role= $_POST['role'];
									$account=$_POST['account'];
									$reason = $_POST['reason'];
									$date1 = "";
									if (!empty($_POST['date1'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['date1']); 
										}
									$business1 = "";
									if (!empty($_POST['lineofbusiness1'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['lineofbusiness1']); 
										}
									$company_name1 = "";
									if (!empty($_POST['company_name1'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['company_name1']); 
										}
									$role1= "";
									if (!empty($_POST['role1'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['role1']); 
										}
									$account1="";
										if (!empty($_POST['account1'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['account1']); 
										}
									$reason1 = "";
										if (!empty($_POST['reason1'])) {	
											 $reason5 = mysqli_real_escape_string($conn,$_POST['reason1']); 
										}
									$date2 = "";
									if (!empty($_POST['date2'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['date2']); 
										}
									$business2 = "";
									if (!empty($_POST['lineofbusiness2'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['lineofbusiness2']); 
										}
									$company_name2 = "";
									if (!empty($_POST['company_name2'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['company_name2']); 
										}
									$role2= "";
									if (!empty($_POST['role2'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['role2']); 
										}
									$account2="";
										if (!empty($_POST['account2'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['account2']); 
										}
									$reason2 = "";
										if (!empty($_POST['reason2'])) {	
											 $reason5 = mysqli_real_escape_string($conn,$_POST['reason2']); 
										}
									$date3 = "";
									if (!empty($_POST['date3'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['date3']); 
										}
									$business3 = "";
									if (!empty($_POST['lineofbusiness3'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['lineofbusiness3']); 
										}
									$company_name3 = "";
									if (!empty($_POST['company_name3'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['company_name3']); 
										}
									$role3= "";
									if (!empty($_POST['role3'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['role3']); 
										}
									$account3="";
										if (!empty($_POST['account3'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['account3']); 
										}
									$reason3 = "";
										if (!empty($_POST['reason3'])) {	
											 $reason5 = mysqli_real_escape_string($conn,$_POST['reason3']); 
										}
									$date4 = "";
									if (!empty($_POST['date4'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['date4']); 
										}
									$business4 = "";
									if (!empty($_POST['lineofbusiness4'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['lineofbusiness4']); 
										}
									$company_name4 = "";
									if (!empty($_POST['company_name4'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['company_name4']); 
										}
									$role4= "";
									if (!empty($_POST['role4'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['role4']); 
										}
									$account4="";
										if (!empty($_POST['account4'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['account4']); 
										}
									$reason4 = "";
										if (!empty($_POST['reason4'])) {	
											 $reason5 = mysqli_real_escape_string($conn,$_POST['reason4']); 
										}
									$date5 = "";
									if (!empty($_POST['date5'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['date5']); 
										}
									$business5 = "";
									if (!empty($_POST['lineofbusiness5'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['lineofbusiness5']); 
										}
									$company_name5 = "";
									if (!empty($_POST['company_name5'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['company_name5']); 
										}
									$role5= "";
									if (!empty($_POST['role5'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['role5']); 
										}
									$account5="";
										if (!empty($_POST['account5'])) {	
												 $reason5 = mysqli_real_escape_string($conn,$_POST['account5']); 
										}
									$reason5 = "";
										if (!empty($_POST['reason5'])) {	
											 $reason5 = mysqli_real_escape_string($conn,$_POST['reason5']); 
										}

									//$myID = $_POST['ref_number'];
									if(isset($_POST['interviewquestionbtn1'])){
									$sqlInsert = "INSERT INTO `tbl_experience`  (APPLICANT_ID,company_name, account, role,date,line_of_business,reason_for_leaving) VALUES ('$id','$company_name','$account','$role','$date','$line_of_business','$reason_for_leaving')";

	
									$result = $conn->query($sqlInsert);
										$sqlInsert1 = "INSERT INTO `tbl_experience`  (APPLICANT_ID,company_name, account, role,date,line_of_business,reason_for_leaving) VALUES ('$id','$company_name1','$account1','$role1','$date1','$lineofbusiness1','$reason1')";

	
									$result1 = $conn->query($sqlInsert1);
									if ($result && $result1){
										$errormsg ="Answers Submitted Successfully!";
									}else{
										$errormsg="Error!";
									}
									
									echo '<script type="text/javascript">alert("'.$errormsg.'");
									window.close();</script>';
								}
								}	
								
						?>	*/


                $(add_button).click(function(e){ //on add input button click

                    e.preventDefault();

                    if(x < max_fields){ //max input box allowed

                        x++; //text box increment


                        $(wrapper).append('<div class=""><div class="row col-md-12"><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="date'+ x + '"><i class="fa fa-calendar" ></i> Date</label><input class="form-control" type="text" name="date' + x + '" id="date' + x + '"></div> </div><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="company_name' + x + '">Company Name</label><input class="form-control" type="text" name="company_name' + x + '" id="company_name'+ x +'"><div class="help-block with-errors" style="color: red;"></div></div></div><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="account' + x + '">Account</label><input class="form-control" type="text" name="account' + x + '" id="account' + x + '"></div></div><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="role' + x + '">Role</label><input class="form-control" type="text" name="role' + x + '" id="role' + x + '"><div class="help-block with-errors" style="color: red;"></div></div></div></div><div class="row col-md-12"><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="lineofbusiness' + x + '">Line of Business</label><textarea class="form-control" type="text" name="lineofbusiness' + x + '" id="lineofbusiness' + x + '"></textarea><div class="help-block with-errors" style="color: red"></div></div></div><div class="col-md-6"><div class="form-group label-floating"><label class="control-label" for="reason-for-leaving' + x + '">Reason For Leaving</label><textarea class="form-control" type="text" name="eason-for-leaving' + x + '" id="eason-for-leaving' + x + '"></textarea></div></div></div><button type=button class="btn btn-raised btn-sm btn-danger remove_field pull-right">Remove</button></div></div>'); //add input box

                    }

                });
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text

                    e.preventDefault(); $(this).parent('div').remove(); x--;

                })

            });

</script>
			

		