<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Game World | Flappy Bird</title>
  <link rel="icon" type="image" href="../../assets/img/icon.PNG" />
	<style>
      body{
        text-align: center;
      }
      div{
        display: inline-block;
      }
      .rules{
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
        .rules{
          display: none;
        }
      }
    </style>
</head>
<body>
<div>
  <canvas id="canvas" width="288" height="512"></canvas>

   <script src="flappyBird.js"></script>
</div>

<div class="rules">
	<h1>RULES :</h1>
	<br>
	<h3>1) Use space bar to move up and down 
	<br> <br>
	2) if you hit the bar then you die 
	<br><br>
	3) You can see the score in the game
	<br><br></h3>
  ALL THE BEST !!

  <br>
  <br>
  
  <button style="padding: 14px 40px;">
    <a href="../../index.php#portfolio" class="text-white" style="text-decoration: none;">EXIT</a>
  </button>

</div>



</body>
</html>