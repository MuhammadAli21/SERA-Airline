<?php
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$subject=$_POST["subject"];
$message=$_POST["message"];

if (!empty($name) || !empty($email) || !empty($contact) || !empty($subject) || !empty($message)){
	
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "sera";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}
	else {
		$INSERT = "INSERT Into contact (name, email, contact, subject, message) values (?,?,?,?,?)";
		//prepare statement
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssiss", $name, $email, $contact, $subject, $message);
		$stmt->execute();
		echo "New record inserted successsfully";
		}
		
		$stmt->close();
		$conn->close();
	}
else{
	echo "All fields are required";
	die();
} 
?>