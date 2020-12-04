<?php



$conn = mysqli_connect('localhost','root','','wdl');
session_start();
   
   if(!isset($_SESSION['user']))
   {
    $_SESSION['indexuser'] = "guest";
    $_SESSION['log'] = "login";
   }
   else{
    $user_check = $_SESSION['user'];
   
    $result = mysqli_query($conn,"select username from users where username = '$user_check' ");
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $login_session = $row['username'];
    $_SESSION['indexuser'] = $_SESSION['user'];
    $_SESSION['log'] = "logout";
   }



    if(isset($_POST['log'])){
        if($_SESSION['log'] == "login"){
            header('location:login.php');
                }
        else{
            header('location:logout.php');
             }
    }

                ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Game World | Reviews</title>
        <link rel="icon" type="image/x-icon" href="assets/img/icon.PNG" />
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
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/icon.PNG" alt="" />&nbsp;&nbsp;Game World</a>
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
                        <li class="nav-item dropdown"><a class="nav-link js-scroll-trigger dropbtn" href="javascript:void(0)"><?php echo $_SESSION['indexuser'];?></a>
                            <div class="dropdown-content">

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                                <input type="submit" name="log" value="<?php echo $_SESSION['log']; ?>" />
                            </form>
                            </div>
                        </li>
                    </ul>
                </div>
    
            </div>
        </nav>

            <!-- Masthead-->
            <div id="loader" class="loading">
        <div class="loading-logo"></div>
        </div>
   
    <div class="content">
        <div class="glitch">
            <div class="glitchit"></div>
            <div class="glitchit"></div>
            <div class="glitchit"></div>
            <div class="glitchit"></div>
            <div class="glitchit"></div>
        </div>
        <div class="contentSection">
            <h2 class="contentTitle">Game<span>World</span></h2>
            <p class="contentText">Game Set and Match !</p>
            </div>
    </div>>




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


        <script src="js/anime.min.js" ></script>
        <script src="js/animateword.js" ></script>
        <script>
       var loader = document.getElementById('loader');
       window.addEventListener("load", 
        function(event) {
                loader.classList.
        remove('loading');
                loader.classList.add('loaded');
                document.body.classList.
        add('imgloaded');
            });
    </script>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">
    </script>

    </body>
</html>