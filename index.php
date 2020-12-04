<?php



$conn = mysqli_connect('localhost','root','','wdl');
session_start();
   
   if(!isset($_SESSION['user']))
   {
    $_SESSION['indexuser'] = "guest";
    $_SESSION['log'] = "login";
   }
   else{
    
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
         <title>Game World</title> 
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+English|Playfair+Display:900"rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/img/icon.PNG" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/reviews.css">
        
    </head>
    <body id="page-top">

     <!-- <div id="loader" class="loading">
       <div class="loading-logo"><img src="assets/img/game-world.png" class="logo"></div>
   </div>  -->



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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Options">Options</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Games</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact1">Feedback</a></li>
                        <li class="nav-item dropdown"><a class="nav-link js-scroll-trigger dropbtn" href="javascript:void(0)"><?php echo $_SESSION['indexuser'];?></a>
                            <div class="dropdown-content">

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                                <input type="submit" name="log" value="<?php echo $_SESSION['log']; ?>" />
                            </form>
                            </div>
                        </li>
                    </ul>
                </div>
                
                
                <!-- <a class="navbar-brand js-scroll-trigger dropbtn" href="javascript:void(0)"><img src="assets/img/img.jpg" height="5" alt="" style="margin-left: 30px; margin-right:7px" /><?php echo $_SESSION['indexuser'];?></a></li> -->
            </div>
        </nav>    

      

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
    </div>

        <!-- Services-->
        <section class="page-section" id="Options">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Options</h2> -->
                    <p class="ml8"> 
                        <span class="text-wrapper">
                            <span class="letters">Options </span>
                        </span>
                    </p> 
                    <h3 class="section-subheading text-muted">Have a look !</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <a href="https://github.com/RNNWdl/Game-World">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3"><a href="https://github.com/RNNWdl/Game-World">Develop</a></h4>
                        <p class="text-muted">Good to see you here! Want to add your own to this list ?</p>
                    </div>
                    <div class="col-md-4">
                        <a href="#portfolio">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-rocket fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3"><a href="#portfolio" >Play</a></h4>
                        <p class="text-muted">Hello Champ ! Get your hands ready for the game !!</p>
                    </div>
                    <div class="col-md-4">
                        <a href="reviews.php">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-comments fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3"><a href="reviews.php">Our Reviews</a></h4>
                        <p class="text-muted">Know the Feedback from our fellow users!</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Games</h2> -->
                    <p class="ml7"> 
                        <span class="text-wrapper">
                            <span class="letters">Games</span>
                        </span>
</p> 
                    <h3 class="section-subheading text-muted">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there were few games.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/checkers.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Checkers</div>
                                <div class="portfolio-caption-subheading text-muted">Checking mind !?!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/doodle.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Doodle Ship</div>
                                <div class="portfolio-caption-subheading text-muted">Look at your speed !</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/flappy.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Flappy Bird</div>
                                <div class="portfolio-caption-subheading text-muted">How long you can survive?</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/switch.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Guess Game</div>
                                <div class="portfolio-caption-subheading text-muted">Light your luck...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/space.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Space Shooter</div>
                                <div class="portfolio-caption-subheading text-muted">phew phew phew !!!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/snake.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Snake Game</div>
                                <div class="portfolio-caption-subheading text-muted">Grab as much as you can!</div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-sm-6 mb-4 mt-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/dice.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dice</div>
                                <div class="portfolio-caption-subheading text-muted">Who will win ???</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mt-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/Dream-Cricket.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">MYTeam11 Cricket</div>
                                <div class="portfolio-caption-subheading text-muted">Let's play a game</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mt-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/goblin.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Goblin</div>
                                <div class="portfolio-caption-subheading text-muted">Let's catch some Goblins...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paddle.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Paddle Game</div>
                                <div class="portfolio-caption-subheading text-muted">bam bam bam ...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/quiz.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Quiz</div>
                                <div class="portfolio-caption-subheading text-muted">Test your knowledge..</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/speed.PNG" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Typing Speed Game</div>
                                <div class="portfolio-caption-subheading text-muted">Check typing speed!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- About-->
        <!-- <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->







        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Our Amazing Team</h2> -->
                    <p class="ml6"> 
                        <span class="text-wrapper">
                            <span class="letters">Our Amazing Team </span>
                        </span>
</p> 
                    <h3 class="section-subheading text-muted">Simple but Significant</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/nikita.jpeg" alt="" />
                            <h4>Nikita Sarode</h4>
                            <p class="text-muted">Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/SarodeNikita"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/nikita24383"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/nikita-sarode-b62b7917b/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Rakshita.jpg" alt="" />
                            <h4>Rakshita Tantry</h4>
                            <p class="text-muted">Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="mailto:28rakshi@gmail.com"><i class="fa fa-envelope" ></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/RakshitaTantry28"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/rakshita-tantry/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/nidhi.png" alt="" />
                            <h4>Nidhi Vanjare</h4>
                            <p class="text-muted">Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/Nidhi_vanjare"><i class="fab fa-twitter" ></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/nidhivanjare"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/nidhi-vanjare-368b501a4/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> -->
            </div>
        </section>


         <!-- Contact-->
        <section class="page-section bg-light" id="contact1">
            <div class="container">
                <div class="text-center">
                    <!-- <h2 class="section-heading text-uppercase">Contact Us</h2> -->
                    <p class="ml5"> 
                        <span class="text-wrapper">
                            <span class="letters">Feedback </span>
                        </span>
</p>
                    <h3 class="section-subheading text-muted">What do you think ??</h3>
                </div>
                <form id="contact1Form" name="sentMessage" novalidate="novalidate" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <!-- <div id="success"></div> -->
                        <button class="btn btn-primary btn-xl text-uppercase" name="submit" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>


        <?php

                //saving reviews
        $conn = mysqli_connect('localhost','root','','wdl');
        if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number =  $_POST['phone'];
        $review = $_POST['message'];

        $query = "insert into reviews values('$name','$email','$number','$review')";

        $result1 = mysqli_query($conn,$query);

        if(!$result1)
        {
            echo "<script>alert('Try Again !');</script>";
        }
        else
        {
            echo "<script>alert('DoNe!');</script>";
        }



        }

        ?>





        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- Footer-->
        <footer class="footer py-4 ">
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



        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Checkers</h2>
                                    <p class="item-intro text-muted">Checking mind</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/checkers.PNG" alt="" />
                                    <p><ol class="text-left"><li>The player with the white checkers moves first. Checkers may only move one diagonal space forward (toward your opponent’s checkers) 
                                        in the beginning of the game. Remember that checkers must stay on the dark squares.</li><li>Jump and capture your opponent's checkers. 
                                        If your checker is located in the diagonal space nearest to your opponent's checker, then you can jump and capture that checker.</li>
                                        <li>King your checkers when they reach the end of your opponent's board. To crown a checker and make it a king checker, 
                                        simply place one of your own captured pieces on top of it. The king can move forward and backward. </li><li>Keep jumping and capturing. 
                                        Continue jumping and capturing your opponent's checkers until they are all removed from the board. Once you have captured all of your opponent’s checkers, you have won the game!</li></ol></p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Checkers-Game/index.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Doodle Ship</h2>
                                    <p class="item-intro text-muted">Look at your Speed</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/doodle.PNG" alt="" />
                                    <p>In this game you have to control a spaceship, while dodging blocks falling. Your score is increased when a block reaches the bottom</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/doodleship-master/DoodleShip.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Flappy Bird</h2>
                                    <p class="item-intro text-muted">How long you can survive?</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/flappy.PNG" alt="" />
                                    <p>Flappy Bird is an arcade-style game in which the player controls the bird Faby, which moves persistently to the right. The player is tasked with navigating Faby through pairs of pipes that have equally sized gaps placed at random heights.</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/FlappyBird/index.php" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Guess the Switch</h2>
                                    <p class="item-intro text-muted">Light your luck...</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/switch.PNG" alt="" />
                                    <p>The game is all about guessing the right switch! Game has total 6 levels !! In every level you will get 3 attempts to guess !!! Points will be assigned based on the number of attempts you took to guess</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/GuessGame/Index.php" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Space Shooter</h2>
                                    <p class="item-intro text-muted">phew phew phew !</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/space.PNG" alt="" />
                                    <p>Welcome to Space Shooter Game! use the keys to move your spaceship. Collect as many coins as possible a get +20 score and shoot the bombs by click of the mouse to get +10 score. Avoid get hitting by the Bomb. Happy Playing!! </p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/originalspace-shooter/index.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Snake Game</h2>
                                    <p class="item-intro text-muted">Grab as much as you can!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/snake.PNG" alt="" />
                                    <p>The player controls a dot, square, or object on a bordered plane. As it moves forward, it leaves a trail behind, resembling a moving snake. In some games, the end of the trail is in a fixed position, so the snake continually gets longer as it moves. </p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/snake-game/index.php" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal7 -->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Dice</h2>
                                    <p class="item-intro text-muted">Who will win ???</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/dice.PNG" alt="" />
                                    <p>This is a simple casino-style game
                                        
                                        GAME RULES:
                                        - if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
                                        - The player can choose to 'Hold', which means that his ROUND score gets added to his GLOBAL score. 
                                        After that, it's the next player's turn
                                        - The first player to reach 100 points on GLOBAL score wins the game
                                        - You can also set the threshold(minimum wining points) value on your own.</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Dice-game/index.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">MYTeam11 Cricket</h2>
                                    <p class="item-intro text-muted">Let's play a game</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/Dream-Cricket.PNG" alt="" />
                                    <p>This Game will make the user select the team and also gets the points in winning teams.
                                        Firstly, users need to register to the system and then they can log in to the system by entering the username and password.
                                        Users will select the team for them and submit it. 
                                        They can even change the details of their own. Such as username, password, etc.
                                        Have fun!!</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Dream-Cricket/index.php" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 9-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Goblin</h2>
                                    <p class="item-intro text-muted">Let's catch some Goblins...</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/goblin.PNG" alt="" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Goblin/index.php" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 10-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Paddle Game</h2>
                                    <p class="item-intro text-muted">bam bam bam ...</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/paddle.PNG" alt="" />
                                    <p>This game is an interesting addictive fun game. 
                                        Here, the player has to hit the layers of bricks with the small moving ball and destroy them. 
                                        The ball moves straight around the screen by bouncing off the top and two sides of the screen. 
                                       
                                        You just have to use the cursor to move the paddle horizontally as per your requirement.</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/PaddleGame/index.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 11-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Quiz</h2>
                                    <p class="item-intro text-muted">Test your knowledge..</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/quiz.PNG" alt="" />
                                    <p>Answer the pop quiz and test your knowledge!!</p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Quiz/firstpage.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 12-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Typing Speed Game</h2>
                                    <p class="item-intro text-muted">Check typing speed!</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/speed.PNG" alt="" />
                                    <p>This game helps you to improve your Typing speed.  
                                        You just have to type those provided texts without making any mistakes in the field given. 
                                    </p>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-rocket mr-1"></i>
                                        <a href="Games/Typing-speed/index.html" class="text-white">Start Game</a>
                                    </button>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="js/scripts.js"></script>
    </body>
    
</html>
