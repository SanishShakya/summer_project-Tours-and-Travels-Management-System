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
require_once "header.php";


 if(isset($_POST['btnRegister']))
  {
    $err=[];

    if(isset($_POST['name'])&& !empty($_POST['name'])&& trim($_POST['name']) !='')
    {
      $customer->set('name',$_POST['name']);
    }
    else{
        $err['name']='Enter name';
        }

   if(isset($_POST['username'])&& !empty($_POST['username'])&& trim($_POST['username']) !='')
  {
    $customer->set('username',$_POST['username']);
  }
  else{
      $err['username']='Enter username';
      }

  if(isset($_POST['email'])&& !empty($_POST['email'])&& trim($_POST['email']) !='')
  {
    $customer->set('email',$_POST['email']); 
  }
  else{
      $err['email']='Enter email';
      }

  if(isset($_POST['mobile'])&& !empty($_POST['mobile'])&& trim($_POST['mobile']) !='')
  {
  	
    $customer->set('mobile',$_POST['mobile']); 
  }
  else{
      $err['mobile']='Enter Mobile';
  }

  if(isset($_POST['address'])&& !empty($_POST['address'])&& trim($_POST['address']) !='')
  {
    $customer->set('address',$_POST['address']); 
  }
  else{
      $err['address']='Enter address';
      }

  if(isset($_POST['password'])&& !empty($_POST['password'])&& trim($_POST['password']) !='')
  {
    $customer->set('password',md5($_POST['password'])); 
  }
  else{
      $err['password']='Enter password';
      }

  if(isset($_POST['gender'])&& !empty($_POST['gender'])&& trim($_POST['gender']) !='')
  {
    $customer->set('gender',md5($_POST['gender'])); 
  }
  else{
      $err['gender']='Enter gender';
      }


 
        $status = $customer->create();
  }
?>


<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<br>
					<br>
					<br>
					<div class="contact_form_container">
						<div class="contact_title"><center>REGISTER</center></div><br>
						<?php if(isset($status) && $status == true){ ?>
        <p class="alert alert-success text-success">Customer Registration Success !!</p>
      <?php } ?>
      <?php if(isset($status) && $status == false){ ?>
        <p class="alert alert-danger text-danger">Customer Registration Failed !!</p>
      <?php } ?>
						<form action="#" method="post" id="contact_form" class="contact_form" validate="">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="Full Name" required="" data-error="Name is required."><br>

							<input type="text" id="contact_form_username" class="contact_form_username input_field" name="username" placeholder="Username" required="" data-error="Password is required."><br>

							<input type="password" id="contact_form_password" class="contact_form_passsword input_field" name="password" placeholder="Password" required="" data-error="Password is required."><br>

							<input type="email" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="E-mail" required="" data-error="Email is required."><br>

							
							<input type="text" id="contact_form_address" class="contact_form_address input_field" name="address" placeholder="Address" required="" data-error="address is required."><br>

													
							<input type="number" id="contact_form_mobile" class="contact_form_mobile input_field" name ="mobile" placeholder="Mobile" required="" data-error="address is required."><br><br><br><br><br><br>
					
							<input type="radio" name="gender" value="Male" checked=""><label id="contact_form_gender" class="contact_form_gender input_field">  Male</label>
							<input type="radio" name="gender" value="Female"><label id="contact_form_gender" class="contact_form_gender input_field">Female</label><br>

							<button type="submit" id="form_submit_button" style="margin-left: 35%" name="btnRegister" class="form_submit_button button">Sign Up<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php require_once "footer.php";?>