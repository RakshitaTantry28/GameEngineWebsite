<?php

$conn = mysqli_connect('localhost','root','','wdl');
session_start();
   
   $user_check = $_SESSION['user'];
   
   $result = mysqli_query($conn,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['user'])){
      header("location:login.php");
      die();
   }

?>
