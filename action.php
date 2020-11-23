<?php


    $conn = mysqli_connect("localhost", "root", "root", "wdl");

    if($conn->connect_error){
        die("connection error".$conn->connect_error);
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $query = "select name from contact where name = '$name'";
        $result = mysqli_query($conn,$query);

        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('Name exists, try again');</script>";
        }else{
            $sql = "insert into contact('name','email','phone','message') values('$name','$email','$phone','$message')";
            $result = mysqli_query($conn,$sql);

            if($result == true){
                echo "<script>alert('Successful');</script>";
            }else{
                echo "<script>alert('Try again');</script>";
            }
        }
    }


?>