<?php include("./inc/header.php"); ?>
<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
            Project Portfolio
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./portfolio.php" class="text-white">Project Portfolio</a>
                    </div>
                </div>

            </div>
        </div>
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
<?php include("./inc/footer.php"); ?>