<?php $this->load->view('admin/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<?php
			if(isset($succes_message))
{
	
	echo '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                  '.$succes_message.'
                  </div>';
}
if(isset($error_message))
{
	echo '<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                  '.$error_message.'
                  </div>';
}
//print_r($fetchdata);
?>
        <section class="content-header">
          <h1>
         Doctors
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">doctors</li>
          </ol>
        </section>

      <!-- Main content -->
        <section class="content">
          <div class="row">
		   <div class="box-header">
                  <h3 class="box-title">View doctor profile</h3>
                </div><!-- /.box-header -->
            <!-- left column -->
            <div class="col-md-12">
              <!-- Post News -->
              <div class="box box-primary">

                  <div class="box-body">
                     <div class="form-group">
                      <label>Frist name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='firstname' value='<?php echo $fetchdata[0]->doctor_firstname; ?>' required >
					 
                    </div>
					<div class="form-group">
                      <label>Last name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='lastname' value='<?php echo $fetchdata[0]->doctor_lastname; ?>' required>
					 
                    </div>
					<?php if(@$fetchdata[0]->doctor_profileimageurl){ ?>
					<div class='col-md-12'>
					<label>Profile image</label>
					<div class="form-group">
					<img style="height:143px;width:190px"src="<?php echo @$fetchdata[0]->doctor_profileimageurl; ?>" />
					</div>
					</div>
					<?php }  ?>
					<div class="form-group">
                      <label>Qualifications</label>
                      <input type="email" class="form-control" placeholder="No enter"  value='<?php echo $fetchdata[0]->doctor_qualifications; ?>' required>
					   
                    </div>
					
				 
						 
			<div class="form-group">
                      <label for="exampleInputEmail1">Doctor company</label>
					  <?php 
					 @$company= $this->database_model->get_single_value('tbl_company',array('company_id'=> $fetchdata[0]->doctor_company));
					  ?>
						
		<input type="text" class="form-control" placeholder="No enter" value='<?php echo @$company[0]->company_name; ?>' required>
							
							
					
                    </div> 
					<div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
						<div class='input-group'>
						<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->doctor_phone; ?>' required>
							
							 
						</div>
                    </div> 
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
						
						<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->doctor_email; ?>' required>
							
						
                    </div> 
			 
			 
			   <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
						<div class='input-group'>
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->doctor_password; ?>' required>
							
							 
						</div>
                    </div> 
			 
			 
		         <div class="form-group">
                <label>Doctor provider:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right"  value='<?php echo @$fetchdata[0]->doctor_provider; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
		      <div class="form-group">
                <label>Doctor latitude:</label>

                <div class="input-group">
                  
                  <input type="text" class="form-control pull-right"  value='<?php echo @$fetchdata[0]->doctor_latitude; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
              
					 <div class="form-group">
                <label>Doctor longitude:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right" value='<?php echo @$fetchdata[0]->doctor_longitude; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					
					
					 <div class="form-group">
                <label>Doctor available:</label>

                <div class="input-group">
                
                  <input type="text" class="form-control pull-right" value='<?php if(@$fetchdata[0]->doctor_available==0){ echo'pending';}elseif(@$fetchdata[0]->doctor_available==1){ echo'available';}elseif(@$fetchdata[0]->doctor_available==2){ echo'available'; }elseif(@$fetchdata[0]->doctor_available==3){ echo'on route'; } ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					<div class="form-group">
                <label>Last Date:</label>

                <div class="input-group">
                 
  <input type="text" class="form-control pull-right" value='<?php echo date('Y-m-d H:i:s', $fetchdata[0]->doctor_lasttime); ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					
                  </div><!-- /.box-body -->
				 </div>
                </form>
              </div><!-- /.box -->
            <!-- right column -->
		</div>

	  <!-----table end----->
		

	</div>
		
        </section><!-- /.content -->
		
		
		
      </div><!-- /.content-wrapper -->

  <?php $this->load->view('admin/footer'); ?>

 