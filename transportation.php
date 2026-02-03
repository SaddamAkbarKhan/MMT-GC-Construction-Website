<?php 
include "inc/db.php";
include("./inc/header.php"); ?>

<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Transportation
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./transportation.php" class="text-white">Transportation </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row mt-5">
            <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="display-6 ">Transportation</h2>
                <p>Beyond Boxes, Beyond Boundaries: Transforming Moves into Memorable Journeys with Our Comprehensive Moving and Packing Services.</p>
            </div>
        </div>
    </div>
</div>

<div class="row" data-aos="fade-up" data-aos-duration="300">
    <div class="owl-carousel owl-theme">
        <?php
        $trans_sql = "select * from transportation";
        $trans_query = mysqli_query($con, $trans_sql);
        while ($trans_row = mysqli_fetch_assoc($trans_query)) : ?>
            <div class="item">
                <div class="card transport_card">
                    <img src="./uploads/transport_images/<?php echo $trans_row['image']; ?>" class="card-img-top transport_img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo substr($trans_row['title'], 0, 25) ?></h5>
                        <p class="card-text"><?php echo substr($trans_row['description'], 0, 100) ?>...</p>
                        <a href="./transportation_details.php?id=<?php echo $trans_row['id']; ?>" class="service_link btn btn-outline-success ms-5">View Detail</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</div>
<!-- <div class="row">
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./transportation_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3">
        <div class="card transport_card">
            <img src="./assets/images/card3.jpg" class="card-img-top transport_img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div> -->




<?php include("./inc/footer.php"); ?>