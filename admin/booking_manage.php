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
                   <?php if(isset($_GET['confirm']) && $_GET['confirm'] == 1){ ?>
        <p class="alert alert-success text-success">Booking has been confirmed and mail is sent to Customer!!</p>
      <?php } ?>
      <?php if(isset($_GET['confirm']) && $_GET['confirm'] == 0){ ?>
        <p class="alert alert-danger text-danger">Booking has been cancelled and mail sent to Customer !!</p>
      <?php } ?>
                <table  class="table table-hover table-hover" id="myTable"  style="text-align: center;">
                  <thead class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>CustomerName</th>
                      <th>CustomerEmail</th>
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
                              <td><?php echo $booking->customerName?></td>
                              <td><?php echo $booking->customerEmail?></td>
                              <td><?php echo $booking->date?></td>
                              <td><?php echo $booking->comment?></td> 
                              <td><?php echo $booking->packageName?></td>

                             <td>
                              <?php if($booking->status == 0){ ?>
                                <a href="PHPMailer-master/sendsuccess.php?bookingId=<?php echo $booking->bookingId?>" onclick="return confirm('Are you sure to Confirm ?')" class="btn btn-success"><i class="fas fa-check-circle"></i> Confirm</a>
                          <?php } ?>
                          
                                <a href="PHPMailer-master/sendfail.php?bookingId=<?php echo $booking->bookingId?>" onclick="return confirm('Are you sure to Cancelled ?')" class="btn btn-danger"><i class="fas fa-times-circle"></i> Cancelled</a>
                            
                              </td>
                              

                          </tr>
                      <?php } ?>
                  </tbody>

                  <tfoot class="thead-dark">
                    <tr>
                      <th>#</th>
                      <th>CustomerName</th>
                      <th>CustomerEmail</th>
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

      