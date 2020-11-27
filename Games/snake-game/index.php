<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>JavaScript Snake Game</title>
  <link rel="stylesheet" href="app.css" />
</head>

<body>
	<div id="info">
		<h1><center>Snake Game</center></h1>
		Speed: <input type="number" id="gameSpeed" value="5" min="1" max="9" step="1" />
		  <input type="button" value="Start" id="gameStart" /><br>
		  
		  
  		Score: <span id="score"></span>
	</div>
	<div id="screen">
  		<canvas id="gameArea"></canvas>
  		<script src="app.js"></script>
	</div>


	<div id ="right">

		<form method="POST" action="<?php $_SERVER['SELF_PHP']; ?>">
			<span id="sc"></span>
			<input type="button" value="EXIT" id="Exit"  name='exit'/>
		</form>

	</div>



</body>

</html>


<?php

include '../../session.php';

$conn = mysqli_connect('localhost','root','','wdl');





?>