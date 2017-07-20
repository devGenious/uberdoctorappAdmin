   <!-- jQuery 2.1.4 -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php  echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
	  
	  //captcha	
 $("a.refresh").click(function() {
                    $.ajax({
                        type: "POST",
                        url: "<?php  echo base_url();?>/captcha_refresh",
                        success: function(res) {
							//console.log(json_encode(res));
							var objJSON = JSON.parse(res);
							
                            if (res)
                            {
								  $(".captcha_img").empty();
								  $("#captcha").val(objJSON.word);
                                  $(".captcha_img").html(objJSON.image);
                            }
                        }
                    });
                });	
	  
    </script>
  </body>
</html>