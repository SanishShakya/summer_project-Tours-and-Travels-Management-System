
	<!-- Copyright -->

	<div class="copyright">
		
			
				
					<div class="copyright_content d-flex flex-row align-items-center" style="margin-left: 40%;">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <span>Copyright &copy; Sunshine Asian Int'l Travel & Tours <?php echo date('Y'); ?></span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				
				
	
	</div>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single_listing_custom.js"></script>
<script src="js/contact_custom.js"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
    	$('#contact_form').validate(
    	{
    		rules:
    		{
    		mobile:
		          {
		            required: true,
		            rangelength:[10,10],
		            min: 1
		          },
		    password:
		          {
		            required: true,
		            minlength: 8
		          }
		        
    		}
    	});

    	$('#enquiryForm').validate(
    	{
    		rules:
    		{
    		subject:
		          {
		            required: true,
		            minlength: 10,
		          },
		    password:
		          {
		            required: true,
		            minlength: 8
		          }
    		}
    	});
    });
  </script>
</body>

</html>