<?php

session_start();

?>
<link rel = "stylesheet" type = "text/css"  href = "myStyle.css"/>

<div class="wrapper fadeInDown">
  <div id="formContent">

  	<h1>YOUR SCORE!!</h1>

  	<br>

			<h2 class="active"> <?php echo ($_SESSION['score']+1); ?> </h2>

    <br>

    <form action="session.php" method="POST">

    <input type="submit" class="fadeIn fourth" value="EXIT" name = "exit" >

    </form>

  </div>
</div>

<?php
$_SESSION['score']=0;
session_destroy();

?>

