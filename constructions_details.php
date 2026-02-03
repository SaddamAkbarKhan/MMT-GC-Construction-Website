<?php include("./inc/header.php"); ?>
<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Constructions Details
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./constructions.php" class="text-white"> Construction &nbsp; &#187; &nbsp;</a>

                        <a href="./constructions_details.php" class="text-white">Constructions Details </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">


        <?php 
        $con_id = (int) $_GET['id'];
        $sql = "select * from constructions where id = '$con_id'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);

        $con_sql = "select * from constructions_categories where id = '" . $row['construction_category_id'] . "'";
        $con_query = mysqli_query($con, $con_sql);
        $con_row = mysqli_fetch_assoc($con_query);
        ?>
        <div class="col-md-3">
            <div>
                <h3 class="h3">Project information</h3>
                <ul>
                    <li><strong class="d-block">Category</strong> <span><?php echo $con_row['title'] ?></span></li>
                </ul>
            </div>

        </div>

        <div class="col-md-9">
            <img src="./uploads/constructions_images/<?php echo $row['image']; ?>" class=" img_detail " alt="">
            <h3 class="detail_title mt-3"><?php echo $row['title']; ?> </h3>
            <p class="mt-3"><?php echo $row['description']; ?>
            </p>

        </div>
    </div>
</div>

<?php include("./inc/footer.php"); ?>