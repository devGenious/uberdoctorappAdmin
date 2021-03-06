<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> DoctorUber | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/iCheck/flat/blue.css">
	 <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/iCheck/all.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/style.css">
	<link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/popModal.css">
	<!-- Select2 -->
 <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/select2/select2.min.css">
 <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/dist/css/AdminLTE.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?php  echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap.css">
	<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>admin/";

</script>
	
<script src="<?php  echo base_url();?>assets/admin/dist/js/jquery-1.12.0.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php  echo base_url();?>assets/admin/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="<?php  echo base_url();?>assets/admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php   @$user=$this->session->all_userdata(); ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>area</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!--a href="<?php  echo base_url();?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a-->
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php  echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php  echo base_url();?>assets/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php  echo base_url();?>assets/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php  echo base_url();?>assets/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php  echo base_url();?>assets/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <!--a href="<?php  echo base_url();?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a-->
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?php  echo base_url();?>assets/admin/#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <!--a href="<?php  echo base_url();?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a-->
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?php  echo base_url();?>assets/admin/#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="<?php  echo base_url();?>assets/admin/#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="<?php  echo base_url();?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php  echo $user['logo']; ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $this->session->userdata('user_name'); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php  echo $user['logo']; ?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $this->session->userdata('user_name'); ?>
                     
                    </p>
                  </li>
               
                  <li class="user-footer">
                    <!--div class="pull-left">
                      <a href="<?php  echo base_url();?>assets/admin/#" class="btn btn-default btn-flat">Profile</a>
                    </div-->
                    <div class="pull-right">
                      <a href="<?php  echo base_url();?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="<?php  echo base_url();?>/admin" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php  echo $user['logo']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> <?php echo @$this->session->userdata('user_name'); ?></p>
              <i class="fa fa-circle text-success"></i> Online
            </div>
          </div>
          
		  <?php $current= $current=$this->uri->segment(2); 
		 
		 
		  
		  if(in_array($current,array('companies')))
		  {
			 $comp='active'; 
		  }
		  if(in_array($current,array('doctors','view-doctor')))
		  {
			 $doct='active'; 
		  }
		  if(in_array($current,array('patients','view-patient')))
		  {
			 $pent='active'; 
		  } 
		   if(in_array($current,array('patient-request','view-patient-request')))
		  {
			 $pentreq='active'; 
		  }
		if(in_array($current,array('create-user','update-user','edit-user')))
		  {
			 $usr='active'; 
		  }
		   
	if(in_array($current,array('report')))
		  {
			 $rep='active'; 
		  }
		
		
		
	 if(@$user['type']=='superadmin'){ 
		
		  ?>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			
             <li class="treeview <?php echo @$comp; ?>">
              <a href="#">
                <i class="fa fa-ambulance"></i> <span>Companies</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
    <li class="<?php  if($current=='companies'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/companies"><i class="fa fa-circle-o"></i>All registered companies</a></li>
           
                  </ul>
			  
			 
            </li>
			
			
			 <li class="treeview <?php echo @$doct; ?>">
              <a href="#">
                <i class="fa fa-fw fa-user-md"></i> <span>Doctors</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
           <li class="<?php  if($current=='doctors'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/doctors"><i class="fa fa-circle-o"></i>All registered doctors</a></li>
       
           </ul>
			  
          </li>
		   <li class="treeview <?php echo @$pent; ?>">
              <a href="#">
                <i class="fa fa-fw fa-users"></i> <span>Patients</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
           <li class="<?php  if($current=='patients'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/patients"><i class="fa fa-circle-o"></i>All registered patients</a></li>
       
           </ul>
			  
          </li>
		  
		  
		    
		  
			 <li class="treeview <?php echo @$pentreq; ?>">
	 <a href="<?php  echo base_url();?>admin/patient-request">  <i class="fa fa-book"></i> <span>All patients requests <br>details
and outcomes</span> </a>
			
           
			</li>
			 <!--li class="treeview <?php echo @$usr; ?>">
	 <a href="<?php  echo base_url();?>admin/create-user">  <i class="fa fa-user"></i> <span>Create User</span> </a>
			
           
			</li-->
			 <li class="treeview">
	 <a href="<?php  echo base_url();?>admin/logout">  <i class="fa fa-fw fa-sign-out"></i> <span>Log out</span> </a>
			
           
			</li>
          </ul><!--Main ui for admin-->
		  
	 <?php }else{ 
	 
	   if(in_array($current,array('company-doctors','view-doctor','login')))
		  {
			 $comdoc='active'; 
		  }
		   if(in_array($current,array('comapny-patients','view-patient')))
		  {
			 $compent='active'; 
		  }
		   if(in_array($current,array('company-deal-patient','view-patient-request')))
		  {
			 $deal='active'; 
		  }
	 
	 
	 ?>
	 
	 
	   <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			
             <li class="treeview <?php echo @$compent; ?>">
              <a href="#">
                <i class="fa fa-user-md"></i> <span>List of request patient</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
    <li class="<?php  if($current=='comapny-patients'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/comapny-patients"><i class="fa fa-circle-o"></i>All Request patient</a></li>
           
                  </ul>
			  
			 
            </li>
			
			
			 <li class="treeview <?php echo @$comdoc; ?>">
              <a href="#">
                <i class="fa fa-fw  fa-stethoscope"></i> <span>Related Doctors</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
           <li class="<?php  if($current=='company-doctors'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/company-doctors"><i class="fa fa-circle-o"></i>All related doctors</a></li>
       
           </ul>
			  
          </li>
		
		
		
		 <li class="treeview <?php echo @$deal; ?>">
              <a href="#">
                <i class="fa fa-fw  fa-book"></i> <span>All Deal patients</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
           <li class="<?php  if($current=='company-deal-patient'){ echo 'active';} ?>"> <a href="<?php  echo base_url();?>admin/company-deal-patient"><i class="fa fa-circle-o"></i>All Deal patients details</a></li>
       
           </ul>
			  
          </li>
		
			
		
			 <li class="treeview">
	 <a href="<?php  echo base_url();?>admin/logout">  <i class="fa fa-fw fa-sign-out"></i> <span>Log out</span> </a>
			
           
			</li>
          </ul><!--Main ui for admin-->
	 
	 
	<?php } ?>
        </section>
        <!-- /.sidebar -->
      </aside>
	  <?php date_default_timezone_set('Europe/London'); ?> 