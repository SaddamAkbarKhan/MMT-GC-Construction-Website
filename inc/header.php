<?php
include "inc/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="" name="keywords">
    <meta content="" name="description">
     <meta name="author" content="Saddam-Akbar-Khan">
    <link rel="stylesheet" href="./assets/aos-master/dist/aos.css">
    <link rel="stylesheet" href="./assets/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/style.css">


    <title>MMT&GC</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-none d-lg-block sticky-top" style="background-color: #16681B; height:60px">
                <div class="social_links float-end me-4">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-solid fa-phone"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>

                <div class=" d-inline-flex mt-3 header_text">
                    <p><i class="fa-solid fa-envelope"></i> <span>hr@middlemountaintgc.com</span></p>
                    <p class="ms-3 "> <i class="fa-solid fa-phone"></i> <span>+971 26353007</span></p>
                </div>

            </div>
        </div>
        <!-- NavBar -->
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg main_menu">
                    <div class="container">
                        <a class="navbar-brand" href="."><img src="./assets/images/logo.png" width="100" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href=".">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about_us.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./constructions.php">Constructions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./transportation.php">Transportation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./portfolio.php">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact_us.php">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./our_team.php">Our Team</a>
                                </li>
                            </ul>


                            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Review Us</button>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- model -->
        <div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Give Us Review!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container">
                                        

                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="./review_act.php" method="post">
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
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <p>Your Review will help us improve..</p>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- NavBar End -->