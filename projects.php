<?php include 'Admin/connection.php';
$city = $_GET['city'];

if (!empty($_GET['type'])) {
	$type = $_GET['type'];
}

// $type = "All Properties";
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
		<div class="container-fluid">
			<!--Sec Title-->
			<div class="title-box text-center">
				<h2 style="color:azure"><span style="color:#eac117;"><?php if (!empty($type)) {
																			echo $type;
																		} else {
																			echo 'All Properties In';
																		} ?></span>
					<?php if (!empty($type)) {
						echo 'In';
					} ?>
					<?php echo $city; ?></h2>
			</div>

			<div class="row">
				<div class="col-md-3">
					<!--========================================================================================
                                 Laptop View Property Filter
========================================================================================== -->
					<div class="property_filter d-none d-md-block">
						<div class="headerr text-center">
							<h5>Property Filter</h5>
						</div>
						<div class="">
							<div class="card card-body">
								<form method="post">
									<div class="city">
										<h5>Select City</h5>
										<div class="checkbox">
											<div>
												<?php
												$q = "SELECT * FROM properties GROUP BY city HAVING COUNT(city) != 0";
												//SELECT OrderID, COUNT(OrderID) FROM Orders GROUP BY OrderID HAVING COUNT(OrderID) > 1
												$res = mysqli_query($con, $q);
												while ($data = mysqli_fetch_array($res)) {
												?>
													<div class="form-group">
														<?php
														if ($city == "$data[city]") {
														?>
															<input type="radio" name="city" id="<?php echo $data['id']; ?>" value="<?php echo $data['city']; ?>" checked>
														<?php } else {  ?>
															<input type="radio" name="city" id="<?php echo $data['id']; ?>" value="<?php echo $data['city']; ?>">
														<?php } ?>
														<label for="<?php echo $data['id']; ?>"><?php echo $data['city']; ?></label>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
									<hr>
									<div class="city mb-3">
										<h5>Select Property Type</h5>
										<div class="checkbox">
											<div>
												<div class="form-group">
													<?php
													if (!empty($type) &&  $type == "All Properties") { ?>
														<input type="radio" name="type" id="all" value="All Properties" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="all" value="All Properties">
													<?php } ?>
													<label for="all">All Properties</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) &&  $type == "Luxury Apartments") { ?>
														<input type="radio" name="type" id="Apartments" value="Luxury Apartments" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Apartments" value="Luxury Apartments">
													<?php } ?>
													<label for="Apartments">Luxury Apartments</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) && $type == "Luxury Penthouse") { ?>
														<input type="radio" name="type" id="Penthouse" value="Luxury Penthouse" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Penthouse" value="Luxury Penthouse">
													<?php } ?>
													<label for="Penthouse">Luxury Penthouse</label>
												</div>
												<div class="form-group">
													<?php

													if (!empty($type) && $type == "Luxury Villas") { ?>
														<input type="radio" name="type" id="Villas" value="Luxury Villas" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Villas" value="Luxury Villas">
													<?php } ?>
													<label for="Villas">Luxury Villas</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) && $type == "Independant Floors") { ?>
														<input type="radio" name="type" id="Floor" value="Independant Floors" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Floor" value="Independant Floors">
													<?php } ?>
													<label for="Floor">Luxury Independent Floor</label>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
										<button type="submit" class="theme-btn btn-style-one" name="apply"><span class="txt">Apply</span></button>
									</div>
								</form>
								<?php
								if (isset($_POST['apply'])) {
									$city = $_POST['city'];
									$type = $_POST['type'];

									echo "<script> window.location='./projects.php?city=$city&type=$type'</script>  ";
								}
								?>
							</div>
						</div>
					</div>
					<!--========================================================================================
                                 Laptop View Property Filter Ends
========================================================================================== -->
					<!--========================================================================================
                                 Mobile View Property Filter
========================================================================================== -->
					<div class="property_filter d-block d-md-none mb-4">
						<div class="headerr" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							<h5>Property Filter</h5>
							<h6><i class="fa-solid fa-angle-down"></i></h6>
						</div>
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form method="post">
									<div class="city">
										<h5>Select City</h5>
										<div class="checkbox">
											<div>
												<?php
												$q = "SELECT * FROM properties GROUP BY city HAVING COUNT(city) != 0";
												//SELECT OrderID, COUNT(OrderID) FROM Orders GROUP BY OrderID HAVING COUNT(OrderID) > 1
												$res = mysqli_query($con, $q);
												while ($data = mysqli_fetch_array($res)) {
												?>
													<div class="form-group">
														<?php
														if ($city == "$data[city]") {
														?>
															<input type="radio" name="city" id="<?php echo $data['id']; ?>1" value="<?php echo $data['city']; ?>" checked>
														<?php } else {  ?>
															<input type="radio" name="city" id="<?php echo $data['id']; ?>1" value="<?php echo $data['city']; ?>">
														<?php } ?>
														<label for="<?php echo $data['id']; ?>1"><?php echo $data['city']; ?></label>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
									<hr>
									<div class="city mb-3">
										<h5>Select Property Type</h5>
										<div class="checkbox">
											<div>
												<div class="form-group">
													<?php
													if (!empty($type) &&  $type == "All Properties") { ?>
														<input type="radio" name="type" id="all1" value="All Properties" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="all1" value="All Properties">
													<?php } ?>
													<label for="all1">All Properties</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) &&  $type == "Luxury Apartments") { ?>
														<input type="radio" name="type" id="Apartments1" value="Luxury Apartments" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Apartments1" value="Luxury Apartments">
													<?php } ?>
													<label for="Apartments1">Luxury Apartments</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) && $type == "Luxury Penthouse") { ?>
														<input type="radio" name="type" id="Penthouse1" value="Luxury Penthouse" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Penthouse1" value="Luxury Penthouse">
													<?php } ?>
													<label for="Penthouse1">Luxury Penthouse</label>
												</div>
												<div class="form-group">
													<?php

													if (!empty($type) && $type == "Luxury Villas") { ?>
														<input type="radio" name="type" id="Villas1" value="Luxury Villas" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Villas1" value="Luxury Villas">
													<?php } ?>
													<label for="Villas1">Luxury Villas</label>
												</div>
												<div class="form-group">
													<?php
													if (!empty($type) && $type == "Independant Floors") { ?>
														<input type="radio" name="type" id="Floor1" value="Independant Floors" checked>
													<?php } else { ?>
														<input type="radio" name="type" id="Floor1" value="Independant Floors">
													<?php } ?>
													<label for="Floor1">Luxury Independent Floor</label>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
										<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Apply</span></button>
									</div>
								</form>
								<?php
								if (isset($_POST['submit-form'])) {
									$city = $_POST['city'];
									$type = $_POST['type'];

									echo "<script> window.location='./projects.php?city=$city&type=$type'</script>  ";
								}
								?>
							</div>
						</div>
					</div>
					<!--========================================================================================
                                 Mobile View Property Filter Ends
========================================================================================== -->
				</div>
				<div class="col-md-9">
					<div class="properties">
						<div class="row">
							<?php
							if (!empty($type)) {
								$q = "SELECT * FROM properties WHERE city='$city' AND property_categories='$type'";
							}
							if ($type == "All Properties") {
								$q = "SELECT * FROM properties WHERE city='$city'";
							}
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