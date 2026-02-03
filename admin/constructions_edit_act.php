<?php 
include("./incs/db.php");

$con_up_id =  $_POST['con_up_id'];

$category_id  = $_POST['construction_category_id'];
$title = $_POST['title'];
$tag_line = $_POST['tag_line'];
$description = $_POST['description'];
$date = $_POST['date'];

$construction_image = null;
if($_FILES['image']['size'] > 0) {
    $image = $_FILES['image']['name'];
    $allow = array('jpg','png','icon', 'jpeg');
    $path = pathinfo($image, PATHINFO_EXTENSION);
    $construction_image = time().'.'.$path;

    if(!in_array($path, $allow)) {
        echo "Files not supported";
        header("location:./constructions_list.php");
        die();
    }

    if(!move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/constructions_images/".$construction_image)) {
        echo "path error";
        header("location:./constructions_list.php");
        die();
    }
}

$sql = "update constructions set
                construction_category_id='$category_id',
                title='$title',
                tag_line='$tag_line',
                description='$description'
                ";
    if(!is_null($construction_image)) {
        $sql .= ", image = '$construction_image'";
    }

    $sql .= ", date ='$date' where id = '$con_up_id'";
$query = mysqli_query($con, $sql);
if(!$query) {
    echo "error";
} else {
    header("location:./constructions_list.php");
}