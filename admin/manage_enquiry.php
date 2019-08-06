<?php
    $action = 'Manage';
    $panel = 'Enquiry';
    $title = $panel . ' ' . $action;
     require_once "header.php"; 
     $enquirys = $enquiry->index();
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Description</th>
                      <th>Posted Date</th>  
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                          <?php foreach($enquirys as $i => $enquiry){?>
                    <tr>
                              <td><?php echo $i+1?></td>
                              <td><?php echo $enquiry->name?></td>
                              <td><?php echo $enquiry->email?></td>
                              <td><?php echo $enquiry->subject?></td>
                              <td><?php echo $enquiry->description?></td> 
                              <td><?php echo $enquiry->created_at?></td>

                             <td>
                               <?php if($enquiry->status==1){?>
                                <span calss="text text-success">Read</span>
                              <?php }else{?>
                                <span class="text text-danger">Un-read</span>
                             <?php } ?>
                              </td>
                             

                          </tr>
                      <?php } ?>
                  </tbody>

                  <tfoot class="thead-dark">
                    <tr>
                     <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Description</th>
                      <th>Posted Date</th>  
                      <th>Action</th>
                  </tfoot>
                </table>
 
                </div>
              </div>

        </div>
        <!-- /.container-fluid -->
        
<?php require_once "footer.php"; ?>

      