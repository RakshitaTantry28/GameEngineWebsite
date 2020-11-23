<?php

session_start();

$server = 'localhost';
$password = "";
$username = "root";
$dbname="Quiz";

$conn = mysqli_connect("$server","$username","$password","$dbname");

if(isset($_POST["start"]))
{
	$u_name = $_POST['Name'];
	$_SESSION['user'] = $u_name;
	$_SESSION['clicks'] = 0;
	
	header("location:quiz.php");


}

?>