<?php 
include("./incs/db.php");

$name =$_POST['name'];
$designation =$_POST['designation'];


$team_img = null;
if($_FILES['image']['size'] > 0) {
    $image = $_FILES['image']['name'];
    $allow = array('jpg', 'png', 'icon');
    $path = pathinfo($image, PATHINFO_EXTENSION);
    $team_img = time().'.'.$path;

    if(!in_array($path, $allow)) {
        echo "file not supported";
        header("location:./team_new.php");
        die();
    }

    if(!move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/team_images/".$team_img)) {
        echo "path Error";
        header("location:./team_new.php");
        die();
    }
}
$sql = "INSERT INTO team (
                    name, designation, image 
        ) VALUES ( '$name','$designation','$team_img')";
$query = mysqli_query($con, $sql);
if(!$query) {
    header("location:./team_new.php");
} else {
    header("location:./team_list.php");
}
?>