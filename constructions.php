<?php include "inc/db.php";
include("./inc/header.php"); ?>

<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Constructions
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./constructions.php" class="text-white">Constructions </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="row mt-5">
            <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
                <h2 class="display-6 ">General Constructions</h2>
                <p>Crafting Dreams, Building Futures: Unleash Excellence with Our Comprehensive Repairing, Constructing, Remodeling, and Renovation Services.</p>
            </div>
        </div>
    </div>
</div>

<div class="row" data-aos="fade-up" data-aos-duration="300">
    <?php

    $sql = "select * from constructions";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($query)) : ?>
        <div class="col-md-6">
            <div class="card mb-2 project_card" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./uploads/constructions_images/<?php echo $row['image'] ?>" class="img-fluid gc_img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><?php echo substr($row['description'], 0, 130); ?>...</p>
                            <p class="card-text"><small class="text-body-secondary"><?php echo $row['date'] ?></small> <a href="./constructions_details.php?id=<?php echo $row['id']; ?>" class="service_link btn btn-outline-success ms-5">See More <span class="link_icon"><i class="fa-solid fa-arrow-right"></i></span> </a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<!-- <div class="row" data-aos="fade-up" data-aos-duration="1000">
    <div class="col-md-6">
        <div class="card mb-3 project_card" data-aos="fade-up" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/images/card8.avif" class="img-fluid gc_img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Residential Construction</h5>
                        <p class="card-text">Craft your dream home with our residential construction services, where meticulous attention to detail meets your unique vision for the perfect living space.</p>
                        <a href="./constructions_details.php" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 project_card" data-aos="fade-up" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/images/card5.jpg" class="img-fluid gc_img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Commercial Renovations</h5>
                        <p class="card-text">Elevate your business environment with our expert commercial renovation services, seamlessly blending innovative design and functionality to transform your workplace.</p>
                        <a href="" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 project_card" data-aos="fade-up" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/images/card8.avif" class="img-fluid gc_img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Structural Repairs</h5>
                        <p class="card-text">Ensure the longevity of your property through our specialized structural repair services, addressing foundation cracks and weaknesses with precision and quality materials.</p>
                        <a href="" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 project_card" data-aos="fade-up" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./assets/images/card5.jpg" class="img-fluid gc_img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Smart Home Construction</h5>
                        <p class="card-text">Experience the future of living with our smart home construction services, integrating advanced technology and automation for unparalleled convenience, energy efficiency, and security.</p>
                        <a href="" class="service_link">See More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<?php include("./inc/footer.php"); ?>