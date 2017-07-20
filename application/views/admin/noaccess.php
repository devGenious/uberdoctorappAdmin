<?php $this->load->view('header'); ?>
<?php

  if(@$error)
    {
		echo '<div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    Use wrong user name/Password
                  </div>';
		
	}

  
  

?>
 <div class="login-box">
      <div class="login-logo">
        <a href="<?php  echo base_url();?>"><b>WowJax panel</b></a>
      </div><!-- /.login-logo -->
	   </div>
	   <div class='example-modal noaccess'>
       <div class="callout callout-info accesalert">
            <h4><i class="icon fa fa-ban"></i>Alert!</h4>
            <p>Sorry! You have not access you account. Because of your account is <?php  if($status==1){ echo 'Active'; }else{ echo'Not active. Please check your email. and active your account'; }; ?>.Further information please contact in <?php echo @$this->data['adminemail']; ?></p>
			<a href="<?php  echo base_url();?>" class='btn btn-primary btn-block btn-flat'>Go to login</a>
          </div>
		  </div>
   <!-- /.login-box -->
<?php $this->load->view('footer'); ?>

