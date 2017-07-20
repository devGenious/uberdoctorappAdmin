<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
       {
            parent::__construct();
         $this->load->library('session');
        $this->load->helper('form');
       $this->load->helper('url');
      $this->load->database();
      $this->load->library('form_validation');
     //$this->load->library('pagination');
	 $this->load->model('database_model');
	 //$this->load->library('encrypt');
	date_default_timezone_set('America/New_York');
		$this->my_date = date("M d,Y", time());
		
  @$adm=$this->database_model->get_single_value('tbl_admin',array('admin_id'=>1));
		
	 $this->data = array(
            'adminemail' =>$adm[0]->admin_email,
          
        );
		
	
       }
	public function index()
	{
		
		$this->load->view('admin/index.php');
	}
 //admin login 
 public function login()
{
	 //$pass=trim(md5($this->input->post('password')));
	
	
  
  $query = $this->database_model->get_condtion('tbl_admin', array(
    'admin_email' => $this->input->post('email'),
    'admin_password' => $this->input->post('password'),
	 
  ));
  //echo $this->db->last_query();
 $id=count(@$query);

  if($id==0)
  {
	   $error='Use wrong Email/Password';
	$data['error']=$error;
		$this->load->view('admin/index.php',$data);
   }else{
	  
	  $U_ID=$query[0]->admin_id;
	 $type=$query[0]->type;
	 if($type=='superadmin'){ 
	 $logo=base_url()."assets/admin/dist/img/user2-160x160.jpg";
       $ar=array('logged_in'=> $U_ID,
	            'type'=>$type,
				'user_name'=>'Super Admin',
				'logo'=>$logo,
              );	 
	 
	 }else{
	
	$comny=$this->database_model->get_single_value('tbl_company',array('company_id'=>$query[0]->company_id));
	$logo=base_url()."assets/img/uberlogo.png";
	   if($comny[0]->company_logo){ $logo=$comny[0]->company_logo;}
	 $ar=array('logged_in'=> $U_ID,
	            'company_id'=>$query[0]->company_id,
	            'type'=>$type,
				'user_name'=>$comny[0]->company_name,
				'logo'=>$logo,
              );	
	 
	 
	 }
	  
				
				$this->session->set_userdata($ar);
			
	if($type!='superadmin'){ 
	
	$this->comapny_patients();
	
	}else{
 
  $this->dashboard();
   }
  }
    
 }	

public function logout()
{
	 //$session_data = $this->session->userdata('logged_in');
	 $this->session->unset_userdata('logged_in');
		
	$this->session->unset_userdata('type');
		 redirect(base_url());	

	
}	
	public function dashboard()
	{
		$session_data = $this->session->userdata('logged_in');
	
		if($session_data=='')
		{
		 redirect(base_url().'admin');	
		}
		
	$data['doctors']=$this->database_model->count_tb_record('tbl_doctor');
		$data['patients']=$this->database_model->count_tb_record('tbl_patient');
		$data['requests']=$this->database_model->count_tb_record('tbl_requests');
		$data['company']=$this->database_model->count_tb_record('tbl_company');
		
		$this->load->view('admin/dashboard.php',$data);
	}
	
	//common delete for all   
 public function delete_entry()
 {
	
	 $condition=array($_POST['col']=>$_POST['id']);
	$this->database_model->delete_value($_POST['table_name'],$condition);
	 
	 echo '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                  Delete succesfully!
                  </div>';
 }
	

//start 

public function companies()
	{
		$session_data = $this->session->userdata('logged_in');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($session_data=='' or $usertype!='superadmin')
		{
		 redirect(base_url().'admin');	
		}
		
		@$data['fetch']=$this->database_model->getCompanies();
		
		$this->load->view('admin/companies',$data);
	}

public function doctors()
	{
		$session_data = $this->session->userdata('logged_in');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($session_data=='' or $usertype!='superadmin')
		{
		 redirect(base_url().'admin');	
		}
		
		
		@$data['fetch']=$this->database_model->get_values('tbl_doctor','doctor_id','desc');
		
		$this->load->view('admin/doctors',$data);
	}
	
public function view_doctor()
  {
	  
	   $id= $this->uri->segment(3);
		$data['fetchdata'] = $this->database_model->get_single_value('tbl_doctor',array('doctor_id'=> $id));
		
			
	  $this->load->view('admin/view-doctor',$data);
  }

public function patients()
	{
		$session_data = $this->session->userdata('logged_in');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($session_data=='' or $usertype!='superadmin')
		{
		 redirect(base_url().'admin');	
		}
		
		@$data['fetch']=$this->database_model->get_values('tbl_patient','patient_id','desc');
		
		$this->load->view('admin/patients',$data);
	}


	
public function view_patient()
  {
	  
	   $id= $this->uri->segment(3);
		$data['fetchdata'] = $this->database_model->get_single_value('tbl_patient',array('patient_id'=> $id));
		
			
	  $this->load->view('admin/view-patient',$data);
  }

 public function  patient_request(){
 
 
 
 $session_data = $this->session->userdata('logged_in');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($session_data=='' or $usertype!='superadmin')
		{
		 redirect(base_url().'admin');	
		}
		
		@$data['fetch']=$this->database_model->getRequest();
		
		$this->load->view('admin/request-patients',$data);
 
 }
 
  public function  view_patient_request(){
 
 
 
 $session_data = $this->session->userdata('logged_in');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($session_data=='')
		{
		 redirect(base_url().'admin');	
		}
		$id= $this->uri->segment(3);
		@$data['fetchdata']=$this->database_model->getRequestCond($id);
		
		$this->load->view('admin/view-request-patient',$data);
 
 }


/**********company admin*********/

public function isEmailExist($email) {
    
   $is_exist = $this->database_model->isEmailExist($email);

    if ($is_exist) {
        $this->form_validation->set_message(
            'isEmailExist', 'Email address is already exist.'
        );    
        return false;
    } else {
        return true;
    }
   }

	
	   public function registration()
	{
		
		 $data='';
		//$this->load->library('user_agent');
//print_r($this->agent->platform()); die;
		
			if(@$this->input->post('submit')=='Sign up')
	
	{
	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist');
		 $this->form_validation->set_rules('password', 'Password', 'required|matches[re-password]');
	 $this->form_validation->set_rules('re-password', 'Password Confirmation', 'required');
$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
		
		 $data['post']=$this->input->post();
		 
		 $config['upload_path'] = './upload/';
		
    
		$config['allowed_types'] = 'gif|jpg|png';
		
	
	$this->load->library('upload', $config);
    
    $this->upload->initialize($config);
		 
		 
		 
		if ($this->form_validation->run() == true){
		//$date = date('Y-m-d H:i:s');
		if (!$this->upload->do_upload('logoimg')) {
           $data['err']=$this->upload->display_errors();
        $this->load->view('admin/registration',$data);
		
      }else {
		 $upload_data = $this->upload->data();
	
       $imagelogo = base_url().'upload/'.$upload_data['file_name'];
		
		
		
		
		 $insert = array(
		 'company_name' => $this->input->post('company_name'),
	     'company_logo' => $imagelogo,
	         );
 
     $this->database_model->insert_query('tbl_company',$insert);
    $compnyid = $this->db->insert_id();
		
		
		 $insert = array(
		 'admin_email' => $this->input->post('email'),
	   'admin_password' => $this->input->post('password'),
	   'company_id'=>$compnyid,
	   'type'=>'company'
	       );
 
     $this->database_model->insert_query('tbl_admin',$insert);
    $data['succes_message'] = 'Successfully create your account.';
	/****eMAIL *****/
   $msg="<div style='width:600px; margin:auto; padding:0px; height:auto;  background-color:#FFF;'>
<div style='width:100%;float:left;height:Auto;background-color:#efefef;'>
		<h1 style='font:normal 30px/30px Arial;color:#0076a3;margin-left:40px;'>Welcome to DoctorUber app <h1>
	</div>
	<div style='width:100%;height:Auto;box-sizing:border-box;padding:20px 40px 40px 40px;float:left'>
	<p style='margin: 0 0 16px;'>Your account was created.</p>

<p style='margin: 0 0 16px;'>You can access your account area <a href='". base_url()."'>Click Here</a></p>



	</div>
	
	<footer style='width:100%;text-align:center;float:left;background-color:#efefef;'>
		<p>_Powered by @DoctorUber</p>
	
	</footer>
</div>";
	 $subject = 'User activation code';
	  $frommail=$this->data['adminemail'];
	 $this->sendmail($this->input->post('email'),$frommail,$subject,$msg);
	/*******/
	$data['post']='';
	$this->load->view('admin/registration',$data);
	    }   
	  }else{
	  $this->load->view('admin/registration',$data);
	  }
	}else{
		
		
		$this->load->view('admin/registration',$data);
		}
	}
	
 
 	
	
	
 public function forgetpassword()
  {
  $data='';
	if(@$this->input->post('submit')=='Submit')
	
	{
			$email=$this->input->post('email');
	    $this->db->select('*')
          ->from('tbl_admin')
          ->where("(admin_email = '$email')");
         
  
  $query = $this->db->get();
  $query=$query->result();
		
	if($query)
	{
	 /****eMAIL *****/
		$log_user_email=$query[0]->admin_email;
  $msg="<div style='width:600px; margin:auto; padding:0px; height:auto;  background-color:#FFF;'>
<div style='width:100%;float:left;height:Auto;background-color:#efefef;'>
		<h1 style='font:normal 30px/30px Arial;color:#0076a3;margin-left:40px;'>Welcome to DoctorUber app <h1>
	</div>
	<div style='width:100%;height:Auto;box-sizing:border-box;padding:20px 40px 40px 40px;float:left'>
	<p style='margin: 0 0 16px;'>You have forget your password see login detail below</p>
<p style='margin: 0 0 16px;'> Your Email-id is:
<strong>".$log_user_email."</strong>.</p>

	<p style='margin: 0 0 16px;'>Your password :
<strong>".$query[0]->admin_password."</strong></p>


<p style='margin: 0 0 16px;'>You can access your account area <a href='". base_url()."'>Click Here</a></p>
	</div>
	
	<footer style='width:100%;text-align:center;float:left;background-color:#efefef;'>
		<p>_Powered by @wowjax</p>
	
	</footer>
</div>";
$frommail=$this->data['adminemail'];
	 $subject = 'Login detail';
	$this->sendmail($log_user_email,$frommail,$subject, $msg);
	 
				/***************/
	 
	 $data['succes_message'] = 'Sent login detail in Your registered mail.So please check you email.';
		}else{
			
			 $data['error'] = "User/Email-id don't match.Please Try again!";
		}
	   }
		$this->load->view('admin/forget-password',$data); 
  }

	
	
	
	 public function notaccessscreen(){  
   $data['status']=$this->session->userdata('status');
	    $this->load->view('noaccess', $data);
  }


 public function sendmail($log_user_email,$frommail,$subject,$msg){
	
	    if($frommail==''){
			$frommail= $this->data['adminemail'];
          
		}
	   
 $headers = "MIME-Version: 1.0\r\n";
                $headers .= "from:".$frommail."\r\n";
                $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
                $headers .= "X-Priority: 2\nX-MSmail-Priority: high";
               
                $headers .= "X-Mailer: PHP v" . phpversion() . "\r\n";

              
               $m= mail($log_user_email, $subject, $msg, $headers); 
			   return $m;
 }	

public function comapny_patients()
	{
		 $compnyid = $this->session->userdata('company_id');
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($compnyid=='' or $usertype!='company')
		{
		 redirect(base_url().'admin');	
		}
		
		@$data['fetch']=$this->database_model->getRequestComponyPatient($compnyid);
		$this->load->view('company/patients',$data);
	}
 
 
 
 public function company_doctors()
	{
		 $compnyid = $this->session->userdata('company_id');
		
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($compnyid=='' or $usertype!='company')
		{
		 redirect(base_url().'admin');	
		}
		
		
		@$data['fetch']=$this->database_model->get_condtion('tbl_doctor',array('doctor_company'=>$compnyid));
		//echo $this->db->last_query();
		$this->load->view('company/doctors',$data);
	}
 


 public function company_deal_patient()
	{
		 $compnyid = $this->session->userdata('company_id');
		
	     $usertype = $this->session->userdata('type');
		 
		$data['usertype']=$usertype;
		
		if($compnyid=='' or $usertype!='company')
		{
		 redirect(base_url().'admin');	
		}
		
		
		@$data['fetch']=$this->database_model->getRequestComponyPatientDeal($compnyid);
		//echo $this->db->last_query();
		$this->load->view('company/deal-patient',$data);
	}


	
	
 public function deal_status_change()
  {
	 
if($this->input->post('action')){
	
	//print_r($this->input->post());
	$adminmail=$this->data['adminemail'];
   
     $tb=$this->input->post('table_name');
    $id=$this->input->post('id');
    $alrdystatus=$this->input->post('status');
     $slctopt=$this->input->post('slctopt');
    $data=array('deal_status'=>$slctopt);
	$useremail=$this->input->post('usermail');
   $username=$this->input->post('name');;		
	//$usr=$this->database_model->get_single_value($tb,$id);
	if($slctopt==0){ $sts='Pending';}elseif($slctopt==1){ $sts='Completed'; }elseif($slctopt==2){ $sts='Processing'; }elseif($slctopt==3){ $sts='Cancel'; }
	
	$this->database_model->update_values($tb,array('deal_id'=>$id),$data);
	
	$msg="<div style='width:600px; margin:auto; padding:0px; height:auto;  background-color:#FFF;'>
<div style='width:100%;float:left;height:Auto;background-color:#efefef;'>
		<h1 style='font:normal 30px/30px Arial;color:#0076a3;margin-left:40px;'>Welcome to DoctorUber App <h1>
	</div>
	<div style='width:100%;height:Auto;box-sizing:border-box;padding:20px 40px 40px 40px;float:left'>
	<p style='margin: 0 0 16px;'>Hello ".$username.", </p>
<p style='margin: 0 0 16px;'> Your deal status is changed by doctor.
     <p style='margin: 0 0 16px;'>You deal status now
  <strong>".$sts."</strong></p>
<p style='margin: 0 0 16px;'>Furthur inquiry Please contact to ".$adminmail."</p>
	</div>
	
	<footer style='width:100%;text-align:center;float:left;background-color:#efefef;'>
		<p>_Powered by @Admin</p>
	
	</footer>
</div>";
 $subject="Change status for your deal";
 
$this->sendmail($useremail,$adminmail,$subject,$msg);
	
	echo "<div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    <h4>	<i class='icon fa fa-check'></i> Alert!</h4>
                  Status changed succesfully!
                  </div>";	
	
				  
   
   
 } 
  }	
	
	
/*******Change pass***********/
 public function updatepass() {
 
 $admin_id = $this->session->userdata('logged_in');

	$data['admin_id']=$admin_id;
		if($admin_id=='')
		{
		 redirect(base_url().'logout');	
		}
		
		
		 $this->form_validation->set_rules('password', 'Password', 'required|matches[re-password]');
$this->form_validation->set_rules('re-password', 'Re-password', 'required');
	if ($this->form_validation->run() == true){
	
	 $update = array(
		 'admin_password' =>$this->input->post('password'),
	   
	   );
	   
	$this->database_model->update_values('tbl_admin',array('admin_id'=>$admin_id),$update);
	$this->logout();
	}
		
 $this->load->view('admin/update-password',$data);
 }

/**********************/	
	
public function  view_details_form()
{

//print_r($_POST);

$fetchdata = $this->database_model->get_single_value($_POST['table_name'],$_POST['id']);

if($_POST['action']){

echo '<div class="popupcontent">
       
		
			<div class="col-md-12">	<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Company name</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->company_name.'</div></div>
					</div>
	<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Contact name:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->contact_name.'</div></div>
					</div>
					
					<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Phone no:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->phone.'</div></div>
					</div>
												<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Email:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->email.'</div></div>
					</div>
									
					
					<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Address:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->address.'</div></div>
					</div>
					
				<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Contact start - end:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->contract_start_to_end.'</div></div>
					</div>	
					<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Website url:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->website_url.'</div></div>
					</div>

           <div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Marketplace:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->marketplace.'</div></div>
					</div>						
					 <div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Marketplace store:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->marketplace_store.' </div></div>
					</div>	
					
					 <div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Total due:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->total_due.'</div></div>
					</div>	
				 <div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Total paid</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->total_paid.'</div></div>
					</div>	

     
	<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Status:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->status.'</div></div>
					</div>
					
					<div class="row">		
		  <div class="col-md-6">
		  <div class="form-group">
			 <label for="exampleInputFile">Add date:</label>
                     </div>
                    </div>
					<div class="col-md-6">
					<div class="form-group">'.$fetchdata[0]->add_date.' </div></div>
					</div>
													
		   </div>
		
			
    </div>';
}
}



}