<?php
include("./incs/db.php");

$category_id  = $_POST['project_category_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$client = $_POST['client'];
$date = $_POST['date'];


$sql = "INSERT INTO projects(project_category_id, title, description, client, date)
                    VALUES ('$category_id','$title','$description','$client','$date')";
$query = mysqli_query($con, $sql);
if (!$query) {
        header("location:./projects_new.php");
} else {

        $project_id = mysqli_insert_id($con);

        $image_names = $_FILES['image']['name'];
        $sn = 0;
        
        $allow = array('jpg', 'png', 'icon', 'jpeg');
        foreach($image_names as $n){

            $image = $n;
            $ext = pathinfo($image, PATHINFO_EXTENSION);

            if (!in_array($ext, $allow)) {
                continue;
            }
            
            $current_file = uniqid()."-".time() . '.' . $ext;
            if(move_uploaded_file($_FILES['image']['tmp_name'][$sn], "../uploads/project_images/".$current_file)){
                $fsql = "insert into project_images (project_id, title, file) values ($project_id, '$current_file', '$current_file')";
                mysqli_query($con, $fsql);
            }

            $sn++;
        }

        
        header("location:./projects_list.php");
}
?>