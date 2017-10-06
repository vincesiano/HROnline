

<html>
<?php
include('auth.php');
	$_SESSION['previous-page'] = 'account.php';
unset($_SESSION['neco']);
//$_SESSION['neco'] = 3;
	$postx = "";
	$desctx = "";
	$stattx = "";
	$ererrormsg="";
	$usererrormsg = "";
				$emailerror = "";
				$erroremail = "";
				$whitespaceerror = "";
				$errormsg = "";		
				include 'connect.php';
				

				if (isset ($_POST['postx']) && isset($_POST
				['desctx']) && isset($_POST
				['stattx'])){
					$positions = mysqli_real_escape_string($conn,$_POST['postx']);
					$position = $_POST['postx'];
					$desc = $_POST['desctx'];
					$stat = $_POST['stattx'];
					$positions = mysqli_real_escape_string($conn,$_POST['postx']);
					$sql = "SELECT * FROM tbl_position WHERE position_name = '$positions'";
					$res = $conn->query($sql);
					$row = $res->fetch_assoc();
					
					if ($_SESSION["positions"]= $row['position_name']){
						session_start();
						$ererrormsg = "Position Already Exist!";
						
					}
					else{
					$query = "INSERT INTO `tbl_position` (position_name, position_desc,status) VALUES ('$position','$desc','$stat')";
					$result = mysqli_query($conn, $query);
					if($result){
						header('Location:google.php');
					}
					else{
						$errormsg = "Unsuccessful!";
					}
					}
				}
					
?>
   
   <head>
      <title>Add New Position</title>
      
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.material.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/tether.css">
    <style type="text/css">
    a:hover{
		color:white;
	}
	.navi:hover{
                color:white;  
                background-color: #00008B;
            }
	a.active {background-color:#1a1a1a;}


   </head>
   
   <body>
   <?php
	

	$id = $_GET['id'];
		echo '
	<style>
		h5 {
			color:black;

		}
		h5:hover {
			color:white;
			
		}
		.navi:hover{
			background-color: #00008B;
			color: white;
		}
	</style>
	
	<div id="mySidenav" class="sidenav" style="background: url(pic4.jpg);">
	
	<img src="adg1.png" class="img-responsive" width="60%" style="margin-bottom: 10%; margin-left: 4em;">
	<img src="adg.png" class="img-responsive"  width="100%" style=" padding: 5px; margin-top: 5px; margin-bottom: 20%;">
	<a href="javascript:void(0)" class="closebtn" style="color:black;" onclick="closeNav()">&times;</a> ';
	
	/*
	if($_SESSION['neco'] == 1)
		  echo'
			<a href="google.php" style="background-color: #262626"><h5>Application List</h5></a>
			<a style="text-align: left;" href="reports.php"><h5>Reports</h5></a>';
	}
	else if($_SESSION['neco'] == 2){
		echo'
			<a href="google.php"><h5>Application List</h5></a>
			<a style="text-align: left; background-color: #262626; href="reports.php"><h5>Reports</h5></a>';
	}
	else if($_SESSION["neco"] == 3){
		echo'
			<a href="google.php"><h5>Application List</h5></a>
			<a style="text-align: left;" href="reports.php"><h5>Reports</h5></a>';
	}
	*/
	echo' 
	
	<a class="navi" href="google.php?id='.$id.'"><h5>Application List</h5></a>
	<a class="navi" style="text-align: left;" href="reports.php?id='.$id.'"><h5>Reports</h5></a>
	<a class="navi" style="text-align: left;" href="addNewPosition.php?id='.$id.'"><h5>Add Position</h5></a>
	<a class="navi" style="text-align: left;" href="createAccount.php?id='.$id.'"><h5>Create User Accounts</h5></a>
	<a class="navi" style="text-align: left;" href="user_logs.php?id='.$id.'"><h5>User History Logs</h5></a>';
   if($_SESSION['id'] == 1){
	  echo '
	  <a class="navi" href="about.php?id='.$id.'" style="font-size: 1em; margin-bottom:1em;"> About Us</a>
	 
	  <a class="navi" style="text-align: left;" href="adminloginpage.php"><h5>Log out</h5></a>
		
	  </div>';
   }else{
	   //if($_SESSION['neco'] == 3){
		   echo '<a class="navi" id = "accountAnchor" style="text-align: left;" href="account.php?id='.$id.'"><h5>Account</h5></a>
		   <a class="navi" href="about.php"><h5> About Us </h5></a>
				<a class="navi" style="text-align: left;" href="adminloginpage.php"><h5>Log out</h5></a>
				 </div> ';
	//}
	
}

	?>
	<div id="main">
	<nav style="width:103.25%;  margin-left:-2%; background-color:transparent">
			 <div class="container-fluid">
				<ul class="nav navbar-nav">
				  <h5 style="cursor:pointer; color:#00008B; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:10px; padding-right:10px; padding-left:10px" onclick="openNav()"><i class="fa fa-bars"></i> Menu</h5>
				</ul>
            </div>


   <hr style="padding-bottom: 1%">

   <div class="row">

		<div class="col-md-1"></div>
		<div class="col-md-10">
	    <div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="col-md-1"></div>
		<div class="col-md-11">

          <div class="row" style="text-align: center padding-top:50px">
				<div class="col-md-12">
					<div class="col-md-12 card">

  			<legend style="text-align: center"> <br> Add Position</legend>
     
					<!-- lastname, firstname, middlename, email, username, password, role -->
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							
							<form role="form" name="createform">


                               <div class="form-group">
						      <label class="col-md-2 control-label" for ="postx"><b>Position:</b></label>
						      <div class="col-md-2"></div>
						      <div class="col-md-8">
									<input type="text" class="form-control" name="postx"  required><br>
									<span class="col-sm-offset-2 col-sm-12 error"><?php echo $usererrormsg; echo $whitespaceerror;?></span>
								</div>
								</div>
							<div class="form-group">
						     <label class="col-md-2 control-label" for ="desctx"><b>Description:</b></label>
						      <div class="col-md-2"></div>
						      <div class="col-md-8">
									<input type="text" class="form-control" id="desc" name="desctx"required>
								</div>
								</div>
								<div class="form-group">
						     <label class="col-md-2 control-label" for ="role"><br><br><br><b>Status:</b></label>
						      <div class="col-md-2"></div>
						      <div class="col-md-8">
						     <input type="text" class="form-control" id="role" name="role"  required>
								
								</div>
								</div>


								<a href = "google.php">
								<button type="submit" id="butt" class="btn btn-sm btn-raised pull-right btn-primary">Add</button></a>
								 <p><span style="color:red;"><?php echo $errormsg;?></span></p>
								   <div class="col-md-1"></div>
						      <div class="col-md-8">
							</form>	

						</form>
						
						
						
			</div>
				</div>
			</div>

		</div>
		
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
	<script type="text/javascript" src="js/material.js"></script>
	<script type="text/javascript" src="js/jquery.dropdown.js"></script>
	<script type="text/javascript" src="js/dataTables.material.js"></script>	
	<!-- <script type="text/javascript" src="js/dataTables.bootstrap.js"></script> -->
	<script type="text/javascript" src="js/bootstrap-clockpicker.js"></script>
	<script type="text/javascript" src="js/tether.js"></script>
	<script type="text/javascript">
		var idleTime = 0;
		

		 
		function anotherfunction(){
			$('#sureroll').modal('show');
			$('#myModal').modal('hide');
		}
		function openNav() {
		    document.getElementById("mySidenav").style.width = "300px";
		    document.getElementById("main").style.marginLeft = "300px";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		    document.getElementById("main").style.marginLeft= "0";
		}
</script>

 <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/material.js"></script>
  
	<script src="js/bootstrap.min.js"></script>
	<style>
		#select{
			width:150px;
		}
		#select option{
			width:150px;
		}
	
	</style>
</body>
</html>