<?php 
include("./incs/db.php");

$id = (int) $_GET['team_del_id'];
$sql = "DELETE FROM team WHERE id='$id'";
$query = mysqli_query($con,$sql);

if (!$query) {
    # code...
    echo "Error";
} else {
    header("location:team_list.php");
}

?>