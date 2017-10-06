
<?php
include('auth.php');
$_SESSION['previous-page'] = 'createAccount.php';


				$ln = "";
				$fn = "";
				$mn = "";
				$em = "";
				$em2 = "";
				$contact = "";
				$us = "";
				$pas = "";
				$pas2 = "";
				$usererrormsg = "";
				$emailerror = "";
				$erroremail = "";
				$whitespaceerror = "";
				$errormsg = "";		
?>
	<html>
   
   <head>
      <title>Create Account</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/ripples.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.material.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/tether.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<style type="text/css">
    a:hover{
		color:white;
	}
	.navi:hover{
                color:white;  
                background-color: #00008B;
            }
	a.active {background-color:#1a1a1a;}
	box-sizing: border-box;
}
* {
  outline: none;
}
::-webkit-scrollbar {
  display: none;
}
/* */
.container {
  margin: 0 auto;
  max-width: 400px;
  text-align: center;
}
.selected-item {
  margin: 20px 0;
}
/* custom select style */
.cusSelBlock {
  height: 50px;
  min-width: 250px;
}
#cusSelectbox {
  height: 100%;
  width: 100%;
}
.s-hidden {
  visibility: hidden;
}
.cusSelBlock {
  display: inline-block;
  position: relative;
  -webkit-perspective: 800px;
  perspective: 800px;
}
.selectLabel {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9999;
  background-color: #fff;
  border: 1px solid #333;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  color: #333;
  cursor: pointer;
  display: block;
  height: 100%;
  width: 100%;
  letter-spacing: 2px;
  line-height: 50px;
  padding: 0 50px 0 20px;
  text-align: left;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transition: -webkit-transform 300ms;
  transition: -webkit-transform 300ms;
  transition: transform 300ms;
  transition: transform 300ms, -webkit-transform 300ms;
  -webkit-backface-visibility: hidden;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.selectLabel:after {
  content: '\25BC';
  border-left: 1px solid #333;
  color: #333;
  font-size: 12px;
  line-height: 17px;
  padding: 10px;
  text-align: center;
  position: absolute;
  right: 0px;
  top: 15%;
  height: 70%;
  width: 50px;
}
.selectLabel:active {
  -webkit-transform: rotateX(30deg);
  transform: rotateX(30deg);
}
.selectLabel:active:after {
  content: '\25B2';
}
.selectLabel.active:after {
  content: '\25B2';
}
::-webkit-scrollbar {
  display: none;
}
.options {
  position: absolute;
  top: 50px;
  height: 1px;
  width: 100%;
}
.options li {
  background-color: #ffffff;
  border-left: 1px solid #333;
  border-right: 1px solid #333;
  border-bottom: 1px solid #333;
  cursor: pointer;
  display: block;
  line-height: 50px;
  list-style: none;
  opacity: 1;
  padding: 0 50px 0 20px;
  text-align: left;
  -webkit-transition: -webkit-transform 300ms ease;
  transition: -webkit-transform 300ms ease;
  transition: transform 300ms ease;
  transition: transform 300ms ease, -webkit-transform 300ms ease;
  position: absolute;
  top: -50px;
  left: 0;
  z-index: 0;
  height: 50px;
  width: 100%;
}
.options li:hover,
.options li.active {
  background-color: #333;
  color: #fff;
}
.options li:nth-child(1) {
  -webkit-transform: translateY(2px);
  transform: translateY(2px);
  z-index: 6;
}
.options li:nth-child(2) {
  -webkit-transform: translateY(4px);
  transform: translateY(4px);
  z-index: 5;
}
.options li:nth-child(3) {
  z-index: 4;
}
.options li:nth-child(4) {
  z-index: 3;
}
.options li:nth-child(5) {
  z-index: 2;
}
.options li:nth-child(6) {
  z-index: 1;
}

</style>
      
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
  <div class="col-md-4"></div>


                    <div class="col-md-4">
					<div class="col-md-12 card">

  			<legend style="text-align: center"> <br> Create Account</legend>
     
					<!-- lastname, firstname, middlename, email, username, password, role -->
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							
							<form role="form" name="createform">


                               <div class="form-group">
						      <label class="col-md-2 control-label" for ="usertx"><b>Username:</b></label>
						      <div class="col-md-1"></div>
						      <div class="col-md-8">
									<input type="text" class="form-control" name="ustx"  required><br>
									<span class="col-sm-offset-2 col-sm-12 error"><?php echo $usererrormsg; echo $whitespaceerror;?></span>
								</div>
								</div>
								


							<div class="form-group">
						     <label class="col-md-2 control-label" for ="passtx"><b>Password:</b></label>
						      <div class="col-md-1"></div>
						      <div class="col-md-8">


									<input type="password" class="form-control" id="password" name="passtx" data-toggle="popover" title="Password Strength" required>
								</div>
								</div>




								<div class="form-group">
						     <label class="col-md-2 control-label" for ="desctx"><br><br><br><b>Role:</b></label>
						      <div class="col-md-1"></div>
						      <div class="col-md-8">
						      <br><br>
										<select name="cusSelectbox" id="cusSelectbox">
											<option value="Select">Select</option>
											<option value="Admin">Admin</option>
											<option value="User">User</option>
											
										</select>
										<?php

				include 'connect.php';

				if (isset ($_POST['ustx']) && isset($_POST
				['passtx'])){
					$username = $_POST['ustx'];
					//$password = $_POST['passtx'];
					$role = $_POST['cusSelectbox'];
					$pas = (md5(mysqli_real_escape_string($conn, $_POST["passtx"])));
					$query = "INSERT INTO `tbl_admin` (username, password,role) VALUES ('$username','$pas','$role')";
					$result = mysqli_query($conn, $query);
					if($result){
					   $errormsg = "Account Successfully Created!";
					}
					else{
						$errormsg = "Unsuccessful!";
						
					}
					echo '<script type="text/javascript">alert("'.$errormsg.'");
									</script>';
				}

				?>
									    <br><br>
								</div>


								
								<button type="submit" id="butt" class="btn btn-sm btn-raised pull-right btn-primary">Create Account</button>
								 <p><span style="color:red;"><?php ;?></span></p>
								   <div class="col-md-1"></div>
						      <div class="col-md-8"></div>
						      </div>
							</form>	

						</form>
						</div>
						</div>
						</div>
						</nav>
						
						
						
			
				
		
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

  
	  <script type="text/javascript">
    $.material.init();
    $(document).ready(function() {
     //$('select').material_select();
    });
     $(function () {

	var defaultselectbox = $('#cusSelectbox');
	var numOfOptions = $('#cusSelectbox').children('option').length;

	// hide select tag
	defaultselectbox.addClass('s-hidden');

	// wrapping default selectbox into custom select block
	defaultselectbox.wrap('<div class="cusSelBlock"></div>');

	// creating custom select div
	defaultselectbox.after('<div class="selectLabel"></div>');

	// getting default select box selected value
	$('.selectLabel').text(defaultselectbox.children('option').eq(0).text());

	// appending options to custom un-ordered list tag
	var cusList = $('<ul/>', { 'class': 'options'} ).insertAfter($('.selectLabel'));

	// generating custom list items
	for(var i=0; i< numOfOptions; i++) {
		$('<li/>', {
		text: defaultselectbox.children('option').eq(i).text(),
		rel: defaultselectbox.children('option').eq(i).val()
		}).appendTo(cusList);
	}

	// open-list and close-list items functions
	function openList() {
		for(var i=0; i< numOfOptions; i++) {
			$('.options').children('li').eq(i).attr('tabindex', i).css(
				'transform', 'translateY('+(i*100+100)+'%)').css(
				'transition-delay', i*30+'ms');
		}
	}

	function closeList() {
		for(var i=0; i< numOfOptions; i++) {
			$('.options').children('li').eq(i).css(
				'transform', 'translateY('+i*0+'px)').css('transition-delay', i*0+'ms');
		}
		$('.options').children('li').eq(1).css('transform', 'translateY('+2+'px)');
		$('.options').children('li').eq(2).css('transform', 'translateY('+4+'px)');
	}

	// click event functions
	$('.selectLabel').click(function () {
		$(this).toggleClass('active');
		if( $(this).hasClass('active') ) {
			openList();
			focusItems();
		}
		else {
			closeList();
		}
	});

	$(".options li").on('keypress click', function(e) {
		e.preventDefault();
		$('.options li').siblings().removeClass();
		closeList();
		$('.selectLabel').removeClass('active');
		$('.selectLabel').text($(this).text());
		defaultselectbox.val($(this).text());
		$('.selected-item p span').text($('.selectLabel').text());
	});
	
});

function focusItems() {

	$('.options').on('focus', 'li', function() {
		$this = $(this);
		$this.addClass('active').siblings().removeClass();
	}).on('keydown', 'li', function(e) {
		$this = $(this);
		if (e.keyCode == 40) {
			$this.next().focus();
			return false;
		} else if (e.keyCode == 38) {
			$this.prev().focus();
			return false;
		}
	}).find('li').first().focus();

}


  </script>

	<script src="js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


	<!-- <style>
		#select{
			width:150px;
		}
		#select option{
			width:150px;
		}
	
	</style> -->
</body>
</html>