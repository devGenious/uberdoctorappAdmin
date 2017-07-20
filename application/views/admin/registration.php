<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DoctorUber |Registeration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
<?php $this->load->helper('url'); ?> 
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/iCheck/square/blue.css">
	  <!-- Date Picker -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="hold-transition login-page">
<?php

  if(@$error)
    {
		echo '<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    '.$error.'
                  </div>';
		
	}

  
 
  if(@$succes_message)
    {
		echo '<div class="alert alert-success  alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check "></i> Alert!</h4>
                    '.$succes_message.'
                  </div>';
		
	} 

?>
 <div class="register-box">
 
      <div class="login-logo">
       <a href="#"> <img src="<?php  echo base_url();?>assets/img/uberlogo.png" height='150'><b></b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <label class='login-box-msg'>Register as company</label>
		 <div class='msg-error'><?php echo validation_errors();?></div>
		 <div class='msg-error'><?php echo @$err;?></div>
        <form action="<?php  echo base_url();?>index.php/admin/registration" method="post"  enctype="multipart/form-data">
         
		  <div class="form-group has-feedback">
            <input type="email"  name='email' class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
            
          </div>
		  
		  
          <div class="form-group has-feedback">
            <input type="password" name='password' class="form-control" placeholder="Password">
           
          </div>
		  
		   <div class="form-group has-feedback">
            <input type="password" name='re-password' class="form-control" placeholder="Re enter Password">
           
          </div>
		 
		  <div class="form-group has-feedback">
            <input type="text"  name='company_name' class="form-control" placeholder="Company name"value="<?php echo set_value('company_name'); ?>">
            
          </div>
		  
		  
		  <div class="form-group has-feedback">
          <p class="">Logo</p> 
                      <input type="file" id='logo' name='logoimg' id="exampleInputFile">
            
          </div>
		 
		<div class="form-group has-feedback">
					 <div class="img-preview-logo">
					  <?php if(@$fetch_single[0]->photo_url){ ?>
					 <img style="height:100px;width:150px"src="<?php echo @$fetch_single[0]->photo_url; ?>" />
					 <?php } ?>
					 </div>
	              <div class="upload-msg-logo"></div>
                      
					  </div>
		 
		 
		 
		 
          <div class="row">
             <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" required> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
           <div class="col-xs-12">
            
			 <div class="col-xs-5 pull-left">
             <a href='<?php  echo base_url();?>'>Back to login</a>
            </div><!-- /.col -->
			  <div class="col-xs-5 pull-right">
			 
			     <input type="submit" class="btn btn-primary btn-block btn-flat" name='submit' value='Sign up'>
            
               </div><!-- /.col -->
			</div>
			
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php  echo base_url();?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo base_url();?>assets/admin/plugins/iCheck/icheck.min.js"></script>
	<script type="text/javascript"src="<?php  echo base_url();?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
	 <script src="<?php  echo base_url();?>assets/admin/dist/js/custom.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
