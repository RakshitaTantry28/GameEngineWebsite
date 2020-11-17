<?php

//session_start();

#$name = $_POST['Name'];

$server = 'localhost';
$password = "";
$username = "root";
$dbname="Quiz";

$conn = mysqli_connect("$server","$username","$password","$dbname");

?>


<link rel = "stylesheet" type = "text/css"  href = "myStyle.css"/>
<center>

</center>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> 
<?php

$count = 1;
$score = 0;


$q = "select ques from questions where sr_no= '$count'";
$qa = "select a from questions where sr_no= '$count'";
$qb = "select b from questions where sr_no= '$count'";
$qc = "select c from questions where sr_no= '$count'";
$qd = "select d from questions where sr_no= '$count'"; 

$result = mysqli_query($conn,$q);
$result_a = mysqli_query($conn,$qa);
$result_b = mysqli_query($conn,$qb);
$result_c = mysqli_query($conn,$qc);
$result_d = mysqli_query($conn,$qd);


$row = $result->fetch_assoc();

if ($result->num_rows > 0)
	{
		 echo "<br> $count: ". $row["ques"] . "<br>";
	}

?>

</h2>

<br>
<?php
$row = $result_a->fetch_assoc();
?>

<form method="GET">

<input type="radio" name="ans" value="a"> <?php echo $row["a"] . "<br><br>";
$row = $result_b->fetch_assoc();
?>

<input type="radio" name="ans" value="b"> <?php echo $row["b"] . "<br><br>";
$row = $result_c->fetch_assoc();
?>

<input type="radio" name="ans" value="c"> <?php echo $row["c"] . "<br><br>";
$row = $result_d->fetch_assoc(); 
?>

<input type="radio" name="ans" value="d"> <?php echo $row["d"] . "<br><br>";
?>


<input type="submit" value="Next" name="Next"> 

</form>


</div>
</div>


<?php

$ans = "select ans from answers where sr_no='$count'";
$result_ans = mysqli_query($conn,$ans);
$row = $result_ans->fetch_assoc();

$answer = $_GET['ans'];

$value = $row["ans"];

if ("$answer" == "$value") {
	# code...
	$score++;
}


?>

