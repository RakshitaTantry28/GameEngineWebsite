<?php

session_start();

$server = 'localhost';
$password = "";
$username = "root";
$dbname="wdl";

$conn = mysqli_connect("$server","$username","$password","$dbname");

if(isset($_POST["start"]))
{
	$u_name = $_POST['Name'];
	$_SESSION['user'] = $u_name;
	$_SESSION['clicks'] = 0;
	
	header("location:quiz.php");


}
if(isset($_POST["exit"]))
{
	
	
	header("location:http://192.168.64.2/Game-World/index.php");


}

?>