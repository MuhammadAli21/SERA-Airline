<?php

$host="localhost";
$user="root";
$pass="";
$db="sera";


	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "sera";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}

if(isset($_POST['email'])){

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="select * from login where email='".$email."' and password='".$password."' limit 1";

	$result=mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)==1){
		echo " You have successfully log in";
		exit();
	}
	else{
		echo " You have entered incorrect email or password";
		exit();
	}
	$conn->close();
}
?>