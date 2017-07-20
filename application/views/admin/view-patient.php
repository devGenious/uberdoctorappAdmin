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
         Patients
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">patients</li>
          </ol>
        </section>

      <!-- Main content -->
        <section class="content">
          <div class="row">
		   <div class="box-header">
                  <h3 class="box-title">View Patient profile</h3>
                </div><!-- /.box-header -->
            <!-- left column -->
            <div class="col-md-12">
              <!-- Post News -->
              <div class="box box-primary">

                  <div class="box-body">
                     <div class="form-group">
                      <label>Frist name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='firstname' value='<?php echo $fetchdata[0]->patient_firstname; ?>' required >
					 
                    </div>
					<div class="form-group">
                      <label>Last name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='lastname' value='<?php echo $fetchdata[0]->patient_lastname; ?>' required>
					 
                    </div>
					
					 <div class="form-group youtube">
                      <label>Gender</label>
                     <select name='sex'>
					 <option  <?php if($fetchdata[0]->patient_gender==0){ echo 'selected';} ?> value='0'>Male</option>
					  <option <?php if($fetchdata[0]->patient_gender==1){ echo 'selected';} ?> value='1'>Female</option>
					 
					 </select>
                    </div>
					
					 <div class="form-group">
                <label>Birthdate:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name='birthday' id="dob" data-date-format='dd/mm/yyyy' value='<?php echo $fetchdata[0]->patient_birthday; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					<div class="form-group">
                      <label>Address</label>
     <input type="email" class="form-control" placeholder="No enter"  value='<?php echo $fetchdata[0]->patient_address; ?>' required>
					   
                    </div>
					
				 
						 
			
					<div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
						<div class='input-group'>
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->patient_phonenumber; ?>' required>
							
							 
						</div>
                    </div> 
					<div class="form-group">
                      <label for="exampleInputEmail1">Medical Phone</label>
						<div class='input-group'>
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->patient_medicarenumber; ?>' required>
							
							 
						</div>
                    </div> 
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
						
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->patient_email; ?>' required>
							
						
                    </div> 
			 
			 
			   <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
						<div class='input-group'>
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->patient_password; ?>' required>
							
							 
						</div>
                    </div> 
			 
			  <div class="form-group">
                <label>Concession card number:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right"  value='<?php echo @$fetchdata[0]->patient_concessioncardnumber; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
		         <div class="form-group">
                <label>Dva card number:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right"  value='<?php echo @$fetchdata[0]->patient_dvacardnumber; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
		      <div class="form-group">
                <label>Latitude:</label>

                <div class="input-group">
                  
                  <input type="text" class="form-control pull-right"  value='<?php echo @$fetchdata[0]->patient_latitude; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
              
					 <div class="form-group">
                <label>Longitude:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right" value='<?php echo @$fetchdata[0]->patient_longitude; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					
					<div class="form-group">
                <label>patient gp:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right" value='<?php echo @$fetchdata[0]->patient_gp; ?>' required>
				
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

 