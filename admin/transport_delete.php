<?php 
include("./incs/db.php");

$id = (int) $_GET['trans_del_id'];
$sql = "DELETE FROM transportation WHERE id='$id'";
$query = mysqli_query($con,$sql);

if (!$query) {
    # code...
    echo "Error";
} else {
    header("location:transport_list.php");
}

?>