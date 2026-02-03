<?php 
include("./incs/db.php");

$id = (int) $_GET['con_del_id'];
$sql = "DELETE FROM constructions WHERE id='$id'";
$query = mysqli_query($con,$sql);

if (!$query) {
    # code...
    echo "Error";
} else {
    header("location:constructions_list.php");
}

?>