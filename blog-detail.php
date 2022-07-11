<?php include 'Admin/connection.php';
$blog = $_GET['blog'];
$q1 = "SELECT * from blog WHERE id='$blog'";
$res1 = mysqli_query($con, $q1);
$data1 = mysqli_fetch_array($res1);
$name = $data1['heading'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
</head>

<body class="dark-layout">

    <div class="page-wrapper">
        <?php include('includes/header.php') ?>

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container" style="margin-top:10px;">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side / Blog Classic -->
                    <?php
                    $q = "SELECT * FROM blog WHERE id='$blog'";
                    $res = mysqli_query($con, $q);
                    while ($data = mysqli_fetch_array($res)) {
                        $date = $data['date'];
                    ?>
                        <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                            <div class="blog-single padding-right">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="Admin/Uploads/Blog Images/<?php echo $data['image']; ?>" alt=""></figure>
                                        <span class="date"><?php echo date("d F Y", strtotime($date)); ?></span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="post-meta">
                                            <ul class="post-info clearfix">
                                                <li><a href=""><?php echo $data['category']; ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="lower-box">
                                            <h3><?php echo $data['heading']; ?></h3>
                                            <div class="text">
                                                <p><?php echo $data['text']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!--Comments Area-->
                                <div class="comments-area">
                                    <div class="group-title">
                                        <h2>Comments 4</h2>
                                    </div>
                                    <div class="inner-box">

                                        <?php
                                        $q0 = "SELECT * FROM comments WHERE property_name='$name' AND reply_to =''";
                                        $res0 = mysqli_query($con, $q0);
                                        while ($data0 = mysqli_fetch_array($res0)) {
                                            $date = $data0['time'];
                                            $rp = $data0['user_name'];
                                        ?>
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="author-thumb"><img src="images/resource/author-1.jpg" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info clearfix"><strong><?php echo $data0['user_name']; ?></strong></div>
                                                        <div class="text"><?php echo $data0['message']; ?></div>
                                                        <ul class="post-info">
                                                            <li><?php echo date("d F , Y", strtotime($date)); ?></li>
                                                            <li><button class="btn btn-warning" id="show<?php echo $data0['id']; ?>">Reply</button></li>
                                                            <script>
                                                                $('#show<?php echo $data0['id']; ?>').on('click', function(event) {

                                                                    $('#form_1<?php echo $data0['id']; ?>').css({
                                                                        'display': 'block'
                                                                    });
                                                                });
                                                            </script>

                                                            <div class="container form" style="display:none;margin-top:10px;" id="form_1<?php echo $data0['id']; ?>">
                                                                <form action="web_script.php" method="POST">
                                                                    <input type="hidden" class="form-control" value="<?php echo $name; ?>" name="pro_nm">
                                                                    <input type="hidden" class="form-control" value="<?php echo $data0['user_name']; ?>" name="reply_to">
                                                                    <input type="text" class="form-control" placeholder="Name....." required style="border:1px solid yellow;" name="user_nm">
                                                                    <input type="text" class="form-control" placeholder="Message....." required style="border:1px solid yellow;margin-top:10px;" name="message">
                                                                    <div class="container" style="margin-top:5px;">
                                                                        <div class="text-center">
                                                                            <div class="form-group">
                                                                                <input type="submit" name="add_reply" class="btn btn-primary" value="Submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
<?php
$q2 = "SELECT * FROM comments WHERE reply_to='$rp'";
$res2 = mysqli_query($con,$q2);
while($data2 = mysqli_fetch_array($res2))
{
    $date2 = $data2['time'];
?>
                                                <div class="comment reply-comment">
                                                    <div class="author-thumb"><img src="images/resource/author-2.jpg" alt=""></div>
                                                    <div class="comment-inner">
                                                        <div class="comment-info clearfix"><strong><?php echo $data2['user_name']; ?></strong></div>
                                                        <div class="text"><?php echo $data2['message']; ?></div>
                                                        <ul class="post-info">
                                                            <li><?php echo date("d F , Y", strtotime($date2)); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <!--Comment Box-->
                                    </div>
                                </div>

                                <!-- Comment Form -->
                                <div class="comment-form">

                                    <div class="group-title">
                                        <h2>Leave a Comment</h2>
                                    </div>
                                    <div class="form-inner">
                                        <!--Comment Form-->
                                        <form method="post" action="web_script.php">
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <input type="text" name="username" placeholder="Your name" required>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <input type="email" name="email" placeholder="Email address" required>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <textarea name="message" placeholder="Write message"></textarea>
                                                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <button class="theme-btn submit-btn" type="submit" name="add_comment">Post Comment</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--End Comment Form -->

                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <?php include('includes/footer.php') ?>
    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="templateshub.net">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Home Interiors</a></li>
                    <li><a href="#">Offices Interiors</a></li>
                    <li><a href="#">Showroom Interiors</a></li>
                    <li><a href="#">Building Interiors</a></li>
                    <li><a href="#">Shops Interiors</a></li>
                </ul>

            </div>

        </div>
    </div>

    <!--Scroll to top-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/script.js"></script>
</body>

</html>