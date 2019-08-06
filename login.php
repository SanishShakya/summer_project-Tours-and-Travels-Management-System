<?php
	require_once "object.php";

	if(isset($_POST['btnLogin']))
{
  $err=[];
  if(isset($_POST['email'])&& !empty($_POST['email'])&& trim($_POST['email']) !='')
  {
    $customer->set('email',$_POST['email']);
  }else{
  $err['email']='Enter email';
}
if(isset($_POST['password'])&& !empty($_POST['password'])&& trim($_POST['password']) !='')
  {
    $customer->set('password',md5($_POST['password'])); 
  }else{
  $err['password']='Enter password';
}
if(count($err)==0){
  $customerdata = $customer->login();
  if(count($customerdata) == 1){
    header('location:Tour_package.php');
  }else{
    $err['btnLogin'] = 'Invalid Username and Password'; }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Sunshine Asian Int'l</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/listing_7.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<?php if(isset($err['btnLogin'])){ ?>
                        <p class="alert alert-danger text-danger"><?php echo $err['btnLogin'] ?></p>
                      <?php } ?>

			<form class="login100-form validate-form" action="" method="post">
				<span class="login100-form-title p-b-37">
					Login
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="email" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="btnLogin" class="form_submit_button button">
						Sign In
					</button>
				</div>

				<br>
				<br>

				<div class="text-center">
					<a href="register.php" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>