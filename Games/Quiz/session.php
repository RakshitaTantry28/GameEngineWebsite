
<?php


$server = 'localhost';
$pas = "";
$name = "root";
$dbname="Quiz";

$conn = mysqli_connect("$server","$name","$pas","$dbname");

if(!isset($_SESSION['user']))
{
	header("location:firstpage.html");
}

if(isset($_POST["exit"]))
{
	
	header("location:firstpage.html");


}


  
?>