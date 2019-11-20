</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sunshine Asian Int'l Travel & Tours <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> 

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="js/validation/dist/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('#loginForm').validate();
    });
  </script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
  <script type="text/javascript" src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
      $('#adminForm').validate(
      {
        rules:
        {
          username:
          {
            required:true,
            minlength: 6
          }, 
          name:
          {
            required:true,
            minlength: 6
          },  
        phone:
              {
                required: true,
                rangelength:[7,10]
              },
        password:
              {
                required: true,
                minlength: 8
              }
        }
      });

      $('#tourForm').validate(
      {
        rules:
        {
        packageName:
              {
                required: true,
                minlength: 5,
              },
        amount:
        {
          min: 1
        }
        }
      });
    });
  </script>
</body>

</html>

     

            
        