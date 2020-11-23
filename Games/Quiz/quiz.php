<?php
$_SESSION['score'] = 0;
session_start();
include 'session.php';

$count=0;

$sc = 0;
$answer="a";

if(isset($_POST['Next']) && $_SESSION['clicks']<5)
{
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
elseif($_SESSION['clicks']>=5)
{
    header("location:score.php");
   
}

$server = 'localhost';
$password = "";
$username = "root";
$dbname="Quiz";

$conn = mysqli_connect("$server","$username","$password","$dbname");

?>


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
     echo "<br> $count: ". $row["ques"] . "<br>";
  }

?>

</h2>

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

