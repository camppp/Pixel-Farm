<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("PRC");  
$servername = "localhost";
$username = "camppp111";
$password = "1999422";
$dbname = "camppp111";
$time = time();
$nowtime = (string)date('Y-m-d-H-i-s',$time);
$name = $_GET["w1"];
$email = $_GET["w2"];
$message = $_GET["w3"];
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8mb4');       // object oriented style
mysqli_set_charset($conn, 'utf8mb4');  // procedural style
if ($conn->connect_error) {
	die("no: " . $conn->connect_error);
}
$sql = "INSERT INTO logs (Name, Email, Message, Time) VALUES ('".$name."', '".$email."', '".$message."', '".$nowtime."')";
if ($conn->query($sql) === TRUE) {
	echo "Message successfully sent ;), it may take a few days for me to get back to you, because I don't check the database very often :)";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: HACK/hack.php"); 
?>