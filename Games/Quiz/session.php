
<?php


$server = 'localhost';
$password = "";
$username = "root";
$dbname="Quiz";

$conn = mysqli_connect("$server","$username","$password","$dbname");

if(!isset($_SESSION['user']))
{
	header("location:firstpage.html");
}

if(isset($_POST["exit"]))
{
	
	header("location:firstpage.html");


}


  
?>