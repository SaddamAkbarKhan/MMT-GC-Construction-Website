<?php include("./inc/header.php"); ?>




<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Portfolio Details
            </h1>
            <div class=" my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./portfolio.php" class="text-white">Portfolio Detail</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="row mt-4">
        <div class="col-md-12   ">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $get_id = (int) $_GET['project_id'];
                    $sql = "select * from projects where id = '$get_id'";
                    $query = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($query);
                    $cat_sql = "select * from project_categories where id = '".$row['project_category_id']."'";
                    $cat_query = mysqli_query($con, $cat_sql);
                    $cat_row = mysqli_fetch_assoc($cat_query);


                    $img_sql = "select * from project_images where project_id = '".$row['id']."'";
                    $img_query = mysqli_query($con, $img_sql);
                    $active = 1;
                    while($img_row = mysqli_fetch_assoc($img_query)): ?>
                    <div class="carousel-item <?php if($active == 1) { echo 'active'; } ?>">
                        <img src="./uploads/project_images/<?php echo $img_row['file'] ?>" class=" d-block w-100 img-fluid  slider_img" alt="...">
                    </div>
                    <?php $active++; ?>
                    <?php endwhile; ?>
                    <!-- <div class="carousel-item">
                        <img src="./assets/images/slide3.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    </div> -->
                    <!-- <div class="carousel-item">
                        <img src="./assets/images/transport.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
    <?php 
    
    
    
    
    ?>
        <div class="col-md-8">
            <h3 class="display-6"><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
        </div>
        <div class="col-md-4">
            <div class="">
                <h3 class="display-6">Project information</h3>
                <ul>
                    <li><strong class="d-block">Category</strong> <span><?php echo $cat_row['title'] ?></span></li>
                    <li><strong class="d-block">Client</strong> <span><?php echo $row['client'] ?></span></li>
                    <li><strong class="d-block">Project date</strong> <span><?php echo $row['date'] ?></span></li>


                </ul>
            </div>
        </div>
    </div>
</div>




<?php include("./inc/footer.php"); ?>