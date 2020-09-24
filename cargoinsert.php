<?php
$Departure=$_POST["Departure"];
$arrival=$_POST["arrival"];
$dept_date=$_POST["dept_date"];
$weight=$_POST["weight"];
$cargo_code=$_POST["cargo_code"];
$sender_name=$_POST["sender_name"];
$reciver_name=$_POST["reciver_name"];
$rec_phone_num=$_POST["rec_phone_num"];
$cnic=$_POST["cnic"];

if (!empty($Departure) || !empty($arrival) || !empty($dept_date) || !empty($weight) || !empty($cargo_code) || !empty($sender_name) || !empty($reciver_name) || !empty($rec_phone_num) || !empty($cnic)){
	
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
		$SELECT = "SELECT cargo_code From cargo where cargo_code = ? Limit 1";
		$INSERT = "INSERT Into cargo (Departure, arrival,  dept_date, weight, cargo_code, sender_name, reciver_name, rec_phone_num, cnic) values (?,?,?,?,?,?,?,?,?)";
		//prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $cargo_code);
		$stmt->execute();
		$stmt->bind_result($cargo_code);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
		$stmt->close();
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssisssii", $Departure, $arrival, $dept_date, $weight, $cargo_code, $sender_name, $reciver_name, $rec_phone_num, $cnic);
		$stmt->execute();
		echo "New record inserted successsfully";
		}
		else{
		echo "someone already register using this cargo_code";
		}
		$stmt->close();
		$conn->close();
	}
	}
else{
	echo "All fields are required";
	die();
} 
?>