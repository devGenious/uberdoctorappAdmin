  <div class="confirm_content" style="display:none">
							<p class="popup-content">
								Are You sure to change the status?
							</p>
							<div class="confirmModal_footer">
								<button type="button" class="btn btn-primary" data-confirmmodal-but="ok">Ok</button>
							<button type="button" class="btn btn-default"data-confirmmodal-but="cancel">Cancel</button>
							</div>
		</div>
		 	<div id="confirm_content_del" style="display:none">
							<p class="popup-content">
							Are You sure You want delete?
							</p>
							<div class="confirmModal_footer">
								<button type="button" class="btn btn-primary" data-confirmmodal-but="ok">Ok</button>
								<button type="button" class="btn btn-default"data-confirmmodal-but="cancel">Cancel</button>
							</div>
						</div>
						
		 <div class="view_details" style="display:none">
							<p class="popup-content"></p>
							<div class="col-md-12">
						
							</div>
						</div>				
						
<!--details page-->	
	

	
<div id="overlay"></div>
<div id="popup">
    <div class="popupcontrols">
        <span id="popupclose"><i class="fa fa-times"></i></span>
    </div>
    <div class="popupcontent">
        <h3>View Client Details</h3>
		
			<div class="col-md-12">
					
			</div>
		
		
		
    </div>
</div>

<script type="text/javascript">
        // Initialize Variables
    var closePopup = document.getElementById("popupclose");
    var overlay = document.getElementById("overlay");
    var popup = document.getElementById("popup");
        // Close Popup Event
    closePopup.onclick = function() {
        overlay.style.display = 'none';
        popup.style.display = 'none';
    };
</script>
	
	
			
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b>My
        </div>
        <strong>Copyright &copy; 2017 <a href="#">doctorUber.com </a></strong> All rights reserved.
      </footer>
	   

    <!-- jQuery 2.1.4 -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php  echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php  echo base_url();?>assets/admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php  echo base_url();?>assets/admin/dist/js/demo.js"></script>
	<!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
	<script src="<?php  echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
	<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php  echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
	
   <script type="text/javascript"src="<?php  echo base_url();?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php  echo base_url();?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	
   <!-- DataTables -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php  echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script src="<?php  echo base_url();?>assets/admin/dist/js/popModal.js"></script>
 
   <!-- Select2 -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/select2/select2.full.min.js"></script>
	
	 <script src="<?php  echo base_url();?>assets/admin/dist/js/custom.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php  echo base_url();?>assets/admin/plugins/morris/morris.min.js"></script>

  
	<script>

$('#addLine').click(function() {
	
   var clone= $('.line').last().clone()
	
	 if(!clone.find('.delimg')[0]) clone.append('<a href="#" class="delimg">Remove</a>')
		 
	clone.appendTo('#lines');
});
	$('#lines').on('click', '.delimg', function(){
		
			 $(this).closest('.line').remove();
				});
</script>
   
  </body>
</html>

