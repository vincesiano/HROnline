<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "bobo";

// creating connection of mysqli // 

$conn = new mysqli($server, $user, $pass, $dbname);

// checking connection //

if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);	 	
}
$yearsofexperience = $_POST['yearsofexperience'];
$date = $_POST['date'];
$company_name = $_POST['company_name'];
$account = $_POST['account'];
$role = $_POST['role'];
$lineofbusiness = $_POST['lineofbusiness'];
$reason = $_POST['reason'];

$sql = "INSERT INTO form (yearsofexperience, date) VALUES ('$yearsofexperience','$date')";

$query = "INSERT INTO form1 (company_name, account, role) VALUES ('$company_name','$account','$role')";

$sqli = "INSERT INTO form2 (lineofbusiness, reason) VALUES ('$lineofbusiness','$reason')";



if($conn->query($sql) === True) {
  echo "Record Added Successfully";
}
	else
	{
		echo "error" .$sql . "<br />" . $conn->error;

	}


if($conn->query($query) === true){
	echo "";
}
	else
	{
		echo "error" .$query . "<br />" . $conn->error;
	}
if($conn->query($sqli) ===true){
	echo "";
}
	else
	{
		echo "error" .$sqli . "<br />" . $conn->error;
	}






$conn->close();

?>