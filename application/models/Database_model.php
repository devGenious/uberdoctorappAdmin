<?php
class Database_model extends CI_Model{
function __construct() {
parent::__construct();
}
//start
function insert_query($tb,$data){
		
  $this->db->insert($tb,$data);
}

function get_values($tb,$col,$ord){
	
	$this->db->order_by($col,$ord);
	 $query = $this->db->get($tb);
	  return $query->result();
	 
  }

function get_single_value($tb,$where)
 {
	 $this->db->where($where);
   $query = $this->db->get($tb);
  return $query->result();
 }

function update_values($tb,$wher,$data)
 {
	 $this->db->where($wher);
    $this->db->update($tb,$data);
 } 
 
 function delete_value($tb,$condition)
 {
	 $this->db->where($condition);
      $this->db->delete($tb); 
 }
 
 function getCompanies(){
  $this->db->select("*");
  $this->db->from('tbl_admin');
  $this->db->join('tbl_company', 'tbl_admin.company_id = tbl_company.company_id');
  $query = $this->db->get();
  return $query->result();
 }
 function getRequest(){
  $this->db->select("*");
  $this->db->from('tbl_requests');
  $this->db->join('tbl_patient', 'tbl_requests.patient_id = tbl_patient.patient_id');
  $this->db->join('tbl_doctor', 'tbl_requests.doctor_id = tbl_doctor.doctor_id');
  $this->db->join('tbl_deals', 'tbl_requests.deal_id = tbl_deals.deal_id');
  $query = $this->db->get();
  return $query->result();
 }
 
 function getRequestCond($id){
  $this->db->select("*");
  $this->db->from('tbl_requests');
  $this->db->join('tbl_patient', 'tbl_requests.patient_id = tbl_patient.patient_id');
  $this->db->join('tbl_doctor', 'tbl_requests.doctor_id = tbl_doctor.doctor_id');
  $this->db->join('tbl_deals', 'tbl_requests.deal_id = tbl_deals.deal_id');
  $this->db->where('tbl_requests.request',$id);
  $query = $this->db->get();
  return $query->result();
 }
 
  function getRequestComponyPatient($id){
  $this->db->select("*");
  $this->db->from('tbl_requests');
  $this->db->join('tbl_patient', 'tbl_requests.patient_id = tbl_patient.patient_id');
  $this->db->join('tbl_doctor', 'tbl_requests.doctor_id = tbl_doctor.doctor_id');
 $this->db->where('tbl_doctor.doctor_company',$id);
  $query = $this->db->get();
  return $query->result();
 }
 
 
  function getRequestComponyPatientDeal($id){
  $this->db->select("*");
  $this->db->from('tbl_requests');
  $this->db->join('tbl_patient', 'tbl_requests.patient_id = tbl_patient.patient_id');
  $this->db->join('tbl_doctor', 'tbl_requests.doctor_id = tbl_doctor.doctor_id');
  $this->db->join('tbl_deals', 'tbl_requests.deal_id = tbl_deals.deal_id');
  $this->db->where('tbl_doctor.doctor_company',$id);
  $query = $this->db->get();
  return $query->result();
 }
 
 function get_single_value_other_condition($tb,$cond)
 {
	 $this->db->where($cond);
$query = $this->db->get($tb);
return $query->result();
 }

function  get_condtion($tb,$cond)
 {
	
	$this->db->where($cond);
	 $query = $this->db->get($tb);
     return $query->result(); 
	 
 } 

 
 function  get_condtion_like($tb,$cond)
 {
	$this->db->like($cond);
	 $query = $this->db->get($tb);
     return $query->result(); 
	 
 } 

 
 function  get_condtion_like_alpha($tb,$cond)
 {
	 
	$this->db->like($cond);
	$this->db->order_by("title", "asc"); 
	 $query = $this->db->get($tb);
     return $query->result(); 
	 
 }
 
	function count_tb_record($tb){
        return $this->db->count_all($tb);
     }
	 
	 function count_tb_record_cond($tb,$cond){
		
		$this->db->where($cond);
        return $this->db->count_all($tb);
		
     }
	 function  get_condtion_count($tb,$cond)
 {
	$this->db->where($cond);
	 $query = $this->db->get($tb);
     return $query->num_rows(); 
	 
 } 
	 
 //limited 
 
 function get_values_limited($tb,$limit,$start){
	
	$this->db->order_by("id","DESC");
	 $this->db->limit($limit, $start);
	 $query = $this->db->get($tb);
	  return $query->result();
	 
  }
  
  function get_values_limit_cond($tb,$col,$orderby,$limit,$start){
	
	$this->db->order_by($col,$orderby);
	 $this->db->limit($limit, $start);
	
	 $query = $this->db->get($tb);
	  return $query->result();
	 
  }
 
   function get_values_limit_where($tb,$cond,$col,$orderby,$limit,$start){
	
	$this->db->order_by($col,$orderby);
	 $this->db->limit($limit, $start);
	$this->db->where($cond);
	 $query = $this->db->get($tb);
	  return $query->result();
	 
  }
function where_in($tb,$cond)
{
 $in= explode(',',$cond);

$this->db->select("*");
$this->db->where_in('id',$in);

$query =$this->db->get($tb);
 return $query->result();
}
 
 //email esixtence
function isEmailExist($email) {
    $this->db->select('admin_id');
    $this->db->where('admin_email', $email);
    $query = $this->db->get('tbl_admin');

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}

}