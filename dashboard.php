<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Game World | Dashboard</title>
        <link rel="icon" type="image/x-icon" href="assets/img/icon.PNG" />
       
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
 
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
       
        <link href="css/styles.css" rel="stylesheet" />
    </head>


    <body id="page-top">
        
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/icon.PNG" alt="" />&nbsp;&nbsp;Game World</a>
                <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" onclick="window.location='index.php'">Home</button>
            </div>
        </nav>
        
        <header class="masthead" >
            <div class="container">
          
                <div class="masthead-heading text-uppercase" style="margin-top:-60px">Game World</div>
                <a class=" btn-primary btn-xl text-uppercase js-scroll-trigger">DASHBOARD</a>
            </div>
        


        <div class="container" style="margin-left:40rem; margin-top:60px; color:#f1f1f1;" class="text-center">

		<?php
			$conn = mysqli_connect('localhost',"root","","wdl");
			if($conn->connect_error){
				die("connection error".$conn->connect_error);
			}else{
				$result = mysqli_query($conn,"select * from dashboard ORDER BY snake_game DESC");
				echo "<table>";
				echo "<tr>";    
				echo "<th style='color:white; padding:10px'>Username</th>";
				echo "<th style='color:white; padding:10px'>Snake Game</th>";
				echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td style='color:#f1f1f1; padding:10px'>".$row['username']."</td>";
					echo "<td style='color:#f1f1f1; padding:10px'>".$row['snake_game']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
        </div>

        </header>
   


    </body>
</html>
