    <!-- footer -->

    <div class="row mt-5 ">
        <div class="col-md-12 mt-3">
            <!-- data-aos="zoom-out" data-aos-duration="3000" -->

            <footer >
                <div class="footer-main">
                    <div class="container">
                        <div class="row mt-2">

                            <div class="col-lg-3 col-md-6 ">

                                <a href="."><img src="./assets/images/logo.png" width="100" alt=""></a>
                                <p style="color: #8F8F8F;">
                                    <br>
                                    Abu Dhabi<br>
                                    UAE <br><br>
                                    <strong><span style="color:#000">Phone:</span></strong> +971 26353007<br>
                                    <strong><span style="color:#000">Email:</span></strong> hr@middlemountaintgc.com<br>
                                </p>

                                <div class="footer_links  float-start justify-content-evenly me-4">
                                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                    <a href=""><i class="fa-solid fa-phone"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                </div>

                            </div>

                            <div class="col-lg-2 col-md-6 footer_menu">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li> <a href="./index.php">Home</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="./about_us.php">About us</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="./our_team.php">Our Team</a></li>
                                    <li><i class="bx bx-chevron-right"></i> <a href="./contact_us.php">Contact Us</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 footer_menu">
                                <h4>Our Services</h4>
                                <ul style="color: #8F8F8F;">
                                    <li> <a href="./constructions.php">Constructions</a></li>
                                    <li><a href="./transportation.php">Transportation</a></li>
                                    <li><a href="./portfolio.php">Portfolio</a></li>
                                    
                                </ul>
                            </div>

                            <div class="col-lg-4 col-md-6 ">
                                <h4>Join Our Newsletter</h4>
                                <p style="color: #8F8F8F;"></p>
                                <input type="text" name="newsletter" class="form-control">
                                <input type="submit" value="Go" class="mt-3 btn btn-outline-success">
                            </div>

                        </div>
                    </div>
                </div>



                <div class="footer-legal text-center position-relative">
                    <div class="container">
                        <div class="copyright">
                            <strong><span>MMT & GC.</span></strong> &copy;<script>
                                const d = new Date();
                                let year = d.getFullYear();
                                document.write(year);
                            </script>
                            All rights reserved
                        </div>
                        <div class="credits">

                            Designed by <a href="http://www.twitter.com/saddamthegr8">Saddam</a>
                        </div>
                    </div>
                </div>

            </footer>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="./assets/aos-master/dist/aos.js"></script>
    <script src="./assets/owl/owl.carousel.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- portfolio script -->

    <script type="text/javascript">
        $(document).ready(function() {
            $('.list').click(function() {
                const value = $(this).attr('data-filter');
                if (value == 'all') {
                    $('.itemBox').show('1000');
                } else {
                    $('.itemBox').not('.' + value).hide('1000');
                    $('.itemBox').filter('.' + value).show('1000');

                }
            })
            //Add class on selected item 
            $('.list').click(function() {
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
    </script>

    <!-- portfolio script -->

    <!-- owl carousel -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>

    <!-- owl carousel -->



    </body>

    </html>