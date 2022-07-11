<?php include 'Admin/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fifty1 International - || Where Real Estate Get Real ||</title>
    <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/61a526e4d3.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="dark-layout">

    <?php include('includes/header.php') ?>
    <!-- End Main Header -->


    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>WE'D LOVE TO HEAR FROM YOU</h2>
                <div class="text">If you have any questions, just fill in the contact form, and we will answer you
                    shortly. If you are living nearby, <br>come visit our office.</div>
            </div>

            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h1>Send Us A Message</h1>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <!--Contact Form-->
                            <form method="post" action="http://t.commonsupport.com/stella-orre/sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="First Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="email" placeholder="Email address" required>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Mobile No." required>
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h1>Contact Details</h1>

                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <i class="fa-solid fa-location-dot"></i>
                            <li><strong>Address :</strong>
                                <p>1203, Palm Spring Plaza, <br> Golf Course Road, DLF Phase 5, Sector 54, <br>
                                    Gurugram, Haryana - 122002</p>
                            </li>
                        </ul>
                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <i class="fa fa-phone"></i>
                            <li><strong>Phone : </strong><a href="tel:+91 9999995151">+91 9999995151</a></li>
                        </ul>
                        <ul class="contact-info-list">
                            <i class="fa fa-envelope"></i>
                            <li><strong>Email : </strong><a href="mailto:info@51intl.com">info@51intl.com</a></li>
                        </ul>
                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <i class="fa-regular fa-clock"></i>
                            <li>
                                <p><strong>Opening Hours :</strong><br>8:00 AM - 10:00 PM <br> Monday – Sunday</p>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Form Section -->


    <section class="location">
        <div class="map-section">
            <div class="map-canvas">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7016.2684453674765!2d77.101391!3d28.44537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x465d44b27e594b87!2sFIFTY%201%20INTERNATIONAL!5e0!3m2!1sen!2sin!4v1656925077008!5m2!1sen!2sin" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php') ?>

    <!--Scroll to top-->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/jquery-ui.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.fancybox.js"></script>
    <script src="./assets/js/isotope.js"></script>
    <script src="./assets/js/owl.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/validate.js"></script>
    <script src="./assets/js/appear.js"></script>
    <script src="./assets/js/scrollbar.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/script.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <!--End Google Map APi-->
</body>

</html>