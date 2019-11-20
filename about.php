<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking | Sunshine Asian Int'l</title>
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
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/bungy1.jpg"></div>
    <div class="home_content">
      <div class="home_title" style="color: #1660A1;">About Us</div>
    </div>
  </div>


	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="intro_image" style="margin-left: -38%;"><img src="images/intro.png" alt=""></div>
				</div>
				<div class="col-lg-7">
					<div class="intro_content">
						<div class="intro_title" style="color: #1f0733; font-weight: bold;"><center><b><br>We are the best for searching Tour Packages</b></center></div><br>
						<p class="intro_text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are the leading IATA (International Air Transport Association) accredited travel agent established in 1998 A.D. with government registration number 25835/060/061. Besides, we are also the active member of NATTA (Nepal Association of Tour and Travel Agent) and PATA (Pacific Asia Travel Association). 
						<br>
						We are the service oriented and dedicated entrepreneurs, professional having decades of experience in the field of travel and tourism to serve the people willing to travel and explore interesting destinations. We are environmentally conscious and trained. The personnel involved in the company are now eager to contribute at maximum level. The company comprises the amalgamation of young dynamic personnel to experienced veterans of the tourism field. Sunshine Asian Travels introduces you to the ever-smiling faces, open hearts and warmth of its dedicated staffs. 
						<br>
						We also promote the preservation and well-being of our natural, cultural and traditional legacies.. We take price in the way we achieved service standards through a process of continuous staff training and full commitment towards our jobs. We believe that only our collective efforts will enable us to keep pace with the customer’s changing needs. Our work in every area of the travel industry: Hotel Bookings, Visa Assistance and Processing, Air Ticketing, Travel Insurance and many more.</p>
						<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text" style="color: #1f0733; font-weight: bold;">Pulchowk,Lalitpur, Nepal</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon" style="color: #1f0733; font-weight: bold;"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text"style="color: #1f0733; font-weight: bold;">977-01-5536148, 977-01-5524587</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a style="color: #1f0733; font-weight: bold;" href="mailto:contactme@gmail.com?Subject=Hello" target="_top">sunshine.suresh@gmail.com</a></div>
								</li>
								<br>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php require_once "footer.php";?>