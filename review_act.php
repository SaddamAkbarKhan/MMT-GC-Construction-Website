<?php
include("./inc/db.php");

$name  =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$sql = "INSERT INTO reviews(name, email, subject, message) 
                VALUES ('$name','$email','$subject','$message')";
$query = mysqli_query($con, $sql);
if(!$query) {
    header("location:./index.php");
} else {
    header("location:./index.php");
}
?>