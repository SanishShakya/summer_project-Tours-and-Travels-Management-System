<style type="text/css">
 
  .error{
      font-size: 1rem;
      width:100%;
      color:red;
    }
    .form-control{
      width: 100%;
    }
  </style>
  <?php
	@session_start();
		require_once "admin/object.php";

	 if(isset($_POST['btnEnquiry']))
  {
    $err=[];

    if(isset($_POST['name'])&& !empty($_POST['name'])&& trim($_POST['name']) !='')
    {
      $enquiry->set('name',$_POST['name']);
    }
    else{
        $err['name']='Enter name';
        }

   if(isset($_POST['subject'])&& !empty($_POST['subject'])&& trim($_POST['subject']) !='')
  {
    $enquiry->set('subject',$_POST['subject']);
  }
  else{
      $err['subject']='Enter subject';
      }

  if(isset($_POST['email'])&& !empty($_POST['email'])&& trim($_POST['email']) !='')
  {
    $enquiry->set('email',$_POST['email']); 
  }
  else{
      $err['email']='Enter email';
      }

  if(isset($_POST['description'])&& !empty($_POST['description'])&& trim($_POST['description']) !='')
  {
    $enquiry->set('description',$_POST['description']); 
  }
  else{
      $err['description']='Enter description';
      }

     $enquiry->set('created_at',date('Y-m-d H:i:s'));
        $status = $enquiry->create();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Enquiry | Sunshine Asian Int'l</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/pokhara.jpg"></div>
		<div class="home_content">
			<div class="home_title" style="color: #1660A1;">Enquiry Us</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Make a Enquiry with Us</div>
							<?php if(isset($status) && $status == true){ ?>
						        <p class="alert alert-success text-success">Enquiry Insert Success !!</p>
						    <?php } ?>
						     <?php if(isset($status) && $status == false){ ?>
						        <p class="alert alert-danger text-danger">Enquiry Insert Failed !!</p>
						    <?php } ?>

						<form action="#" id="enquiryForm" class="contact_form text-center" method="post">

							<input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="Name" data-error="Name is required." required=""><br>
							<input type="email" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="E-mail" data-error="Email is required." required=""><br>
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" name="subject" placeholder="Subject" data-error="Subject is required." required="required"><br>
							<textarea id="contact_form_message" class="text_field contact_form_message" name="description" rows="4" placeholder="Description" data-error="Please, write us a message." required="required"></textarea><br>
							<button type="submit" id="form_submit_button" name="btnEnquiry" class="form_submit_button button trans_200">Send Enquiry<span></span><span></span><span></span></button>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="images/man.png" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">Pulchowk, Lalitpur</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">01-5560123, 015560124</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="" target="_top">sunshineasian@gmail.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="">www.sunshineasian.com.np</a></div>
							</li>
						</ul>
					</div>


				</div>

				

			</div>
		</div>
	</div>


<?php require_once "footer.php";?>