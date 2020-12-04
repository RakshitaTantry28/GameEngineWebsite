<?php
$_SESSION['score'] = 0;
session_start();
include 'session.php';

$count=0;

$sc = 0;



if(isset($_POST['Next']) && $_SESSION['clicks']<15)
{
    if($_SESSION['clicks'] > 0) {

      $answer = $_POST['ans'];
      $_SESSION['clicks'] += 1 ;
      $count = $_SESSION['clicks'];

      // score
      $value = "select * from answers where sr_no=($count-1)";

      $result1 = mysqli_query($conn,$value);
      $row1 = $result1->fetch_assoc();
      if($row1['ans'] == $answer)
      {
          $_SESSION['score']+= 1;
          $sc = $_SESSION['score'] ;        
    }

  }
  else
  {
     $_SESSION['clicks'] += 1 ;
      $count = $_SESSION['clicks'];
  }


}
elseif($_SESSION['clicks']>=15)
{
    header("location:score.php");
   
}

$server = 'localhost';
$password = "";
$username = "root";
$dbname="wdl";

$conn = mysqli_connect("$server","$username","$password","$dbname");

?>

<title>Game World | Quiz</title>
<link rel="icon" type="image" href="../../assets/img/icon.PNG" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css"  href = "myStyle.css"/>
<center>

<h1>WELCOME <?php echo $_SESSION['user']; ?> , LETS START !!</h1>

</center>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> 
<?php


$q = "select * from questions where sr_no= '$count'";

$result = mysqli_query($conn,$q);

$row = $result->fetch_assoc();
if ($result->num_rows > 0)
  {
     echo "<br>". $row["ques"] . "<br>";
  }

?>

</h2>

<?php

if($count > 0  && $count<=15)

{

?>

<br>
<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >

<input type="radio" name="ans" value="a"> <?php echo $row["a"] . "<br><br>";
?> 
  
<input type="radio" name="ans" value="b"> <?php echo $row["b"] . "<br><br>";
?> 

 
<input type="radio" name="ans" value="c"> <?php echo $row["c"] . "<br><br>";
?> 

 
<input type="radio" name="ans" value="d"> <?php echo $row["d"] . "<br><br>";
?> 

<input type="submit" value="Next" name="Next" > 

</form>


</div>
</div>


<?php

}

elseif($count == 0)
{
  ?>

  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >

    <br>

<input type="submit" value="Next" name="Next" > 

</form>

<?php

}

?>

