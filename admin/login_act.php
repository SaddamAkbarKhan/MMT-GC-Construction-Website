<?php 

require ("./incs/db.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from users where email = '".$email."' and password = '".$password."'";
// die($sql);

$query = mysqli_query($con, $sql);

$user_count = mysqli_num_rows($query);

if($user_count <= 0){

    $_SESSION['error'] = "Invalid credentials";
    header("location:./login.php");
    die();
}

$user = mysqli_fetch_assoc($query);

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_title'] = $user['username'];
$_SESSION['logged']= true;

$_SESSION['success'] = "Welcome to Dashboard";
header('location:./index.php');