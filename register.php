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
                echo "<script>alert('Try again');</script>";
            }else{
                session_start();
                $_SESSION['user'] = $username;
                echo "<script>alert('Registration sucessfully');</script>";
                header('location:index.php');
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Game World | login</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
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
				<h1 class="section-heading text-uppercase text-center text-primary">Game World</h1>
                <h2 class="section-heading text-uppercase text-white">Register</h2>
			</div>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="username" type="text" placeholder="Your Username *" required="required" data-validation-required-message="Please enter your name." />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" type="text" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your password." />
                        </div>
                        <div class="text-center">
                        	<button class="btn btn-primary btn-xl text-uppercase" name="submit" type="submit">Register</button>
                    	</div>
                    	<div class="text-center">
                        	<p class="text-muted">New user?<a href="login.php">login here!</a></p>
                        </div>
                    </div>
			</form>
		</div>
	</section>
</body>
</html>
