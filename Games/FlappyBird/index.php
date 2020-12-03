<?php

include "session.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Flappy Bird</title>
  <style>
      body{
        text-align: center;
      }
      div{
        display: inline-block;
      }
      #rules{
       float:right; 
       width:50%; 
       margin-top: 5rem;
      }
      #canvas{
        margin: 5rem 2rem;
      }
      @media screen and (max-width: 768px){
        div{
          display: block;
        }
        #rules{
          float: none;
          width: 100%;
        }
        #canvas{
          margin: 2rem 1rem;
        }
      }
    </style>
</head>
<body>
  <h1><center>FLAPPY BIRD</center></h1>
<div>
  <canvas id="canvas" width="288" height="512"></canvas>

   <script src="flappyBird.js?ver<%=DateTime.Now.Ticks.ToString()%>"></script>
</div>

<div id="rules">
  <h1>RULES :</h1>
  <br>
  <h3>1) Use space bar to move up and down 
  <br> <br>
  2) if you hit the bar then you die 
  <br><br>
  3) You can see the score in the game
  <br><br></h3>
  ALL THE BEST !!
  <br><br>

  Score: <span id="score"></span>
  <!-- <form name="score" method="POST" action="<?php $_SERVER['SELF_PHP']; ?>">
    <input type="hidden" id="sc" name="btnClickedValue" value="" /></br>
    <input type = "hidden" value = "Save score" name="submit" id="submit" />
  </form> -->
</div>
</body>

<?php

// if(isset($_POST['submit'])){
// 	// $conn = mysqli_connect('localhost','root','root','wdl');	
// 	$conn = mysqli_connect('localhost','root','','wdl');

//     if ($conn->connect_error) {
//         die('connection error'.$conn->connect_error);
//     }
//     else{
// 		$score = $_POST['btnClickedValue'];
// 		$uname = $_SESSION['user'];

// 		$sql = "select snake_game from dashboard where username = '$uname';";
// 		$result = mysqli_query($conn,$sql);

// 		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// 		// $active = $row['active'];
		
// 		$count = mysqli_num_rows($result);

// 		if ($count > 0) {
// 			$row = $result->fetch_assoc();
// 			if($row['snake_game'] < $score){
// 				$sql1 = "update dashboard SET snake_game = '$score' where username = '$uname';";
// 				if(mysqli_query($conn,$sql1)){
// 					echo "<script>alert('New record created successfully');</script>";
// 					header('location:clear_reload.php');
// 				}else{
// 					echo "<script>alert('try again :(');</script>";
// 				}
// 			}
// 		}else{
// 			echo "<script>alert('try again :(');</script>";
// 		}
// 	}
// }
?>

</html>