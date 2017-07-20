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
          List of Companies
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Companies</li>
          </ol>
        </section>

     
		   <!-- Main content -->
        <section class="content">
          <div class="row">
           
		<div class="row">
            <div class="col-md-12">
				<div class="box">
                <div class="box-header">
                  <h3 class="box-title">List of Companies</h3>
                </div><!-- /.box-header -->
		
				 <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    
                     <thead>
                      <tr>
				<th>Sr no</th>
                        <th>Name</th>
						 <th>Logo</th>
                      	 <th>Email</th>
                        <th>Password</th>
					
                        <!--th>Action</th-->
						
                       
                      </tr>
                    </thead>
                   
                    <tbody>
							
		<?php 
		
		
		
 $i=1;
 //print_r($fetch);

foreach($fetch as $value){
	
	  $logo= base_url()."assets/img/uberlogo.png";
	    if(@$value->company_logo){ 
		$logo=$value->company_logo;
		}
	
		?>
                    <tr id='<?php echo $value->company_id; ?>'>
                        <td><?php echo $i ?></td>
                     
                         <td><?php echo $value->company_name; ?></td>
						  <td><img src="<?php  echo $logo; ?>" height="150" width="150"></td>
						  <td><?php echo $value->admin_email; ?></td>
						    <td><?php echo $value->admin_password; ?></td>
							  
						
							 
                        <!--td><a href="<?php  echo base_url();?>admin/view-doctor/<?php echo @$value->doctor_id; ?>"><i class="fa fa-eye"></i></a> / <a href="javascript:void(0)" class='confirmModal_del' data-table='tbl_doctor' data-id='<?php echo $value->doctor_id; ?>' data-field='doctor_id' ><i class="fa fa-trash"></i></a>
						
						</td-->
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
  
 