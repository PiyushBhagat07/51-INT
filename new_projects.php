<?php include 'Admin/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fifty1 International - || Where Real Estate Get Real ||</title> <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5b0d77afe4.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <style>
        #exampleFormControlSelect2 {
            margin-top: 5px;
        }
    </style>
</head>

<body class="dark-layout">
    <?php include('includes/header.php') ?>

    <!--Shop Section-->
    <section class="shop-section mt-5">
        <div class="container   ">
            <!--Sec Title-->
            <div class="title-box text-center">
                <h2 style="color:azure"><span style="color:#eac117;">Luxury </span>New Development</h2>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="properties">
                        <div class="row">
                            <?php
                            $q = "SELECT * FROM properties ";
                            $res = mysqli_query($con, $q);
                            while ($data = mysqli_fetch_array($res)) {
                            ?>

                                <div class="col-md-6 col-xl-4">
                                    <div class="gallery-item">
                                        <a href="details.php?name=<?php echo $data['name']; ?>" class="link">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="./Admin/Uploads/Property Images/<?php echo $data['image']; ?>" alt="">
                                                    <!--Overlay Box-->
                                                    <div class="overlay-box">
                                                        <div class="overlay-inner">
                                                            <div class="content">
                                                                <p><?php echo substr($data['description'], 0, 80) ?>...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="text-center my-3"><?php echo $data['name']; ?></h4>
                                                </figure>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
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
    <script src="./assets/js/owl.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/appear.js"></script>
    <script src="./assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="./assets/js/scrollbar.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>