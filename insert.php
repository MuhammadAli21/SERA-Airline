<?php
$Departure=$_POST["Departure"];
$arrival=$_POST["arrival"];
$room=$_POST["room"];
$class=$_POST["class"];
$dept_date=$_POST["dept_date"];
$age=$_POST["age"];
$trip=$_POST["trip"];
$return_date=$_POST["return_date"];
$message=$_POST["message"];
$full_name=$_POST["full_name"];
$phone_num=$_POST["phone_num"];
$email=$_POST["email"];
$cnic=$_POST["cnic"];
$passport_num=$_POST["passport_num"];

if (!empty($Departure) || !empty($arrival) || !empty($room) || !empty($class) || !empty($dept_date) || !empty($age) || !empty($trip) || !empty($return_date) || !empty($message) || !empty($full_name) || !empty($phone_num) || !empty($email) || !empty($cnic) || !empty($passport_num)){
	
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
		$SELECT = "SELECT email From passenger where email = ? Limit 1";
		$INSERT = "INSERT Into passenger (Departure, arrival, room, class, dept_date, age, trip, return_date, message, full_name, phone_num, email, cnic, passport_num) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		//prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum==0) {
		$stmt->close();
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssssssssssisii", $Departure, $arrival, $room, $class, $dept_date, $age, $trip, $return_date, $message, $full_name, $phone_num, $email, $cnic, $passport_num);
		$stmt->execute();
		echo "New record inserted successsfully";
		}
		else{
		echo "someone already register using this email";
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