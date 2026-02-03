<?php 
include("./incs/db.php");

$team_up_id = (int) $_POST['team_up_id'];


$name = $_POST['name'];
$designation = $_POST['designation'];



$team_image = null;
if($_FILES['image']['size'] > 0) {
    $image = $_FILES['image']['name'];
    $allow = array('jpg','png','icon', 'jpeg');
    $path = pathinfo($image, PATHINFO_EXTENSION);
    $team_image = time().'.'.$path;

    if(!in_array($path, $allow)) {
        echo "Files not supported";
        header("location:./constructions_list.php");
        die();
    }

    if(!move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/team_images/".$team_image)) {
        echo "path error";
        header("location:./team_list.php");
        die();
    }
}

$sql = "update team set
                name='$name',
                designation='$designation'
                ";
    if(!is_null($team_image)) {
        $sql .= ", image = '$team_image'";
    }

    $sql .= " where id = '$team_up_id'";
$query = mysqli_query($con, $sql);
if(!$query) {
    echo "error";
} else {
    header("location:./team_list.php");
}