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
         Request Patient detail
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">request-patient</li>
          </ol>
        </section>

      <!-- Main content -->
        <section class="content">
          <div class="row">
		   <div class="box-header">
                  <h3 class="box-title">View Request patient deal detail</h3>
                </div><!-- /.box-header -->
            <!-- left column -->
            <div class="col-md-12">
              <!-- Post News -->
              <div class="box box-primary">

                  <div class="box-body">
                      <div class="form-group">
					
                      <label>Request by patient</label>
                  <input type="text" class="form-control" name='firstname' value='<?php echo $fetchdata[0]->patient_firstname.' '.$fetchdata[0]->patient_lastname; ?>' required >
				   <br>
				   <a href='<?php  echo base_url();?>admin/view-patient/<?php echo @$fetchdata[0]->patient_id; ?>'><button type="button" class="btn btn-primary pull-left" style="margin-right: 5px;">
            <i class="fa fa-user"></i> View Profile
          </button></a><br>
					</div>
					<div class="form-group">
					
                      <label>Request to doctor</label>
                   <input type="text" class="form-control" name='firstname' value='<?php echo $fetchdata[0]->doctor_firstname.' '.$fetchdata[0]->doctor_lastname; ?>' required >
				   <br>
				   <a href='<?php  echo base_url();?>admin/view-patient/<?php echo @$fetchdata[0]->doctor_id; ?>'><button type="button" class="btn btn-primary pull-left" style="margin-right: 5px;">
            <i class="fa fa-user"></i> View Profile
          </button></a><br>
					</div>
					
					
					<div class="box-body">
                     <div class="form-group">
                      <label>Deal Frist name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='firstname' value='<?php echo $fetchdata[0]->deal_patient_firstname; ?>' required >
					 
                    </div>
					<div class="form-group">
                      <label>Deal Last name</label>
                      <input type="text" class="form-control" placeholder="No enter" name='lastname' value='<?php echo $fetchdata[0]->deal_patient_lastname; ?>' required>
					 
                    </div>
					
					 <div class="form-group youtube">
                      <label>Gender</label>
                     <select name='sex'>
					 <option  <?php if($fetchdata[0]->deal_patient_gender==0){ echo 'selected';} ?> value='0'>Male</option>
					  <option <?php if($fetchdata[0]->deal_patient_gender==1){ echo 'selected';} ?> value='1'>Female</option>
					 
					 </select>
                    </div>
					
					 <div class="form-group">
                <label>Birthdate:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name='birthday' id="dob" data-date-format='yyyy-mm-dd' value='<?php echo $fetchdata[0]->deal_patient_birthday; ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
						<div class='input-group'>
		<input type="text" class="form-control" placeholder="No enter"value='<?php echo $fetchdata[0]->deal_patient_phonenumber; ?>' required>
							
							 
						</div>
                    </div> 
					
					
					<div class="form-group">
                      <label>Deal price</label>
                      <input type="text" class="form-control" placeholder="No enter" name='lastname' value='<?php echo $fetchdata[0]->deal_price; ?>' required>
					 
                    </div>
					
					<div class="form-group">
                      <label>Deal patient condition</label>
     
	 <textarea class="form-control" rows="3" cols="170" name='comment'><?php	
                  echo @$fetchdata[0]->deal_patient_condition;
			
                       
					?></textarea>
					   
                    </div>
					<div class="form-group">
                <label>Date:</label>

                <div class="input-group">
                 
  <input type="text" class="form-control pull-right" value='<?php echo date('Y-m-d H:i:s', $fetchdata[0]->deal_timestamp); ?>' required>
				
                </div>
                <!-- /.input group -->
              </div>
				
					<div class="form-group">
                <label>Status:</label>

                <div class="input-group">
                 
                  <input type="text" class="form-control pull-right" value='<?php if(@$fetchdata[0]->deal_status==0){ echo'Pending';}elseif(@$fetchdata[0]->deal_status==1){ echo'Completed';}elseif(@$fetchdata[0]->deal_status==2){ echo 'Processing'; }elseif(@$fetchdata[0]->deal_status==3){ echo 'Cancel'; } ?>' required>
				
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

 