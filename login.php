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


        $count = mysqli_num_rows($result);

        if (!($count == 1)){
            echo "<script>alert('Try again');</script>";
            
        }else{
            session_start();
            $_SESSION['user'] = $username;
            header('location:index.php');
            
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Game World | Login</title>
        <link rel="icon" type="image/x-icon" href="assets/img/icon.PNG" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style type="text/css">
        	input{
        		width: 80%;
        	}
        	form{
        		margin: 5%;
        	}
        	body{
        		background-image: url('assets/img/login.png');
        		background-repeat: no-repeat;
        		height: 100vh;
        		background-attachment: scroll;
  				background-position: center center;
  				background-size: cover;
        	}
            button,p{
                margin-top: 2%
            }
        </style>
</head>
<body>
	<section class="page-section">
		<div class="container">
            <div class="text-center">
                <!-- <h1 class="section-heading text-uppercase text-center text-primary">Game <span>World</span></h1> -->
                <h2 class="CTitle">Game<span>World</span></h2>
                <h2 class="section-heading text-uppercase text-white">Login</h2>
			</div>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" name="username" type="text" placeholder="Your username *" required="required" data-validation-required-message="Please enter your username." />
                            </div>
                        <div class="form-group">
                            <input class="form-control" name="pass" type="password" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your password." />
                        </div>
                        <div class="text-center">
                        	<button class="btn btn-primary btn-xl text-uppercase" name="submit" type="submit">Login</button>
                    	</div>
                    	<div class="text-center">
                        	<p class="text-muted">New user?<a href="register.php">Register here!</a></p>
                        </div>
                    </div>
			</form>
		</div>
	</section>
</body>
</html>
