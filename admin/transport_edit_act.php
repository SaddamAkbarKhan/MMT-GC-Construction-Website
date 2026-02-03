<?php 
include("./incs/db.php");

$trans_up_id =  $_POST['trans_up_id'];

$category_id  = $_POST['transport_category_id'];
$title = $_POST['title'];
$tag_line = $_POST['tag_line'];
$description = $_POST['description'];
$date = $_POST['date'];

$transport_image = null;
if($_FILES['image']['size'] > 0) {
    $image = $_FILES['image']['name'];
    $allow = array('jpg','png','icon', 'jpeg');
    $path = pathinfo($image, PATHINFO_EXTENSION);
    $transport_image = time().'.'.$path;

    if(!in_array($path, $allow)) {
        echo "Files not supported";
        header("location:./transport_list.php");
        die();
    }

    if(!move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/transport_images/".$transport_image)) {
        echo "path error";
        header("location:./transport_list.php");
        die();
    }
}

$sql = "update transportation set
                transport_category_id='$category_id',
                title='$title',
                tag_line='$tag_line',
                description='$description'
                ";
    if(!is_null($transport_image)) {
        $sql .= ", image = '$transport_image'";
    }

    $sql .= ", date ='$date' where id = '$trans_up_id'";
$query = mysqli_query($con, $sql);
if(!$query) {
    echo "error";
} else {
    header("location:./transport_list.php");
}