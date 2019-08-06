<?php
    $action = 'Manage';
    $panel = 'Booking';
    $title = $panel . ' ' . $action;
     require_once "header.php"; 
     $books = $booking->index();
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $panel ?> Management</h1>

          <div class="card shadow mb-4">
                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $action ?> <?php echo $panel ?>
                   
                  </h6>
                  
                </div>

                <div class="card-body">

                <table  class="table table-hover table-hover" id="myTable"  style="text-align: center;">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>CustomerName</th>
                      <th>Date</th>
                      <th>Comment</th>
                      <th>Package</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                          <?php foreach($books as $i => $booking){?>
                    <tr>
                              <td><?php echo $i+1?></td>
                              <td><?php echo $booking->customerId?></td>
                              <td><?php echo $booking->date?></td>
                              <td><?php echo $booking->comment?></td> 
                              <td><?php echo $booking->tourId?></td>

                             <td>
                                <span class="text text-success">Confirm /</span>
                          
                                <span class="text text-danger">Cancelled</span>
                            
                              </td>
                              

                          </tr>
                      <?php } ?>
                  </tbody>

                  <tfoot class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>CustomerName</th>
                      <th>Date</th>
                      <th>Comment</th>
                      <th>Package</th>
                      <th>Action</th>
                  </tfoot>
                </table>
 
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
        
<?php require_once "footer.php"; ?>

      