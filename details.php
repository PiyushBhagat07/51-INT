<?php
include 'Admin/connection.php';
$name = $_GET['name'];

$q1 = "SELECT * FROM properties WHERE name='$name'";
$res1 = mysqli_query($con, $q1);
$data1 = mysqli_fetch_array($res1);
$cat = $data1['property_categories'];
$ct = $data1['city'];

$q2 = "SELECT * FROM amenities WHERE property_name='$name'";
$res2 = mysqli_query($con, $q2);
$data2 = mysqli_fetch_array($res2);

$q3 = "SELECT * FROM floorplans WHERE name='$name' AND image_1 !=''";
$res3 = mysqli_query($con, $q3);
$data3 = mysqli_fetch_array($res3);

$q4 = "SELECT * FROM floorplans WHERE name='$name' AND size !=''";
$res4 = mysqli_query($con, $q4);
$data4 = mysqli_fetch_array($res4);

$q5 = "SELECT * FROM gallery WHERE name='$name'";
$res5 = mysqli_query($con, $q5);
$data5 = mysqli_fetch_array($res5);

$q6 = "SELECT * FROM timeslot WHERE name='$name'";
$res6 = mysqli_query($con, $q6);
$data6 = mysqli_fetch_array($res6);

$q7 = "SELECT * FROM video WHERE name='$name'";
$res7 = mysqli_query($con, $q7);
$data7 = mysqli_fetch_array($res7);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Fifty1 International - || Where Real Estate Get Real ||</title> <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css'>

    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        .hide {
            display: none;
        }

        .modal-content {
            color: #ffffff;
            background-color: #131516;
        }

        .table-dark.table-bordered {
            border: #212529;
            box-shadow: 0px 0px 16px 13px #212529;
        }

        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            font-size: 16px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#date').on('change', function() {
                var deptID = $(this).val();
                var nm = $('#nm').val;

                if (deptID) {
                    $.ajax({
                        type: 'POST',
                        url: 'slots.php',
                        data: 'd_id=' + deptID + '&name=' + nm,
                        success: function(html) {
                            $('#slot').html(html);
                        }
                    });
                } else {
                    $('#slot').html('<option value="">Select Date first</option>');
                }
            });

            $('#date2').on('change', function() {
                var deptID = $(this).val();
                var nm = $('#nm2').val;
                var data = 'd_id=' + deptID;
                if (deptID) {
                    $.ajax({
                        type: 'POST',
                        url: 'slots.php',
                        data: data,
                        success: function(html) {
                            $('#slot2').html(html);
                        }
                    });
                } else {
                    $('#slot2').html('<option value="">Select Date first</option>');
                }
            });
        });
    </script>
</head>

<body class="dark-layout">
    <?php include('includes/header_details.php') ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url('./Admin/Uploads/Property Images/<?php echo $data1['image']; ?>')">
        <div class="auto-container">
            <h2><?php echo $data1['name']; ?></h2>
            <h3><?php echo $data1['city']; ?></h3>
            <div class="facilities mt-4" style="margin-left: 5px;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="theme-btn btn-style-two"><span class="txt">Schedule Site Visit</span></a>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Single Section-->
    <section class="shop-single-section" id="about">
        <div class="auto-container">
            <div class="shop-single">
                <div class="product-details">
                    <!--Basic Details-->
                    <div class="basic-details">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="./Admin/Uploads/Videos/<?php echo $data7['image']; ?>" alt="">
                                    </div>
                                    <a href="https://youtu.be/Xu9m_YebcBk" class="overlay-link lightbox-image">
                                        <div class="icon-box">
                                            <span class="icon flaticon-play-button"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                                <!-- <figure class="image-box"><a href="./assets/images/apartments/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="./assets/images/apartments/4.jpg" alt=""></a></figure> -->
                            </div>
                            <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h4><?php echo $data1['name']; ?></h4>
                                    <h5><?php echo $data1['city']; ?></h5>
                                    <div class="text"><?php echo $data1['description']; ?></div>

                                    <div class="other-options clearfix d-flex" style="float: right;">
                                        <h5 style="font-size: 24px;margin-top: 10px;">Brochure</h5> <button type="button" class="theme-btn cart-btn"> <i class="fas fa-cloud-download-alt" style="font-size: 26px;position: relative;bottom: -3px;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details -->
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="facilities">
                                    <h5>Property Type</h5>
                                    <h6><?php echo $data1['property_categories']; ?></h6>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="facilities">
                                    <h5>SIZE </h5>
                                    <h6><?php echo $data1['size']; ?></h6>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="facilities">
                                    <h5>Project Area</h5>
                                    <h6><?php echo $data1['property_area']; ?></h6>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="facilities">
                                    <h5>Possession</h5>
                                    <h6>Ready To Move</h6>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="facilities">
                                    <h5>Price</h5>
                                    <h6><?php echo $data1['price']; ?></h6>
                                </div>
                            </div>
                        </div>
                        <!--Basic Details Ends-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Shop Single Section-->

    <section class="aminities project_gallery pb-5" id="aminities">
        <div class="auto-container">
            <div class="title-box pt-5">
                <h2><?php echo $data1['name']; ?> <span style="color: #ffffff;">AMINITIES<span></h2>
            </div>
            <div class="aminities_content">
                <div class="aminiti_main_box">

                    <div class="row p-2">
                        <div class="col-md-12 order-1 order-md-0">

                            <div class="aminities_body">
                                <div class="row">
                                    <?php
                                    if ($data2['facing_clubhouse'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <i class="fas fa-dungeon"></i>
                                                <h5>Facing Clubhouse</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['all_weather_pool'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <i class="fas fa-swimming-pool"></i>
                                                <h5>All-Wheather Pool</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['gym'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <i class="fas fa-dumbbell"></i>
                                                <h5>Gym</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['clubhouse'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <i class="fas fa-basketball-ball"></i>
                                                <h5>Club House</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['lavish_interiors'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/li.webp" alt="">
                                                </div>
                                                <h5>Lavish Interior</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['kids_play'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/kidsplay.png" alt="">
                                                </div>
                                                <h5>Kids Play Area</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['servant_room'] == "on") {
                                    ?>

                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/s.png" alt="" style="">
                                                </div>
                                                <h5>Servant Room</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['garden'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/g.jpg" alt="" style="">
                                                </div>
                                                <h5>Garden</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['private_cinema'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/p.png" alt="" style="">
                                                </div>
                                                <h5>Private Cinema</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['yoga_room'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/y.jpg" alt="" style="">
                                                </div>
                                                <h5>Yoga Room</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['plot_sizes'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/pl.jpg" alt="" style="">
                                                </div>
                                                <h5>Plot Sizes</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['banquet_hall'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/bh.jpg" alt="" style="">
                                                </div>
                                                <h5>Banquet Hall</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['restaurant'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/r.jpg" alt="" style="">
                                                </div>
                                                <h5>Restaurant</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['squash_court'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/sc.png" alt="" style="">
                                                </div>
                                                <h5>Squash Court</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['pool_table'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/pt.png" alt="" style="">
                                                </div>
                                                <h5>Pool Table</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['bar'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/bar.png" alt="" style="">
                                                </div>
                                                <h5>Bar</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['badminton'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/bd.jpg" alt="" style="">
                                                </div>
                                                <h5>Badminton Ground</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['central_garden'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/cg.png" alt="" style="">
                                                </div>
                                                <h5>Central Garden</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['units'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/unit.jpg" alt="" style="">
                                                </div>
                                                <h5>Units</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['cricket_pitch'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/cp.png" alt="" style="">
                                                </div>
                                                <h5>Cricket Pitch</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['basketball'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/bc.png" alt="" style="">
                                                </div>
                                                <h5>Basketball Ground</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['bowling_ale'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/ba.png" alt="" style="">
                                                </div>
                                                <h5>Bowling Ale</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['cigar_room'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/cr.png" alt="" style="">
                                                </div>
                                                <h5>Cigar Room</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['conference_room'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/cr2.webp" alt="" style="">
                                                </div>
                                                <h5>Conference Room</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['home_theatre'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/ht.png" alt="" style="">
                                                </div>
                                                <h5>Home Theatre</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['coffee_longue'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/cf.webp" alt="" style="">
                                                </div>
                                                <h5>Coffee Longue</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['library'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/l.png" alt="" style="">
                                                </div>
                                                <h5>Library</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    if ($data2['jacuzzi'] == "on") {
                                    ?>
                                        <div class="col-md-2 col-6 mx-auto my-2">
                                            <div class="aminities_inner_box text-center">
                                                <div>
                                                    <img src="./assets/images/aminities/j.png" alt="" style="">
                                                </div>
                                                <h5>Jacuzzi</h5>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
    </section>

    <section class="project_gallery" id="ex_gallery">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="title-box">
                <h2>Project Exterior Gallery</h2>
            </div>

            <div class="p-tab active-tab">
                <div class="project-gallery-carousel-exterior owl-theme owl-carousel">

                    <?php
                    $q = "SELECT * FROM gallery WHERE name='$name' AND img_type='Exterior'";
                    $res = mysqli_query($con, $q);
                    while ($data = mysqli_fetch_array($res)) {
                    ?>

                        <?php
                        if ($data['image_1'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_1']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_1']; ?>" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php
                        if ($data['image_2'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_2']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_2']; ?>" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

                        <?php
                        if ($data['image_3'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_3']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_3']; ?>" alt="" />

                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>

                    <!-- Gallery Item -->

                </div>
            </div>

        </div>
    </section>

    <section class="project_gallery" id="floor_plan">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="title-box">
                <h2>Floor Plan & Sizes</h2>
            </div>

            <div class="floor_plan">
                <div class="row">
                    <div class="col-md-6 my-2">
                        <div class="inner-box">
                            <a href="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_1']; ?>" class="lightbox-image" data-fancybox="products">
                                <div class="image">
                                    <img src="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_1']; ?>" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-md-6 my-2">
                        <div class="inner-box">
                            <a href="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_2']; ?>" class="lightbox-image" data-fancybox="products">
                                <div class="image">
                                    <img src="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_2']; ?>" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="inner-box">
                            <a href="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_3']; ?>" class="lightbox-image" data-fancybox="products">
                                <div class="image">
                                    <img src="./Admin/Uploads/Floorplan Images/<?php echo $data3['image_3']; ?>" alt="" />
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 my-2">
                        <div class="size">
                            <table class="table table-dark table-bordered table-hover table-lg text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Size / Area</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $q = "SELECT * FROM floorplans WHERE name='$name' AND size !=''";
                                    $res = mysqli_query($con, $q);
                                    while ($data = mysqli_fetch_array($res)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $i++; ?></th>
                                            <td><?php echo $data['type']; ?></td>
                                            <td><?php echo $data['size']; ?></td>
                                            <td><?php echo $data['price']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="other-options clearfix">
                    <a>
                        <div class="d-flex" style="float: right;">
                            <h5>Get Floor Plan</h5>
                            <button type="button" class="theme-btn cart-btn"> <i class="fas fa-cloud-download-alt" style="font-size: 26px;position: relative;bottom: -3px;"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="project_gallery " id="int_gallery">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="title-box pt-5">
                <h2>Project Interior Gallery</h2>
            </div>

            <div class="p-tab active-tab">
                <div class="project-gallery-carousel-interior owl-theme owl-carousel">



                    <?php
                    $q = "SELECT * FROM gallery WHERE name='$name' AND img_type='Interior'";
                    $res = mysqli_query($con, $q);
                    while ($data = mysqli_fetch_array($res)) {
                    ?>

                        <?php
                        if ($data['image_1'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_1']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_1']; ?>" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        if ($data['image_2'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_2']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_2']; ?>" alt="" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        if ($data['image_3'] != "") {
                        ?>
                            <!-- Gallery Item -->
                            <div class="gallery-item shop-item">
                                <div class="inner-box">
                                    <a href="./Admin/Uploads/Gallery Images/<?php echo $data['image_3']; ?>" class="lightbox-image" data-fancybox="products">
                                        <div class="image">
                                            <img src="./Admin/Uploads/Gallery Images/<?php echo $data['image_3']; ?>" alt="" />

                                        </div>
                                    </a>
                                </div>
                            </div>

                    <?php }
                    } ?>

                </div>
            </div>

        </div>
    </section>

    <section class="property_map" id="map">
        <div class="map-section">
            <div class="map-canvas">
                <iframe src="<?php echo $data1['map_link']; ?>" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <section class="project_gallery" id="faq">
        <div class="auto-container">

            <div class="title-box pt-5">
                <h2>FAQ's</h2>
            </div>

            <div class="faq_area section_padding_130" id="faq">
                <div class="row justify-content-center">
                    <!-- FAQ Area-->
                    <div class="col-12 col-sm-10 col-lg-8">
                        <div class="accordion faq-accordian" id="faqAccordion">

                            <?php
                            $q8 = "SELECT * FROM faq WHERE name='$name'";
                            $res8 = mysqli_query($con, $q8);
                            while ($data8 = mysqli_fetch_array($res8)) {
                            ?>
                                <div class="card border-0 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="card-header" id="headingThree">
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree1<?php echo $data8['id']; ?>" aria-expanded="true" aria-controls="collapseThree">
                                            <?php echo $data8['question']; ?>
                                            <span class="lni-chevron-up"></span>
                                        </h6>
                                        <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree1<?php echo $data8['id']; ?>" aria-expanded="true" aria-controls="collapseThree">
                                            <i class="fas fa-arrow-alt-circle-down"></i>
                                        </h6>
                                    </div>
                                    <div class="collapse" id="collapseThree1<?php echo $data8['id']; ?>" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                        <div class="card-body">
                                            <p> <?php echo $data8['answer']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project_gallery " id="similar_prop">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="title-box pt-5">
                <h2>Similar Properties</h2>
            </div>

            <div class="p-tab active-tab">
                <div class="project-gallery-carousel-interior owl-theme owl-carousel">

                    <?php
                    $q9 = "SELECT * FROM properties WHERE property_categories='$cat' AND name != '$name' AND city='$ct'";
                    $res9 = mysqli_query($con, $q9);
                    while ($data9 = mysqli_fetch_array($res9)) {
                    ?>
                        <div class="gallery-item">
                            <a href="#" class="link">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="./Admin/Uploads/Property Images/<?php echo $data9['image']; ?>" alt="">
                                        <!--Overlay Box-->
                                        <div class="overlay-box">
                                            <div class="overlay-inner">
                                                <div class="content">
                                                    <p><?php echo $data9['description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="text-center my-3"><?php echo $data9['name']; ?></h4>
                                    </figure>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>

    <section id="enq" class="call-to-action-section " style="background-image: url(./assets/images/apartments/design-2.jpg)">
        <div class="auto-container">
            <div class="title-box pt-0 mb-3">
                <h2>ENQUIRE NOW</h2>
            </div>
            <div class="property_filter">
                <form method="post" id="contact-form" action="web_script.php">
                    <div class="row clearfix text-center">
                        <div class="form-group col-lg-4 col-md-4 col-sm-4">
                            <input type="hidden" value="<?php echo $name; ?>" id="nm2" name="pro_nm1">
                            <input type="text" name="username1" placeholder="Your name" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-4">
                            <input type="email" name="email1" placeholder="E-Mail Address" required>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-4">
                            <div class="input-group">
                                <input id="tel" type="tel" class="form-control" name="contact1" required>
                                <span class="input-group-addon">Tel</span>
                            </div>
                        </div>

                        <div class="col-md-4 m-auto">
                            <div class="checkbox">
                                <h6 style="color: #fff;font-size: 22px;font-weight: 700;">Request A Site Visit
                                </h6>
                                <div class="d-flex" style="margin-left: 80px;">
                                    <div class="form-group">
                                        <input type="radio" name="flexRadioDefault" id="html" onclick="show2()">
                                        <label for="html">Yes</label>
                                    </div>
                                    <div class="form-group" style="margin-left: 15px;">
                                        <input type="radio" name="flexRadioDefault" id="css" onclick="show1()">
                                        <label for="css">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" id="div1" style="display:none">
                            <div class="form-group ">
                                <label for="form-control">Select Visit Date</label>
                                <input type="date" name="date2" id="date2">
                            </div>
                        </div>
                        <div class="col-md-4" id="div2" style="display:none">
                            <div class="form-group">
                                <label class="form-label">Available Time Slots</label>
                                <select class="form-control" name="slot2" id="slot2">

                                </select>
                            </div>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button class="theme-btn btn-style-one" type="submit" name="book_slot_2"><span class="txt">Submit</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php') ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Schedule Site Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #050505;background: #ffff;"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="web_script.php" method="post" id="contact-form">
                            <p style="font-size: 18px;font-weight: 600;text-align: center;color:#ffffff">
                                Personal Information</p>
                            <div class="row clearfix">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="hidden" value="<?php echo $name; ?>" id="nm" name="pro_nm">
                                    <input type="text" name="username" placeholder="Your name" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="email" placeholder="Email address" required>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 m-auto mb-3">
                                    <input type="tel" name="phone" placeholder="Contact No." required>
                                </div>
                                <hr>
                                <p style="font-size: 18px;font-weight: 600;text-align: center;color:#ffffff">
                                    Schedule an Appointment</p>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label for="form-control">Select Visit Date</label>
                                    <input type="date" name="date" id="date" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label class="form-label" style="font-size: 17px;color: #fff;">Available Time Slots</label>
                                    <select class="form-control" name="slot" id="slot">

                                    </select>
                                </div>
                                <div class="btns-box text-center">
                                    <button type="submit" class="theme-btn btn-style-one" name="book_slot_1"><span class="txt">Submit</span></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js'></script>
    <script>
        $("#tel").intlTelInput({
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });

        function show2() {
            document.getElementById('div1').style.display = 'block';
            document.getElementById('div2').style.display = 'block';
        }

        function show1() {
            document.getElementById('div1').style.display = 'none';
            document.getElementById('div2').style.display = 'none';
        }
    </script>
    <!--Scroll to top-->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/jquery-ui.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.fancybox.js"></script>
    <script src="./assets/js/owl.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/appear.js"></script>
    <!-- <script src="./assets/js/jquery.bootstrap-touchspin.js"></script> -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./assets/js/scrollbar.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>