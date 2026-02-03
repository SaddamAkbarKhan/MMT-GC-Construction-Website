<?php

session_start();

if(!$_SESSION['logged']){
    $_SESSION['error'] = "Un-authorized access";
    header('location:./login.php');
}