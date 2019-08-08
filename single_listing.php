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
<title>Single Listing</title>
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
								<div style="margin-top: 5%;"><i class="fa fa-user"></i> <?php echo $_SESSION['customer_name']?> | <a style="color: #a5a5a5;" href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></div>

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
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">home</a></li>
								<li class="main_nav_item"><a href="tour_package.php">Package</a></li>
								<li class="main_nav_item"><a href="about.php">about us</a></li>
								<li class="main_nav_item"><a href="enquiry.php">enquiry</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
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
									<div class="button book_button trans_200"><a href="#">book<span></span><span></span><span></span></a></div>
									<div class="hotel_map_link_container">
									</div>
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
									<p>Details:<br>&nbsp;&nbsp;&nbsp;<?php echo $tourIdPackage[0]->description ?></p>
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