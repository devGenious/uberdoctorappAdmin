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
          List of patients
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
           
		<div class="row">
            <div class="col-md-12">
				<div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of patients</h3>
                </div><!-- /.box-header -->
		
				 <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    
                     <thead>
                      <tr>
				<th>Sr no</th>
                        <th>First Name</th>
						 <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
						 <th>Gender</th>
                        <th>Action</th>
						
                       
                      </tr>
                    </thead>
                   
                    <tbody>
							
		<?php 
		
		
		
 $i=1;

foreach($fetch as $value){
	
		?>
                    <tr id='<?php echo $value->patient_id; ?>'>
                        <td><?php echo $i ?></td>
                     
                         <td><?php echo $value->patient_firstname; ?></td>
						  <td><?php echo $value->patient_lastname; ?></td>
						  	  <td><?php echo $value->patient_email; ?></td>
						    <td><?php echo $value->patient_phonenumber; ?></td>
							  <td><?php if($value->patient_gender==1){ echo 'Male';}else{ echo 'Female';}; ?></td>
						
							 
                        <td><a href="<?php  echo base_url();?>admin/view-patient/<?php echo @$value->patient_id; ?>"><i class="fa fa-eye"></i></a> <!--/ <a href="javascript:void(0)" class='confirmModal_del' data-table='tbl_patient' data-id='<?php echo $value->patient_id; ?>' data-field='patient_id' ><i class="fa fa-trash"></i></a-->
						
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
  
 