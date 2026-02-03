<?php 
include("./incs/db.php");

$id = (int) $_GET['proj_del_id'];
$sql = "DELETE FROM projects WHERE id='$id'";
$query = mysqli_query($con,$sql);

if (!$query) {
    # code...
    echo "Error";
} else {
    header("location:projects_list.php");
}

?>