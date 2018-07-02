<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocodes extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('promocode_model');
		//$this->load->model('gcmuser_model');
	}
	
	function get_all_offers()
	{
		/*$name = $this->input->get_post('name');
		$username= $this->input->get_post('username');
		$password= $this->input->get_post('password');
		$contact= $this->input->get_post('number');
		$isemployee = $this->input->get_post('isemployee');
		
		$does_exists = $this->jobs_model->does_exists($username,$contact,$isemployee);*/

		 $data = $this->promocode_model->get_all_offers();
			
		 echo json_encode( array("success"=>1,"message"=>"","data"=>$data) );
	}
	
	function get_offer_with_coupan_no()
	{
		$coupan_no = $this->input->get_post('coupan_no');
		$userid = $this->input->get_post('user_id');
		$isglobal = $this->input->get_post('isglobel');
		//$coupan_no = "1234";
		
		$data = $this->promocode_model->get_offer_with_coupan_no($coupan_no,$userid,$isglobal);
		
		if(sizeof($data)==0)
		{
			echo json_encode(array("success"=>1,"message"=>"Code you entered is not found or Already used","data"=>$data));
		}
		else
		{
			echo json_encode(array("success"=>1,"message"=>"","data"=>$data));
		}
		
	}
	
	function enable_coupan()
	{
		$coupan_code = $this->input->get_post('promocode');
		$this->promocode_model->enable_coupan($coupan_code);
	}
	
	
	function get_extra_charge()
	{
		
		$data =	$this->promocode_model->get_extra_charge();
		echo json_encode(array("success"=>1,"message"=>"successfull","data"=>$data));
	}
	
	function get_commition_extra_charge()
	{
		$data =	$this->promocode_model->get_commition_echarge();
		echo json_encode($data);
	}
	
	function get_promo_images()
	{
		$data =	$this->promocode_model->get_promo_images();
		echo json_encode($data);
	}	
     	
     	
     	function get_default_travel_data()
	{
	       if($_SERVER['REQUEST_METHOD']=='POST')
		{
                $id = 7304;
		$key = "c74713d297e55b6fb5bde73f16f7491f";
	        $passkey = $this->input->post('pass_key');
	        $data = $this->promocode_model->get_access_details($passkey,$id,$key);

		echo json_encode ($data);
		}
	}
	
	function get_default_travel_data_test()
	{
	       if($_SERVER['REQUEST_METHOD']=='POST')
		{
                $id = 50;
		$key = "d66de12fa3473a93415b02494253f088";
	        $passkey = $this->input->post('pass_key');
	        $data = $this->promocode_model->get_access_details($passkey,$id,$key);

		echo json_encode ($data);
		}
	}
}