<?php
	
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
	
	<div id="mySidenav" class="sidenav" style="background-image: linear-gradient(#F0F8FF, #065653);">
	
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
	
	<a class="navi" href="google.php" "><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;">Application List</h5></a>
	<a class="navi" href="reports.php"><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;">Reports</h5></a>';
   if($_SESSION['id'] == 1){
	  echo '
	  <a class="navi" href="about.php"><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;"> About Us</h5></a>
	  <a class="navi" style="text-align: left;" href="adminloginpage.php"><h5>Log out</h5></a>
	
	  </div>';
   }else{
	   //if($_SESSION['neco'] == 3){
		   echo '<a class="navi" id = "accountAnchor" href="account.php"><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;">Account</h5></a>
		   <a class="navi" href="about.php"><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;"> About Us </h5></a>
				<a class="navi" style="text-align: left;" href="adminloginpage.php"><h5 style="text-align: left; font-size: 18px; font-weight: bold; color: #000000;">Log out</h5></a>
				 </div> ';
	//}
	
}


?>