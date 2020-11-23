<?php

if (isset($_POST['submit'])) {
	$conn = mysqli_connect('localhost','root','','wdl');
	if ($conn->connect_error) {
		die('connection error'.$conn->connect_error);
	}else{
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$query = "select * from users where username = '$username' && password ='$pass'";
		$result = mysqli_query($conn,$query);

		if (!$result) {
			echo('try again');
		}else{
			header('location:index.html');
		}
	}
}

?>
