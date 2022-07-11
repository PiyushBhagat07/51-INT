 <div class="page-wrapper">
     <!-- Preloader -->
     <!-- <div class="preloader"></div> -->



     <header id="headerrr" class="main-header header-style-one ">

         <!-- Header Upper -->
         <div class="header-upper">
             <div class="inner-container">
                 <div class="auto-container clearfix">
                     <!--Info-->
                     <div class="logo-outer">
                         <div class="logo"><a href="index.php"><img src="./assets/images/51_hh_logo.png" alt="" title=""></a></div>
                     </div>

                     <!--Nav Box-->
                     <div class="nav-outer clearfix">
                         <!--Mobile Navigation Toggler For Mobile-->
                         <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                         <nav class="main-menu navbar-expand-md navbar-light">
                             <div class="navbar-header">
                                 <!-- Togg le Button -->
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                     <span class="icon flaticon-menu-1"></span>
                                 </button>
                             </div>

                             <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                 <ul class="navigation clearfix">
                                     <li class="current"><a href="index.php">Home</a></li>
                                     <li class=""><a href="about.html">About us</a></li>
                                     <li class="dropdown"><a href="#">Properties</a>
                                         <ul>
                                             <?php
                                                $q = "SELECT * FROM properties GROUP BY city HAVING COUNT(city) != 0";
                                                //SELECT OrderID, COUNT(OrderID) FROM Orders GROUP BY OrderID HAVING COUNT(OrderID) > 1
                                                $res = mysqli_query($con, $q);
                                                while ($data = mysqli_fetch_array($res)) {
                                                ?>
                                                 <li class="dropdown"><a href="#"><?php echo $data['city']; ?></a>
                                                     <ul>
                                                         <li><a href="projects.php?city=<?php echo $data['city']; ?>&type=Luxury Apartments">Luxury Apartments</a></li>
                                                         <li><a href="projects.php?city=<?php echo $data['city']; ?>&type=Luxury Penthouse">Luxury Penthouse</a></li>
                                                         <li><a href="projects.php?city=<?php echo $data['city']; ?>&type=Luxury Villas">Luxury Villas</a></li>
                                                         <li><a href="projects.php?city=<?php echo $data['city']; ?>&type=Independant Floors">Independent Floor</a></li>
                                                     </ul>
                                                 </li>
                                             <?php } ?>
                                             <!--<li class="dropdown"><a href="#">Gurugram</a>
                                                 <ul>
                                                     <li><a href="#">Luxury Apartments</a></li>
                                                     <li><a href="#">Luxury Penthouse</a></li>
                                                     <li><a href="#">Luxury Villas</a></li>
                                                     <li><a href="#">Luxury Independent Floor</a></li>
                                                 </ul>
                                             </li>
                                             <li class="dropdown"><a href="#">Mumbai</a>
                                                 <ul>
                                                     <li><a href="#">Luxury Apartments</a></li>
                                                     <li><a href="#">Luxury Penthouse</a></li>
                                                     <li><a href="#">Luxury Villas</a></li>
                                                     <li><a href="#">Luxury Independent Floor</a></li>
                                                 </ul>
                                             </li>-->
                                             <li><a href="new_projects.php">Luxury New Developments</a></li>
                                             <!--<li><a href="#">Luxury Resale</a></li>-->
                                         </ul>
                                     </li>
                                     <!-- <li class=""><a href="#">Resale</a></li> -->
                                     <!-- <li class="dropdown"><a href="blog.html">Blog</a>
                                         <ul>
                                             <li><a href="blog.html">Blog</a></li>
                                             <li><a href="blog-2.html">blog 2 column</a></li>
                                             <li><a href="blog-detail.html">Blog Details</a></li>
                                         </ul>
                                     </li> -->
                                     <!-- <li class="dropdown"><a href="shop.html">Shop</a>
                                         <ul>
                                             <li><a href="shop.html">Main shop page</a></li>
                                             <li><a href="product-detail.html">Product Detail Page</a></li>
                                             <li><a href="cart-page.html">Cart Page</a></li>
                                             <li><a href="checkout.html">Checkout</a></li>
                                         </ul>
                                     </li> -->
                                     <li><a href="#">Contact</a></li>
                                 </ul>
                             </div>
                         </nav>
                         <!-- Main Menu End-->

                         <!-- Outer Box -->
                         <div class="outer-box clearfix">
                             <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--End Header Upper-->

         <!-- Mobile Menu  -->
         <div class="mobile-menu">
             <div class="menu-backdrop"></div>
             <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

             <nav class="menu-box">
                 <div class="nav-logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                 <ul class="navigation clearfix">
                     <!--Keep This Empty / Menu will come through Javascript-->
                 </ul>
                 <!--Social Links-->
                 <div class="social-links">
                     <ul class="clearfix">
                         <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                         <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                         <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                         <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                         <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                     </ul>
                 </div>
             </nav>
         </div><!-- End Mobile Menu -->

         <!--Header Top-->
         <div class="header-top">
             <div class="auto-container clearfix">

                 <div class="top-right clearfix">
                     <!-- Info List -->
                     <ul class="info-list">
                         <li><a href="#about">Project Overview</a></li>
                         <li><a href="#aminities">Project Aminities</a></li>
                         <li><a href="#ex_gallery">Exterior Gallery</a></li>
                         <li><a href="#floor_plan">Floor Plan</a></li>
                         <li><a href="#int_gallery">Interior Gallery</a></li>
                         <li><a href="#map">Project Location</a></li>
                         <li><a href="#faq">FAQ's</a></li>
                         <li><a href="#similar_prop">Similar Properties</a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- End Header Top -->
     </header>
     <!-- End Main Header -->