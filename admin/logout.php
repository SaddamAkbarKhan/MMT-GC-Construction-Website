<?php 

include("./incs/auth.php"); 

unset($_SESSION['user_id']);
unset($_SESSION['user_title']);
unset($_SESSION['logged']);

session_destroy();

header('location:./login.php');