<?php
    $action = 'View';
    $panel = 'Packages';
    $title = $panel . ' ' . $action;
    require_once "header.php";
    $tour->set('tourId',$_GET['tourId']);
    $tours = $tour->selectDataById();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $panel ?> Management</h1>
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $action ?> <?php echo $panel ?>
                  	<a href="tour_create.php" class="btn btn-info" style="margin-left: 72%;">
                  	<i class="fas fa-plus"></i>
                  	Create</a>
                    <a href="tour_list.php" class="btn btn-info ">
                    <i class="fas fa-list"></i>
                    List</a>
                  </h6>
                  
                </div>
                <div class="card-body">
                	<table  class="table table-hover table-hover">
                		<tr>
                    <th>Package Name</th>
                    <td><?php echo $tours[0]->packageName ?></td>
                  </tr>
                  <tr>
                    <th>Description</th> 
                    <td><?php echo $tours[0]->description?></td>
                  </tr>
                  <tr>
                    <th>Amount</th> 
                    <td><?php echo $tours[0]->amount?></td>
                  </tr>
                  <tr>
                    <th>Category</th> 
                    <td><?php echo $tours[0]->category?></td>
                  </tr>
                  <tr>
                    <th>Days</th> 
                    <td><?php echo $tours[0]->days?></td>
                  </tr>
                  <tr>
                    <th>Location</th> 
                    <td><?php echo $tours[0]->location?></td>
                  </tr>
                  <tr>
                    <th>Package Features</th> 
                    <td><?php echo $tours[0]->feature?></td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td>
                       <?php if($tours[0] -> status ==1){?>
                                  <span class="text text-success">Active</span>
                                <?php }else{?>
                                  <span class="text text-danger">De Active</span>
                               <?php } ?>

                    </td>
                  </tr>
                  <tr>
                    <th>Created At</th>
                    <td><?php echo $tours[0]->created_at?></td>
                  </tr>
                  <tr>
                    <th>Images</th>
                    <td><img src="images/<?php echo $tours[0]->image?>" width="220" height="150"></td>
                  </tr>
                  <tr>
                    <th>Created By</th>
                    <td><?php echo $tours[0]->aname?></td>
                  </tr>
              </table>
 
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
<?php require_once "footer.php"; ?>

      