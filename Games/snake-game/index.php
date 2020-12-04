<?php

include "session.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Game World | Snake Game</title>
	<link rel="icon" type="image" href="../../assets/img/icon.PNG" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta charset="UTF-8" />
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  	<link rel="stylesheet" href="app.css" />
</head>

<body>
	<div id="info">
		<h1>Snake Game</h1>
		Speed: <input type="number" id="gameSpeed" value="5" min="1" max="9" step="1" />
		  <input type="button" value="Start" id="gameStart" /><br>
  		Score: <span id="score"></span>

		  <form name="score" method="POST" action="<?php $_SERVER['SELF_PHP']; ?>">
			<input type="hidden" id="sc" name="btnClickedValue" value="" /></br>
			<input type = "hidden" value = "Save score" name="submit" id="submit" />

			<input type="button" name="EXIT" value="EXIT" onclick="window.location.href='../../index.php#portfolio'"/>
		</form>

	</div>
	<div id="screen">
  		<canvas id="gameArea"></canvas>
  		<script src="app.js"></script>
	</div>

</body>

</html>


<?php

if(isset($_POST['submit'])){
	$conn = mysqli_connect('localhost','root','','wdl');

    if ($conn->connect_error) {
        die('connection error'.$conn->connect_error);
    }
    else{
		$score = $_POST['btnClickedValue'];
		$uname = $_SESSION['user'];
		echo $uname;

		$sql = "select snake_game from dashboard where username = '$uname';";
		$result = mysqli_query($conn,$sql);

		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		// $active = $row['active'];
		
		$count = mysqli_num_rows($result);

		if ($count > 0) {
			$row = $result->fetch_assoc();
			echo "1";
			if($row['snake_game'] < $score){
				echo "2";
				$sql1 = "update dashboard SET snake_game = '$score' where username = '$uname';";
				if(mysqli_query($conn,$sql1)){
					echo "3";
					echo "<script>alert('New record created successfully');</script>";
					header('location:clear_reload.php');
				}else{
					echo "4";
					echo "<script>alert('try again :(');</script>";
				}
			}
		}else{
			echo "<script>alert('try again :(');</script>";
		}
	}
}
?>
