<?php include("./inc/header.php"); ?>
<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Our Team
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./our_team.php" class="text-white">Our Team </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12 section_header" data-aos="fade-up" data-aos-duration="300">
        <h2 class="display-6 ">Our Team </h2>
        <p>Meet the powerhouse behind MMT & GC! Our team is a blend of creative minds and tech enthusiasts, working seamlessly to turn ideas into reality. Scroll down to put faces to the names and discover the collaborative force driving our success. At MMT & GC, we believe in the strength of unity, innovation, and shared accomplishments.</p>
    </div>
</div>
<div class="row" data-aos="fade-up" data-aos-duration="300">
    <?php
    $tsql = "select * from team";
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


<?php include("./inc/footer.php"); ?>