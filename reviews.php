<?php

$conn = mysqli_connect('localhost','root','','wdl');
session_start();
   
   if(!isset($_SESSION['user'])){
    $_SESSION['indexuser'] = "guest";
   }
   else{
    $user_check = $_SESSION['user'];
   
    $result = mysqli_query($conn,"select username from users where username = '$user_check' ");
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $login_session = $row['username'];
    $_SESSION['indexuser'] = $_SESSION['user'];

   }




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Game World | reviews</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/reviews.css" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top">



        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="" alt="" />Game World</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#Options">Options</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#portfolio">Games</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php#contact1">Feedback</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" class="text-danger"></li> -->
                    </ul>
                </div>
                <a class="navbar-brand js-scroll-trigger" href=""><img src="" alt="" style="margin-left: 20px" /><?php if($_SESSION['user']){ echo $_SESSION['user'];}else{ echo "Guest";} ?></a>
            </div>
        </nav>

            <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <!-- <div class="masthead-subheading">Game Set and Match !</div>
                <div class="masthead-heading text-uppercase">Game World</div> -->
                <h2 class="contentTitle">Game<span>World</span></h2>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="index.php#portfolio">Let's go</a>
            </div>
        </header>




        <section >


        <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Options</h2> -->
                    <p class="ml8"> 
                        <span class="text-wrapper">
                            <span class="letters">REVIEWS </span>
                        </span>
                    </p> 
                </div>

        <?php

        $conn = mysqli_connect('localhost','root','','wdl');
        if ($conn->connect_error) {
            die('connection error'.$conn->connect_error);
        }
        else
        {
            $query = "select * from reviews";
            $result = mysqli_query($conn,$query);

            if (!($result)) {
                echo "No comments yet :(";
            }
            else
            {
                while($row = mysqli_fetch_assoc($result)) {

                    ?>

                    <!-- echo "<blockquote>".$row['name']."<br>".$row['review']."</blockquote>"; -->

                     <div class="card mx-auto my-4 " style="width:1000px;">
          <div class="card-header text-white bg-dark" style="backgroung-color:#003991 ; color:#ffffff; ">
            <?php echo $row['name'];?>
          </div>
          <div class="card-body" class="text-primary">
            <p class="card-text"><?php echo $row['review'];?></p>
          </div>
        </div>

                    <?php
                }
              
            }
        }

        ?>

       

    </section>


       


        <!-- Footer-->
        <footer class="footer py-4 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/RNNWdl/Game-World"><i class="fab fa-github"></i></a>
                        <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/animateworld.js" >
        <script src="js/anime.min.js" >

    </body>
</html>