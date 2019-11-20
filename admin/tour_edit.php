<?php
  $action = 'Update';
  $panel = 'Package';
  $title = $panel . ' ' . $action;
  require_once "object.php"; 

  $tour->set('tourId',$_GET['tourId']);

  if(isset($_POST['btnUpdate']))
  {
    $err=[];

    if(isset($_POST['packageName'])&& !empty($_POST['packageName'])&& trim($_POST['packageName']) !='')
    {
      $tour->set('packageName',$_POST['packageName']);
    }
    else{
        $err['packageName']='Enter Category Name';
        }

    if(isset($_POST['description'])&& !empty($_POST['description'])&& trim($_POST['description']) !='')
    {
      $tour->set('description',$_POST['description']); 
    }
    else{
        $err['description']='Enter News Description';
        }

    if(isset($_POST['category'])&& !empty($_POST['category'])&& trim($_POST['category']) !='')
    {
      $tour->set('category',$_POST['category']); 
    }
    else{
        $err['category']='Enter Category';
        }

    if(isset($_POST['days'])&& !empty($_POST['days'])&& trim($_POST['days']) !='')
    {
      $tour->set('days',$_POST['days']); 
    }else{
        $err['days']='Enter Number of Days';
        }

    if(isset($_POST['amount'])&& !empty($_POST['amount'])&& trim($_POST['amount']) !='')
    {
      $tour->set('amount',$_POST['amount']); 
    }
    else{
        $err['amount']='Enter Amount';
        }

     if(isset($_POST['location'])&& !empty($_POST['location'])&& trim($_POST['location']) !='')
    {
      $tour->set('location',$_POST['location']); 
    }
    else{
        $err['location']='Enter Location';
        }
  
    if(isset($_POST['feature'])&& !empty($_POST['feature'])&& trim($_POST['feature']) !='')
    {
      $tour->set('feature',$_POST['feature']); 
    }
    else{
        $err['feature']='Enter Feature';
        }
if(isset($_FILES['photo']['error'])&& $_FILES['photo']['error'] ==0)
  {
    //size check
    if($_FILES['photo']['size'] < 9999999000){
      //type check
      $type = ['image/png','image/jpg','image/jpeg','image/gif'];
      if(in_array($_FILES['photo']['type'],$type)){
        //upload file
        if(move_uploaded_file($_FILES['photo']['tmp_name'],'images/' . $_FILES['photo']['name'])){
          $tour->set('photo',$_FILES['photo']['name']);
        }else{
          echo 'file uploaded failed';
        }
      }else{
        $err['photo']='files type dos not match';
      }
    }else{
      $err['photo']='files size exceeded,100 kb allowed';
    }
  }
    $tour->set('status',$_POST['status']); 
    $status = $tour->edit();
    // header('location:tour_list.php');
  }
  $tours = $tour->selectDataById();
  require_once "header.php"; 
 ?>
 

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $panel ?> Management</h1>
    <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $action ?> <?php echo $panel ?>
              <a href="tour_list.php" class="btn btn-info" style="margin-left: 70%;">
              <i class="fas fa-list"></i>
              List</a>
            </h6>
            
          </div>
    <div class="card-body">

      <?php if(isset($status) && $status == true){ ?>
        <p class="alert alert-success text-success">Packages Update Success !!</p>
      <?php } ?>
      <?php if(isset($status) && $status == false){ ?>
        <p class="alert alert-danger text-danger">Packages Update Failed !!</p>
      <?php } ?>

      <form action="" method="post" id="tourForm" enctype="multipart/form-data">

       <div class="form-group">
          <label for="packageName">Package Name</label>
          <input type="text" class="form-control" id="packageName"  placeholder="Enter Package Name" name="packageName" required="required" value="<?php echo $tours[0]->packageName?>">
        </div>


        <div class="form-group">
          <label for="category">Category</label>
           <select name='category' class="form-control" id="category" required="required"></br>
            <option value=''>Select Category</option>
              <option value="Family">Family</option>
              <option value="Indiviual">Indiviual</option>
              <option value="Couple">Couple</option>



          </select>
        </div>

        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="number" class="form-control" id="amount"  placeholder="Enter Amount" name="amount" required="required" value="<?php echo $tours[0]->amount?>">
        </div>

        <div class="form-group">
          <label for="days">Days/ Nights</label>
          <input type="text" class="form-control" id="days"  placeholder="Enter days" name="days" required="required" value="<?php echo $tours[0]->days?>">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" required="required"><?php echo $tours[0]->packageName?></textarea> 
        </div>

        <div class="form-group">
          <label for="location">Location</label>
           <input type="text" class="form-control" id="location"  placeholder="Enter location" name="location" required="required" value="<?php echo $tours[0]->location?>">
        </div>

        <div class="form-group">
          <label for="feature">Package Features</label>
           <input type="text" class="form-control" id="feature"  placeholder="Enter Package Features" name="feature" required="required" value="<?php echo $tours[0]->feature?>">
        </div>

        <div class="form-group">
          <label for="photo">Image</label><br>
          <input type='file' name='photo' id='photo'>
        </div>

        <div class="form-group">
          <label for="status">Status</label><br>
          <input type="radio" id="active" name="status" value="1" checked="" required="required">Active
          <input type="radio" id="deactive" name="status" value="0" required="required">De-Active
        </div>


        <hr class="sidebar-divider">

        <button type="submit" name="btnUpdate" class="btn btn-primary"><i class="fas fa-redo"></i> Update Package</button>
      </form>
            
       
    </div>
  </div>

  </div>

  
  <!-- /.container-fluid -->
<?php require_once "footer.php"; ?>

  <script>
    CKEDITOR.replace( 'description' );
    </script>
