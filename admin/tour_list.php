<?php
    $action = 'List';
    $panel = 'Package';
    $title = $panel . ' ' . $action;
     require_once "header.php"; 
     $tours = $tour->index();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $panel ?> Management</h1>

          <div class="card shadow mb-4">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $action ?> <?php echo $panel ?>
                    <a href="tour_create.php" class="btn btn-info" style="margin-left: 70%; ">
                    <i class="fas fa-plus"></i>
                    Create</a>
                  </h6>
                  
                </div>

                <div class="card-body">

                <table  class="table table-hover table-hover" id="myTable"  style="text-align: center;">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Package Name</th>
                      <th>Category</th>
                      <th>Location</th>
                      <th>Created At</th>
                      <th>Status</th>  
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                          <?php foreach($tours as $i => $tour){?>
                    <tr>
                              <td><?php echo $i+1?></td>
                              <td><?php echo $tour->packageName?></td>
                              <td><?php echo $tour->category?></td>
                              <td><?php echo $tour->location?></td>
                              <td><?php echo $tour->created_at?></td>

                             <td>
                               <?php if($tour->status==1){?>
                                <span calss="text text-success">Active</span>
                              <?php }else{?>
                                <span class="text text-danger">De Active</span>
                             <?php } ?>
                              
                              <td>
                                
                              <a href="tour_view.php?tourId=<?php echo $tour->tourId?>" class="btn btn-info" title="View Details"><i class="fas fa-eye"></i></a>
                              <!-- <a href="tour_edit.php?tourId=<?php echo $tour->tourId?>" class="btn btn-warning" title="Edit"><i class="fas fa-edit"></i></a> -->
                              <a href="tour_delete.php?tourId=<?php echo $tour->tourId?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to Delete ?')"><i class="fas fa-trash"></i></a>
                              </td>

                          </tr>
                      <?php } ?>
                  </tbody>

                  <tfoot class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>Package Name</th>
                      <th>Category</th>
                      <th>Location</th>
                      <th>Created At</th>
                      <th>Status</th>  
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
 
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
        
<?php require_once "footer.php"; ?>

      