<?php

    session_start();
    session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Game World | Lgout</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
         <title>Game World | Logout</title> 
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
        
</head>


<body>

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
            <div class="text-center">
            <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger mr-2 " onclick="window.location='index.php'">Home</button>
            <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger ml-2" onclick="window.location='login.php'">Login</button>
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