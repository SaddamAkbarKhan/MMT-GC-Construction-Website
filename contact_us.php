<?php include("./inc/header.php"); ?>
<div class="row ">
    <div class="col-md-12 text-center align-items-center bg_cover bread_crumb " style=" height: 300px;">
        <div class="position_cover" data-aos="zoom-in" data-aos-duration="3000">
            <h1 class="text-white" data-aos="fade-down" data-aos-duration="3000">
                Contact Us
            </h1>
            <div class="container my-3 ">
                <div class="row ">
                    <div class="col-12 text-center " data-aos="fade-up" data-aos-duration="3000">
                        <a href="./index.php" class="text-white"> Home &nbsp; &#187; &nbsp;</a>
                        <a href="./contact_us.php" class="text-white">Contact Us</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="info_item  d-flex flex-column justify-content-center align-items-center">
                <i class="fa-regular fa-map"></i>
                <h3>Our Address</h3>
                <p>Abu Dhabi</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info_item d-flex flex-column justify-content-center align-items-center">
                <i class="fa-regular fa-envelope"></i>
                <h3>Email Us</h3>
                <p>hr@middlemountaintgc.com</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info_item  d-flex flex-column justify-content-center align-items-center">
                <i class="fa-solid fa-phone"></i>
                <h3>Call Us</h3>
                <p>+971 26353007</p>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div style="width: 100%"><iframe width="100%" height="384" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=384&amp;hl=en&amp;q=abu%20dhabi+(MMT%20&amp;%20GC)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form_style">

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" id="" class="form-control " placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="" class="form-control" placeholder="Your Email">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <input type="text" name="subject" id="" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <textarea name="message" id="" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" class="btn btn-success" value="Send Message">
                </div>
            </form>

        </div>
    </div>
</div>


<?php include("./inc/footer.php"); ?>