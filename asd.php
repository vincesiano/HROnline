<?php

	include('connect.php');

	// $sql = "DELETE FROM tbl_application WHERE `NAME` = 'Rizal'";
	// $result = $conn->query($sql);
	// if ($result) {
		// echo "yey!";
	// }else{
		// echo "failed";
	// }

	//$sql = "SHOW COLUMNS FROM tbl_examresult";
	//$sql = "SELECT reference_no FROM tbl_application WHERE LASTNAME='Patricio'";
	$sql = "INSERT INTO tbl_admin(username,password) values('marvin','a53f3929621dba1306f8a61588f52f55')"; //edward
	//$sql = "SELECT * FROM tbl_essay WHERE APPLICANT_ID='8810'";
	$result = $conn->query($sql);
	//if($result -> num_rows > 0){
		//while($row = $result->fetch_assoc()){
			if($result){
			//print_r($row);
			//echo $row['Answer']."<br>";
			//echo "<br>";
			echo "yay!";
		}
	
	else{
		echo "aaaaaaahhhh";
	}
//}
?>