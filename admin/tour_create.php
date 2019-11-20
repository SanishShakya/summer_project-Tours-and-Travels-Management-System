<?php
  $action = 'Create';
  $panel = 'Package';
  $title = $panel . ' ' . $action;
  require_once "header.php";
  if(isset($_POST['btnSave']))
  {
    $err=[];

    if(isset($_POST['packageName'])&& !empty($_POST['packageName'])&& trim($_POST['packageName']) !='')
    {
      $tour->set('packageName',$_POST['packageName']);
    }
    else{
        $err['packageName']='Enter Package Name';
        }

    if(isset($_POST['description'])&& !empty($_POST['description'])&& trim($_POST['description']) !='')
    {
      $tour->set('description',$_POST['description']); 
    }
    else{
        $err['description']='Enter Description';
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
    if($_FILES['photo']['size'] < 8388608){
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
     $tour->set('created_by',$_SESSION['admin_id']);
     $tour->set('created_at',date('Y-m-d H:i:s'));
     $status = $tour->create();
  }
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
        <p class="alert alert-success text-success">Packages Insert Success !!</p>
      <?php } ?>
      <?php if(isset($status) && $status == false){ ?>
        <p class="alert alert-danger text-danger">Packages Insert Failed !!</p>
      <?php } ?>

      <form action="" method="post" id="tourForm" enctype="multipart/form-data">

       <div class="form-group">
          <label for="packageName">Package Name</label>
          <input type="text" class="form-control" id="packageName"  placeholder="Enter Package Name" name="packageName" required="required">
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
          <input type="number" class="form-control" id="amount"  placeholder="Enter Amount" name="amount" required="required">
        </div>

        <div class="form-group">
          <label for="days">Days/ Nights</label>
          <input type="text" class="form-control" id="days"  placeholder="Enter days" name="days" required="required">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description" required="required"></textarea> 
        </div>

        <div class="form-group">
          <label for="location">Location</label>
           <input type="text" class="form-control" id="location"  placeholder="Enter location" name="location" required="required">
        </div>

        <div class="form-group">
          <label for="feature">Package Features</label>
           <input type="text" class="form-control" id="feature"  placeholder="Enter Package Features" name="feature" required="required">
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

        <button type="submit" name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Save Package</button>
      </form>
            
       
    </div>
  </div>

  </div>

  
  <!-- /.container-fluid -->
<?php require_once "footer.php"; ?>

  <script>
    CKEDITOR.replace( 'description' );
    </script>