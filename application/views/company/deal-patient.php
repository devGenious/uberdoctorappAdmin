<?php $this->load->view('admin/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<div class='del_res'>
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

?>
</div>
        <section class="content-header">
          <h1>
          List of deal patient under this company
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> deal-patient-request</li>
          </ol>
        </section>

     
		   <!-- Main content -->
        <section class="content">
          <div class="row">
           
		<div class="row">
            <div class="col-md-12">
				<div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of  deal patient request</h3>
                </div><!-- /.box-header -->
		
				 <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    
                     <thead>
                      <tr>
				<th>Sr no</th>
                        <th>By Patient name</th>
						 <th>To Doctor name</th>
                      	 <th>Deal price</th>
                      <th>Status</th>
					
                        <th>Action</th>
						
                       
                      </tr>
                    </thead>
                   
                    <tbody>
							
		<?php 
		
		
		
 $i=1;
 //print_r($fetch);

foreach($fetch as $value){
	
		?>
                    <tr id='<?php echo $value->request; ?>'>
                        <td><?php echo $i ?></td>
                     
                         <td><a href='<?php  echo base_url();?>admin/view-doctor/<?php echo @$value->doctor_id; ?>'><?php echo $value->patient_firstname.' '.$value->patient_lastname; ?></a></td>
						  <td><a href='<?php  echo base_url();?>admin/view-patient/<?php echo @$value->patient_id; ?>'><?php echo $value->doctor_firstname.' '.$value->doctor_lastname; ?></a></td>
						  <td>$<?php echo $value->deal_price; ?></td>
						  
						  <td><select name='status' class="form-control spc" id="spc_<?php echo $value->deal_id; ?>">
						<option value=''>Choose option</option>
				 <?php 
				  $sts=array('0'=>'Pending','1'=>'Completed','2'=>'Processing','3'=>'Cancel');
				 foreach($sts as $val=>$key){
					
					 ?>
				<option <?php if($value->deal_status==@$val) { echo 'selected'; } ?> value='<?php   echo $val ?>'><?php   echo $key ?></option>
				 <?php } ?>
						
						</select>
	<button class="btn btn-block btn-primary widthh confirmModal_status" data-table='tbl_deals'  data-id='<?php echo $value->deal_id; ?>' data-status='<?php echo $value->deal_status; ?>' data-email='<?php echo $value->patient_email; ?>' data-name='<?php echo $value->deal_patient_firstname.' '.$value->deal_patient_lastname; ?>'><div class='stus_chang_<?php echo $value->deal_id; ?>'>Update</button></td>
						  
						    <td><a href="<?php  echo base_url();?>admin/view-patient-request/<?php echo @$value->doctor_id; ?>"><i class="fa fa-eye"></i></a> <!--/ <a href="javascript:void(0)" class='confirmModal_del' data-table='tbl_doctor' data-id='<?php echo $value->doctor_id; ?>' data-field='doctor_id' ><i class="fa fa-trash"></i></a-->
						
						</td>
                      </tr>
<?php $i++; }?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
		
		
		
      </div><!-- /.content-wrapper -->
	 

  <?php $this->load->view('admin/footer'); ?>
  
 