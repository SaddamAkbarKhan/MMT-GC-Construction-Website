<?php 

require "./incs/auth.php";

require ("./incs/db.php");

// var_dump($_POST);die();

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$cnew_password = $_POST['cnew_password'];

if($new_password != $cnew_password){
    $_SESSION['error'] = "New and Confirm new password does not match.";
    header("location:./change_password.php");
    die('here');
}


$sql = "select * from users where id = :user_id and password = :password ";
// die($sql);

$stm = $con->prepare($sql);
$cur_pass_sha = sha1($current_password);

$stm->bindParam(':user_id', $_SESSION['user_id']);
$stm->bindParam(':password', $cur_pass_sha);

$stm->execute();
$user_count = $stm->rowCount();
if($user_count <= 0){
    $_SESSION['error'] = "Your current password is invalid";
    header("location:./change_password.php");
    die();
}

$new_pass = sha1($new_password);
$usql = "update users set password = '$new_pass' where id = :user_id";
$ustm = $con->prepare($usql);
$ustm->bindParam(":user_id", $_SESSION['user_id']);

if($ustm->execute()){
    $_SESSION['success'] = "Password updated successfully";
    header("location:./change_password.php");
}else{
    $_SESSION['error'] = "Something went wrong, please try later";
    header("location:./change_password.php");
}