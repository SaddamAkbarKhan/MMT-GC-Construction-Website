<?php require "./inc/db.php"; ?>
<?php include("./inc/header.php"); ?>


<!-- Slider Start -->
<div class="row ">
    <div class="col-md-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="./assets/images/img3.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/slide1.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/slide3.jpg" class="d-block w-100 img-fluid  slider_img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Slider End -->
<!-- welcome message -->
<div class="row mt-3">
    <div class="col-md-8">

        <span class="sub_title" data-aos="fade-left" data-aos-duration="3000"> Welcome <span style="color: #000">To </span></span>
        <h1 class="display-3 fw-bolder" data-aos="fade-right" data-aos-duration="3000">Middle <span class="text_color">Mountain</span></h1>
        <h2 class="display-6 fw-medium" data-aos="fade-left" data-aos-duration="3000"><span class="text_color">Transport &</span> General Contracting</h2>

        <!-- <img src="./assets/images/line.png" class="img-fluid d-none d-md-block" data-aos="fade-up-left" data-aos-duration="3000" alt=""> -->

        <p data-aos="fade-up" data-aos-duration="3000">
            Welcome to Middle Mountain Transport & General Contracting!
            <br>

            At Middle Mountain, we transcend limits and conquer challenges with a spirit as enduring as the peaks we're named after. Whether it's transporting goods with precision or undertaking construction projects with finesse, we embody excellence in every endeavor.
            <br>

            Step into a realm where reliability meets innovation, and where our commitment to quality craftsmanship and unparalleled service is the cornerstone of our foundation.
            <br>

            Join us on this journey, where Middle Mountain becomes not just a name but a symbol of trust, efficiency, and triumph. Welcome aboard to a higher standard in transport and contracting!
        </p>

    </div>

    <div class="col-md-4">
        <img src="./assets/images/MattMunson.jpg" alt="" class=" img-fluid" style="width: 397px; height: 400px" data-aos="fade-down" data-aos-duration="3000">
    </div>
</div>
<!-- welcome message end -->
<hr>
<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">General Contracting</h2>
        <p>Crafting Dreams, Building Futures: Unleash Excellence with Our Comprehensive Repairing, Constructing, Remodeling, and Renovation Services.</p>
    </div>
</div>

<div class="row" data-aos="fade-up" data-aos-duration="300">
    <?php

    $sql = "select * from constructions limit 4";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($query)) : ?>
        <div class="col-md-6">
            <div class="card mb-2 project_card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./uploads/constructions_images/<?php echo $row['image'] ?>" class="img-fluid gc_img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text d-none d-lg-block"><?php echo substr($row['description'], 0, 130); ?>...</p>
                            <p class="card-text"><small class="text-body-secondary"><?php echo $row['date'] ?></small> <a href="./constructions_details.php?id=<?php echo $row['id']; ?>" class="service_link btn btn-outline-success ms-5">See More <span class="link_icon"><i class="fa-solid fa-arrow-right"></i></span> </a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<div class="row mt-1">
    <div class="col-md-4 offset-5">
        <a href="" class="btn btn-outline-success">View All</a>
    </div>
</div>


<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">Transportation</h2>
        <p>Beyond Boxes, Beyond Boundaries: Transforming Moves into Memorable Journeys with Our Comprehensive Moving and Packing Services.</p>
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
<div class="row mt-1">
    <div class="col-md-4 offset-5">
        <a href="./transportation.php" class="btn btn-outline-success">View All</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">Project Portfolio</h2>
        <p>Dive into excellence with our Project Portfolio. Witness a snapshot of our diverse successes at MMT & GC. From innovative solutions to creative triumphs, our portfolio is a testament to our commitment to excellence and impactful results. Explore the essence of our prowess in a nutshell.</p>
    </div>
</div>
<!-- portfolio start -->
<div class="row">
    <div class="col-md-12  ">
        <div class="menu">

            <!-- portfolio navbar -->

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        Filter<span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <?php
                            $pcats_sql = "select id, title from project_categories";
                            $pcats = mysqli_query($con, $pcats_sql);
                            ?>

                            <li class="nav-item list active" data-filter="all" data-aos="fade-up" data-aos-duration="300">
                                All
                            </li>

                            <?php while ($row = mysqli_fetch_assoc($pcats)) : ?>

                                <li class="nav-item list" data-filter="pf_<?php echo $row['id']; ?>" data-aos="fade-up" data-aos-duration="300">
                                    <?php echo $row['title']; ?>
                                </li>

                            <?php endwhile; ?>




                        </ul>
                    </div>
                </div>
            </nav>

            <!-- portfolio navbar end -->



        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-10 offset-1">
        <!-- project= product -->
        <div class="project" data-aos="fade-up" data-aos-duration="300">

            <?php

            // get only single image of each project
            $backup_sql = "select

                                p.id,
                                p.title,
                                pc.id as project_category_id,
                                pc.title as project_category_title,
                                pi.id as image_id,
                                pi.title as image_title,
                                pi.file as file
                                                                                        
                                from projects as p
                                inner join project_categories as pc on pc.id = p.project_category_id
                                inner join project_images as pi on p.id = pi.project_id
                                
                                group by p.id";


            $pj_sql = "select

                            p.id,
                            p.title,
                            pc.id as project_category_id,
                            pc.title as project_category_title,
                            pi.id as image_id,
                            pi.title as image_title,
                            pi.file as file
                                                        
                            from projects as p
                            inner join project_categories as pc on pc.id = p.project_category_id
                            inner join project_images as pi on p.id = pi.project_id";
            $pjs = mysqli_query($con, $pj_sql);
            ?>

            <?php while ($row = mysqli_fetch_assoc($pjs)) : ?>
                <div class="itemBox pf_<?php echo $row['project_category_id']; ?>">
                    <img src="./uploads/project_images/<?php echo $row['file'] ?>" alt="">
                    <div class="overlay">
                        <a href="./portfolio_details.php?project_id=<?php echo intval($row['id']); ?>">
                            <i class="fas fa-search icon"></i> <?php echo $row['title']; ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>



        </div>
    </div>
</div>
<!-- portfolio end -->


<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">Our Team </h2>
        <p>Meet the powerhouse behind MMT & GC! Our team is a blend of creative minds and tech enthusiasts, working seamlessly to turn ideas into reality. Scroll down to put faces to the names and discover the collaborative force driving our success. At MMT & GC, we believe in the strength of unity, innovation, and shared accomplishments.</p>
    </div>
</div>
<div class="row" data-aos="fade-up" data-aos-duration="300">
    <?php
    $tsql = "select * from team  limit 4";
    $tquery = mysqli_query($con, $tsql);
    while ($trow = mysqli_fetch_assoc($tquery)) :
    ?>
        <div class="col-md-3">
            <div class="card  p-2 mb-5 bg-body-tertiary rounded text-center team_card">
                <?php if (is_null($trow['image']) or empty($trow['image'])) : ?>
                    <img src="./assets/images/testimonial.png" alt="" class="card-img-top team_img">
                <?php else : ?>
                    <img src="./uploads/team_images/<?php echo $trow['image']; ?>" class="card-img-top team_img" alt="...">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $trow['name']; ?></h5>
                    <p class="card-text"><small class="text-body-secondary"><?php echo $trow['designation'] ?></small></p>
                    <div class="class d-flex justify-content-evenly">
                        <!-- <i class="fa-brands fa-facebook"></i>

                    <i class="fa-solid fa-envelope"></i> -->
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

</div>
<div class="row mt-1">
    <div class="col-md-4 offset-5">
        <a href="./our_team.php" class="btn btn-outline-success">View All Team</a>
    </div>
</div>

<!-- testimonials -->
<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">Testimonials</h2>
        <p>Embark on a journey through triumphs and acclaim on our Testimonials page. Delve into the narratives of our esteemed clients who, with resounding satisfaction, share the transformative experiences of partnering with MMT & GC. These testimonials underscore our unwavering commitment to excellence, showcasing the compelling outcomes and unparalleled service that define our brand.</p>
    </div>
</div>
<div class="row" data-aos="fade-up" data-aos-duration="300">
    <?php
    $rsql = "select * from reviews order by rand() limit 3";
    $rquery = mysqli_query($con, $rsql);
    while ($rrow = mysqli_fetch_assoc($rquery)) :
    ?>

        <div class="col-md-4  ">
            <div class="card mb-3 testimonial_card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="./assets/images/testimonial.png" class="img-fluid testimonial_img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $rrow['name']; ?></h5>
                            <p class="card-text"><?php echo substr($rrow['message'], 0, 150); ?>.....</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php endwhile; ?>





</div>


<?php include("./inc/footer.php"); ?>