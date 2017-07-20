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

 if(@$error_message!='')
{
	echo '<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                  '.$error_message.'
                  </div>';
}

?>
<div class='del_res'></div>	
        <section class="content-header">
          <h1>
           Create user
            <!-- <small>Preview</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">user</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- Post News -->
              <div class="box box-primary">
                <!-- form start -->
                <form role="form" method='post' enctype="multipart/form-data" action='<?php  echo base_url();?>admin/create_user/insert' >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id=""  name='username' placeholder="Enter name" value='<?php echo @$post['user_name']; ?>' required >
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" id=""  name='password' placeholder="Enter name" value='<?php echo @$post['cat_name']; ?>' required >
                    </div>
					 <div class="form-group">
                    <label>Clients access</label>
					
                    <select class="form-control select2" multiple="multiple" data-placeholder="Select option" name='clients[]' style="width: 100%;" required>
                    <option value=''>Select client</option>
					<?php foreach ($fetchclients as $clnts){ ?>
						 <option value='<?php echo $clnts->id; ?>'><?php echo $clnts->contact_name; ?></option>
						 <?php }  ?>
                    </select>
					
					<input type="checkbox" id="slectall" >Select All
					
                  </div><!-- /.form-group -->
                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name='submit' value='Add'></button>
                  </div>
				   
                </form>
              </div><!-- /.box -->
            <!-- right column -->
		</div>
	</div>
		<div class="row">
            <div class="col-md-12">
				<div class="box">
                <div class="box-header">
                  <h3 class="box-title">List User</h3>
                </div><!-- /.box-header -->
		
				 <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped" >
                    
                      <thead>
                      <tr>
                        <th>Sr no</th>
                        <th>Name</th>
						<th>Password</th>
						<th>Clients access</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                   
                    <tbody>
							
		<?php 
		
		
		
 $i=1;
 //print_r($fetch);
foreach($fetch as $value){

 $clnt=$this->database_model->where_in('client_tb',$value->clients);
$clnm='';
foreach($clnt as $in){ $clnm[]= $in->contact_name; }
	
		?>
                     <tr id='<?php echo $value->id; ?>'>
                        <td><?php echo $i ?></td>
                        <td><?php echo $value->username; ?></td>
                         <td><?php echo $value->password_text; ?></td>
						  <td><?php  echo implode(',', $clnm); ?></td>
                        <td><a href="<?php  echo base_url();?>admin/edit-user/<?php echo $value->id; ?>"><i class="fa fa-edit"></i></a>  /  <a href="javascript:void(0)" class='confirmModal_del' data-table='admin_user' data-id='<?php echo $value->id; ?>' ><i class="fa fa-trash"></i></a></td>
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
  
  