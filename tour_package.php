<?php
  @session_start();
 
   
  require_once "admin/object.php";
  $tourPackages = $tour->getTourPackages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Tour Packages | Sunshine Asian Int'l</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="user_box ml-auto">
							<?php if(isset($_SESSION['customer_id'])){?>
								<div style="margin-top: 5%;"><i class="fa fa-user"></i> <?php echo $_SESSION['customer_name']?> | <a style="color: #a5a5a5;" href="logout.php" onclick="return confirm('Are you sure to Logout ?')"><i class="fa fa-sign-out"></i> Logout</a></div>

							<?php }else{ ?>
							<div class="user_box_login user_box_link"><a href="login.php"><i class="fa fa-sign-in"></i> login</a></div>
							<div class="user_box_register user_box_link"><a href="register.php"><i class="fa fa-user-plus"></i> register</a></div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row-12">
					<div>
						<div class="logo_container">
							<div class="logo"><a href="index.php"><img src="images/logo.png" width="10%" height="10%" alt="" style="margin-top: 1%">Sunshine Asian Int'l</a></div>
							<div class="hamburger" style="margin-left: 95%">
              <i class="fa fa-bars trans_200"></i>
            </div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list"  style="margin-left: 50%; margin-bottom: 2%">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="tour_package.php">Package</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="enquiry.php">Enquiry</a></li>
							</ul>
						</div>
							
					</div>
				</div>
			</div>	
		</nav>
	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="index.php"><img src="images/logo.png"  width="100%" heigth="100%" alt=""></a></div>
			<ul class="main_nav_list">
				<li class="main_nav_item"><a href="index.php">home</a></li>
				<li class="main_nav_item"><a href="tour_package.php">Package</a></li>
				<li class="main_nav_item"><a href="about.php">about us</a></li>
				<li class="main_nav_item"><a href="enquiry.php">Enquiry</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/ice&glacier.jpg"></div>
		<div class="home_content">
			<div class="home_title" style="color: #163061">Tour Package</div>
		</div>
	</div>
	

	<br>
		<?php foreach($tourPackages as $tour){?>
						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@thoughtcatalog -->
										<div class="offers_image_background"><img src="admin/images/<?php echo $tour->photo?>" width="100%" height="80%"></div>
										<div class="offer_name" style="margin-bottom: 10%;"><a href="single_listing.php?tourId=<?php echo $tour->tourId?>"><?php echo $tour->packageName?></a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price"><span style="color: #eda84a; font-size: 70%; font-weight: bold;">Rs.</span> <?php echo $tour->amount?><span>per person</span></div>
										<p class="offers_text"><i class="fa fa-map-marker" style="color: gray; font-size: 150%;"></i>  <?php echo $tour->location?></p>
										<p class="offers_text">Category: <?php echo $tour->category?></p>
										<p class="offers_text">Days of Packages: <?php echo $tour->days?><span> days</span></p>
										<p class="offers_text">Features: <?php echo $tour->feature?></p>
										<?php if(isset($_SESSION['customer_id'])){?>
										<div class="button book_button" style="margin-left: 80%;"><a href="booking.php?tourId=<?php echo $tour->tourId?>">book<span></span><span></span><span></span></a></div>
										<?php }else{ ?>
										<div class="button book_button" style="margin-left: 80%;"><a href="login.php?bookmsg=1">book<span></span><span></span><span></span></a></div>
										<?php } ?>
										<div class="offer_reviews">
										
											
										</div>
									</div>
								</div>
							</div>
						</div>
			<?php } ?>

<?php require_once "footer.php";?>