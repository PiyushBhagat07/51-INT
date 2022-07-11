<?php include 'Admin/connection.php'; ?>
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
    <!--Page Title-->
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container" style="margin-top:10px;">
      <div class="auto-container">
        <div class="row clearfix">

          <!--Content Side / Blog Classic -->
          <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
            <div class="blog-classic padding-right">
              <?php
              $q = "SELECT * FROM blog";
              $res = mysqli_query($con, $q);
              while ($data = mysqli_fetch_array($res)) {
                $date = $data['date'];
              ?>

                <!-- News Block Three-->
                <div class="news-block-three">
                  <div class="inner-box">
                    <div class="image-box">
                      <figure class="image"><a href="blog-detail.php?blog=<?php echo $data['id']; ?>"><img src="Admin/Uploads/Blog Images/<?php echo $data['image']; ?>" alt=""></a></figure>
                      <span class="date"><?php echo date("d F Y", strtotime($date)); ?></span>
                    </div>
                    <div class="lower-content">
                      <div class="post-meta">
                        <ul class="post-info clearfix">
                          <li><a href="blog-detail.php?blog=<?php echo $data['id']; ?>"><?php echo $data['category']; ?></a></li>
                        </ul>
                      </div>
                      <h3><a href="blog-detail.php?blog=<?php echo $data['id']; ?>"><?php echo $data['heading']; ?></a></h3>
                      <div class="text"><?php echo substr($data['text'], 0, 40) ?>...</div>
                      <div class="link-box"><a href="blog-detail.php?blog=<?php echo $data['id']; ?>" class="theme-btn read-more">Read more</a></div>
                    </div>
                  </div>
                </div>
              <?php } ?>

            </div>


          </div>

          <!--Sidebar Side-->
          <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar">

              <!-- Search -->


              <!--Blog Category Widget-->
              <div class="sidebar-widget sidebar-blog-category">
                <div class="title-box">
                  <h2>Categories</h2>
                </div>
                <ul class="cat-list">
                  <?php
                  $q = "SELECT category from blog";
                  $res = mysqli_query($con, $q);
                  while ($data = mysqli_fetch_array($res)) {
                  ?>
                    <li><a href="#"><?php echo $data['category']; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>

    <!--Main Footer-->
    <?php include('includes/footer.php') ?>

  </div>
  <!--End pagewrapper-->

  <!--Scroll to top-->

  <!--Search Popup-->

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