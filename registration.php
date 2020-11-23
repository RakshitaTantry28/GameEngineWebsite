<?php

if (isset($_POST['submit'])) {
	$conn = mysqli_connect('localhost','root','','wdl');
	if ($conn->connect_error) {
		die('connection error'.$conn->connect_error);
	}else{
		$name1 = $_POST['name'];
		$username1 = $_POST['username'];
		$password1 = $_POST['password'];

		$query = 'select * from users where username = "$username1"';
		$result = mysqli_query($conn,$query);

		if (mysqli_fetch_row($result) == 1) {
			echo "username exists";
		}else{
			$query1 = "insert into users values('$name1','$username1','$password1')";
			$result1 = mysqli_query($conn,$query1);

			if (!$result1) {
				echo "try again";
			}else{
				echo "success";
			}
		}
	}
}

?>
