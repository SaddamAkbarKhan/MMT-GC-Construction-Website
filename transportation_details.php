<?php include("./inc/header.php"); ?>




<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Transportation Details
            </h1>
            <div class=" my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./gallery.php" class="text-white">Transportation Details </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php 
    $id = (int) $_GET['id'];
    $sql = "select * from transportation where id = '$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    $tsql = "select * from transport_categories where id = '".$row['transport_category_id']."'";
    $tquery = mysqli_query($con, $tsql);
    $trow = mysqli_fetch_assoc($tquery);
    ?>
    <div class="row mt-4">
        <div class="col-md-12   ">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./uploads/transport_images/<?php echo $row['image']; ?>" class=" d-block w-100 img-fluid  slider_img" alt="...">
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="./assets/images/slide3.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    </div>
                    <div class="carousel-item">
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

    <div class="row mt-3">
        <div class="col-md-8">
            <h3 class="display-6"><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
        </div>
        <div class="col-md-4 ">
            <div class="">
                <h3 class="h5">Transport Information</h3>
                <ul>
                    <li><strong class="d-block">Category</strong> <span><?php echo $row['title']; ?></span></li>
                    


                </ul>
            </div>
        </div>
    </div>
</div>




<?php include("./inc/footer.php"); ?>