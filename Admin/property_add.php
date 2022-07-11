<?php
require 'connection.php';
if (!isset($_SESSION['admin_id'])) {
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin Panel | Add Property </title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
    <style>
        .card {
            box-shadow: rgba(138, 136, 124, 0.35) 0px 5px 15px;
            border: 1px;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php' ?>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-body">
            <div class="container-fluid">
                <div class="row clearfix" style="margin-top: -40px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add New Property</h4>
                            </div>
                            <div class="card-body">
                                <form id="wizard_with_validation" enctype="multipart/form-data" method="POST" action="web_script.php">
                                    <h3>Basic Details</h3>
                                    <fieldset>
                                        <div class="form-group form-float">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="username">Type</label>
                                                    <select name="type" class="form-control">
                                                        <option value="">-- Select --</option>
                                                        <option value="Luxury Villas">Luxury Villas</option>
                                                        <option value="Luxury Apartments">Luxury Apartments</option>
                                                        <option value="Luxury Penthouse">Luxury Penthouse</option>
                                                        <option value="Independant Floors">Independant Floors</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="username">Name</label>
                                                    <input type="text" name="property_name" class="form-control" required>
                                                </div>
                                                <!--<div class="form-group col-md-6">-->
                                                <!--    <label>Add Property Banner Image for Background</label>-->
                                                <!--    <div class="input-group">-->
                                                <!--        <div class="input-group-prepend">-->
                                                <!--            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>-->
                                                <!--        </div>-->
                                                <!--        <div class="custom-file">-->
                                                <!--            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">-->
                                                <!--            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="form-group col-md-6">
                                                    <label for="email">Description </label>
                                                    <textarea name='description' id="description" class="form-control" maxlength="600"></textarea>
                                                    <span id="current_desc" style="color: #59bf70;">0</span>
                                                    <span id="" style="color: #59bf70;">/ 600</span>
                                                </div>
                                                <script type="text/javascript">
                                                    var heading = document.getElementById("description");
                                                    var current_heading = document.getElementById("current_desc");

                                                    heading.addEventListener("keyup", function() {
                                                        var characters = heading.value.split('');
                                                        current_heading.innerHTML = characters.length;
                                                    });
                                                </script>
                                                <div class="form-group col-md-6">
                                                    <label for="username">Size</label>
                                                    <input type="text" name="size" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="username">Price</label>
                                                    <input type="text" name="price" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="username">Property Area</label>
                                                    <input type="text" name="area" class="form-control">
                                                </div>
                                                <!--<div class="form-group col-md-6">-->
                                                <!--    <label for="username">Brochure Document</label>-->
                                                <!--    <div class="input-group">-->
                                                <!--        <div class="input-group-prepend">-->
                                                <!--            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>-->
                                                <!--        </div>-->
                                                <!--        <div class="custom-file">-->
                                                <!--            <input type="file" name="brochure" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">-->
                                                <!--            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3>Location Details</h3>
                                    <fieldset>
                                        <div class="form-group form-float">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="username">Location Map Link</label>
                                                    <input type="text" name="location" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="username">Property Location</label>
                                                    <input type="text" name="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3>Video Details</h3>
                                    <fieldset>
                                        <div class="form-group form-float">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Add Cover Image</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" name="cover_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="form-group col-md-6">-->
                                                <!--    <label>Add Video</label>-->
                                                <!--    <div class="input-group">-->
                                                <!--        <div class="input-group-prepend">-->
                                                <!--            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>-->
                                                <!--        </div>-->
                                                <!--        <div class="custom-file">-->
                                                <!--            <input type="file" name="video" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">-->
                                                <!--            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </fieldset>
                                    <h3>Amenities Details</h3>
                                    <fieldset>
                                        <div class="form-group form-float">
                                            <div class="row">
                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="MasterTemplate" id="master"> <label for="master" class="lbl" style="font-size: 16px;">Master Template</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="FacingClubhouse" id="facing"> <label for="facing" class="lbl" style="font-size: 16px;">Facing Clubhouse</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="AllWeatherPool" id="all"> <label for="all" style="font-size: 16px;">All Weather Pool</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="LavishInteriors" id="lavish"> <label for="lavish" style="font-size: 16px;">Lavish Interiors</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="ServantRoom" id="servant"> <label for="servant" style="font-size: 16px;">Servant Room</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Clubhouse" id="club"> <label for="club" style="font-size: 16px;">Clubhouse</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Gymnasium" id="gym"> <label for="gym" style="font-size: 16px;">Gymnasium</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Garden" id="gar"> <label for="gar" style="font-size: 16px;">Garden</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="PrivateCinema" id="pc"> <label for="pc" style="font-size: 16px;">Private Cinema</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" class="checkboxall" name="YogaRoom" id="yr"> <label for="yr" style="font-size: 16px;">Yoga Room</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="PlotSizes" id="ps"> <label for="ps" style="font-size: 16px;">Plot Sizes</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="BanquetHall" id="bh"> <label for="bh" style="font-size: 16px;">Banquet Hall</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Restaurant" id="rs"> <label for="rs" style="font-size: 16px;">Restaurant</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="SquashCourt" id="sc"> <label for="sc" style="font-size: 16px;">Squash Court</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="PoolTable" id="pt"> <label for="pt" style="font-size: 16px;">Pool Table</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Bar" id="bar"> <label for="bar" style="font-size: 16px;">Bar</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="KidsPlay" id="kp"> <label for="kp" style="font-size: 16px;">Kids Play</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="Badminton" id="bm"> <label for="bm" style="font-size: 16px;">Badminton</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="CentralGarden" id="cg"> <label for="cg" style="font-size: 16px;">Central Garden</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="units" id="nou"> <label for="nou" style="font-size: 16px;">No. Of Units</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="CricketPitch" id="cp"> <label for="cp" style="font-size: 16px;">Cricket Pitch</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="BasketballGround" id="bg"> <label for="bg" style="font-size: 16px;">Basketball</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="BowlingAle" id="ba"> <label for="ba" style="font-size: 16px;">Bowling Ale</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="CigarRoom" id="cr"> <label for="cr" style="font-size: 16px;">Cigar Room</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="ConferenceRoom" id="cr1"> <label for="cr1" style="font-size: 16px;">Conference Room</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="HomeTheatre" id="ht"> <label for="ht" style="font-size: 16px;">Home Theatre</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" class="checkboxall" name="CoffeeLongue" id="cl"> <label for="cl" style="font-size: 16px;">Coffee Longue</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" class="checkboxall" name="Library" id="lb"> <label for="lb" style="font-size: 16px;">Library</label>
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <input type="checkbox" class="checkboxall" name="jacuzzi" id="jz"> <label for="jz" style="font-size: 16px;">Jacuzzi</label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <input type="checkbox" id="selectall">
                                                    <label for="selectall" style="font-size: 16px;color:#59bf70;">Select All</label>
                                                </div>

                                                <script>
                                                    $(document).ready(function() {
                                                        $("#selectall").click(function() {
                                                            if (this.checked) {
                                                                $('.checkboxall').each(function() {
                                                                    $(".checkboxall").prop('checked', true);
                                                                })
                                                            } else {
                                                                $('.checkboxall').each(function() {
                                                                    $(".checkboxall").prop('checked', false);
                                                                })
                                                            }
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                      
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="row" style="display:none;">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-body ">
                            <div id="wizard">
                                <h1>First Step</h1>
                                <div>First Content</div>
                                <h1>Second Step</h1>
                                <div>Second Content</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php') ?>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
    <script src="assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
    <script src="assets/bundles/datatables/export-tables/jszip.min.js"></script>
    <script src="assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
    <script src="assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
    <script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <script src="assets/js/page/datatables.js"></script>
    <script src="assets/bundles/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- Template JS File -->

    <script src="./assets/bundles/steps/jquery.steps.js"></script>
    <script src="./assets/data/steps-data.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>

</html>