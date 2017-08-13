<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('jobs_model');
		$this->load->model('gcmuser_model');
	}
	
	function register()
	{
		$name = $this->input->get_post('name');
		$username= $this->input->get_post('username');
		$password= $this->input->get_post('password');
		$contact= $this->input->get_post('number');
		$isemployee = $this->input->get_post('isemployee');
		
		$does_exists = $this->jobs_model->does_exists($username,$contact,$isemployee);

		if($does_exists['duplicate_exists'] == 1)
		{
			$error_message = "";
			if($does_exists['contact_exists'] == 1)
			{
				$error_message .= "Number ";
			}
			/*if($does_exists['email_exists'] == 1)
			{
				if($does_exists['contact_exists'] == 1)
					$error_message .= ", Email";
				else
					$error_message .= "Email";
			}*/
			if($does_exists['username_exists'] == 1)
			{
				if( $does_exists['contact_exists'] ==1 )
					$error_message .= " and Username";
				else
					$error_message .= "Username";
			}

			$error_message .= " already exists!";
			echo json_encode( array("success"=>0,"error_message"=>$error_message) );
		}else{
		
		 $data = $this->jobs_model->add($name,$username,$contact,$password,$isemployee);
			
		  echo json_encode( array("success"=>1,"data"=>$data) );
		 }
		}
		
      function registerall()
	{
		$fname= $this->input->get_post('fname');
		$cityid= $this->input->get_post('cityid');
		$catid= $this->input->get_post('catid');
		$address= $this->input->get_post('address');
		
		$gender= $this->input->get_post('gender');
		$age= $this->input->get_post('age');
		$quali= $this->input->get_post('quali');
		$experi= $this->input->get_post('experi');
		
		$currentjob= $this->input->get_post('currentjob');
		$currentsalary= $this->input->get_post('currentsalary');
		$others= $this->input->get_post('others');
		$resume= $this->input->get_post('resume');
		$empid= $this->input->get_post('empid');
		$imgid= $this->input->get_post('imgid');
		$currentcompany = $this->input->get_post('currentcompany');
		$mstatus= $this->input->get_post('mstatus');
		$achive= $this->input->get_post('achive');
		
		$data = $this->jobs_model->addalldata($fname,$cityid,$catid,$empid,$gender,$age,$quali,$address,$experi,$currentjob,$currentsalary,$others,$resume,$imgid,$currentcompany,$mstatus,$achive);
			
		echo json_encode( array("success"=>1,"data"=>$data) );
		}
		
    function addjobs()
	{
		$title= $this->input->get_post('title');
		$cityid= $this->input->get_post('cityid');
		$catid= $this->input->get_post('catid');
		$job_profile= $this->input->get_post('job_profile');
		
		$salary= $this->input->get_post('salary');
		$timing= $this->input->get_post('timings');
		$holidays= $this->input->get_post('holidays');
		$eligiblity= $this->input->get_post('eligibility');
		$others= $this->input->get_post('others');
		
		$personname= $this->input->get_post('personname');
		$personnumber= $this->input->get_post('personnumber');
		$expdate= $this->input->get_post('expdate');
		$employerid = $this->input->get_post('employerid');
		$minexp = $this->input->get_post('minexp');
		
		
		$data = $this->jobs_model->addjobdata($catid,$cityid,$title,$salary,$job_profile,$timing,$holidays,$eligiblity,$others,$personname,$personnumber,$expdate,$employerid,$minexp);
			
		echo json_encode( array("success"=>1,"data"=>$data) );
		}
		
	function getresume()
	{
		//$this->load->model('city_model');
		//$this->load->model('gcmuser_model');

		$catid = $this->input->get_post('catid');
		$id= $this->input->get_post('id');
		$cityid= $this->input->get_post('cityid');
		
		$data= $this->jobs_model->getresume($id,$catid,$cityid);
		
		echo json_encode( array(
								"success"=>1,
								"data"=>$data
							));
	}
	
	function getjobs()
	{
		//$this->load->model('city_model');
		//$this->load->model('gcmuser_model');

		$catid = $this->input->get_post('catid');
		$id= $this->input->get_post('id');
		$cityid= $this->input->get_post('cityid');
		
		$data= $this->jobs_model->getjobs($id,$catid,$cityid);
		
		echo json_encode( array(
								"success"=>1,
								"data"=>$data
							));
	}	
	
	function getcitiescate(){
	   $this->load->model('city_model');
	   $cities = $this->city_model->get();
	   $category = $this->jobs_model->getcate();
	   echo json_encode( array(
								"cities"=>$cities,
								"category"=>$category
							));
	}
	
	function login()
	{
		$username = $this->input->get_post('username');
		$password = $this->input->get_post('password');
		$isemployee = $this->input->get_post('isemployee');
	        
		$loginresponse = $this->jobs_model->verify_credentials($username,md5($password),$isemployee);
		echo json_encode(array("login"=>$loginresponse));
	}
}