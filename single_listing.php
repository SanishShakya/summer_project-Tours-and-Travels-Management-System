<?php
	@session_start();
  require_once "admin/object.php";
  $tour->set('tourId',$_GET['tourId']);
	$tourIdPackage = $tour->selectTourById();
  $tourPackages = $tour->getTourPackages();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Listing | Sunshine Asian Int'l</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/oldvalley.jpg"></div>
		<div class="home_content">
			<div class="home_title">Package Detail</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

	

		<!-- Single Listing -->

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title"><?php echo $tourIdPackage[0]->packageName ?></h1>
									
									<div class="hotel_location"><i class="fa fa-map-marker" style="color: gray; font-size: 150%;"></i>  <?php echo $tourIdPackage[0]->location ?></div>
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<?php if(isset($_SESSION['customer_id'])){?>
										<div class="button book_button trans_200" style="margin-left: 80%;">
											<a href="booking.php?tourId=<?php echo $_GET['tourId'] ?>">book<span></span><span></span><span></span></a>
										</div>
										<?php }else{ ?>
										<div class="button book_button" style="margin-left: 80%;"><a href="login.php?bookmsg=1">book<span></span><span></span><span></span></a></div>
										<?php } ?>
									
								</div>
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="admin/images/<?php echo $tourIdPackage[0]->photo?>" width="100%" height="500px"></img>
								
							</div>
							<!-- Hotel Gallery -->


							<!-- Hotel Info Text -->
								<div class="hotel_info_text">
									<p>Features:<br>&nbsp;&nbsp;&nbsp;<?php echo $tourIdPackage[0]->feature ?></p>
								</div>
								<div class="hotel_info_text">
									<p>Category:<br>&nbsp;&nbsp;&nbsp;<?php echo $tourIdPackage[0]->category ?></p>
								</div>
								<div class="hotel_info_text">
									<p>Package Days:<br>&nbsp;&nbsp;&nbsp;<?php echo $tourIdPackage[0]->days ?></p>
								</div>
								<div class="hotel_info_text">
									<p>Price:<br> &nbsp;&nbsp;&nbsp;<span style="color: gray;">Rs.</span> <?php echo $tourIdPackage[0]->amount ?> <span>per person</span></p>
								</div>
								<div class="hotel_info_text">
									<p>Details:<?php echo $tourIdPackage[0]->description ?></p>
								</div>
								<div class="hotel_info_text">
									<p>Created Date:<br>&nbsp;&nbsp;&nbsp;<?php echo $tourIdPackage[0]->created_at ?></p>
								</div>

						</div>
						

</div>
</div>
</div>
</div>
</div>
</div>
</body>

<?php require_once "footer.php";?>