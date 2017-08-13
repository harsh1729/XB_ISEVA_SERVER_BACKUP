<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treval_user extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Treval_user_model');
		//$this->load->model('gcmuser_model');
	}
	
	function add_user()
	{
		$username= $this->input->get_post('username');
		$email= $this->input->get_post('email');
		$phone= $this->input->get_post('phone');
		$password= $this->input->get_post('password');
		
		/*$username= "vikas";
		$email= "vikas@gmail.com";
		$phone= "9789258958";
		$password= "ahsjfhasj";*/
		
		
		$data = $this->Treval_user_model->add_user($username,$email,$phone,$password);
		
		echo json_encode($data);
			
		 //echo json_encode( array("success"=>1,"message"=>"","data"=>$data) );
	}
	
	
	function loginauth()
	{
		$username= $this->input->get_post('email');
		$password= $this->input->get_post('password');
		
		/*$username= "vikas@gmail.com";
		$password= "ahsjfhas";*/
		
		$data = $this->Treval_user_model->loginauth($username,$password);
		echo json_encode($data);
	}
		
     	
}