<?php
include("./incs/db.php");

$category_id  = $_POST['construction_category_id'];
$title = $_POST['title'];
$tag_line = $_POST['tag_line'];
$description = $_POST['description'];
$date = $_POST['date'];

$construction_image = null;
if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $allow = array('jpg', 'png', 'icon', 'jpeg');
        $path = pathinfo($image, PATHINFO_EXTENSION);
        $construction_image = time() . '.' . $path;

        if (!in_array($path, $allow)) {
                echo "file not supported";
                header("location:./constructions_new.php");
                die();
        }

        if (!move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/constructions_images/".$construction_image)) {
                echo "path Error";
                header("location:./constructions_list.php");
                die();
        }
}


$sql = "INSERT INTO constructions (construction_category_id, title, tag_line, description, image, date)
                        VALUES ('$category_id','$title','$tag_line', '$description', '$construction_image','$date')";

$query = mysqli_query($con, $sql);
if (!$query) {
        header("location:./constructions_new.php");
} else {
        header("location:./constructions_list.php");
}
?>