<?php $this->load->view('header'); ?>
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
 <div class="login-box">
 
      <div class="login-logo">
   <a href="#"> <img src="<?php  echo base_url();?>assets/img/uberlogo.png" height='150'><b></b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Foget Password</p>
        <form action="<?php  echo base_url();?>admin/forgetpassword" method="post">
     <div class="input-group btmm">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
<input class="form-control" type="text" name='email' placeholder="Email id" required>
</div>
       <br>
       
          <div class="row">
        <!-- /.col -->
            <div class="col-xs-6 col-xs-offset-3">
			 <input type="submit" class="btn btn-primary btn-block btn-flat" name='submit' value='Submit'>
            
			  <a href='<?php  echo base_url();?>' style='margin-top: 10px;
    float: left;
    margin-left: 35px;'>Back to login</a>
            </div><!-- /.col -->
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

<?php $this->load->view('footer'); ?>

