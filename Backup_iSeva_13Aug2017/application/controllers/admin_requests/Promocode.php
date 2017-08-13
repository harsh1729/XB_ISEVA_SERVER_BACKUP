<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocode extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('promocode_model');
		
	}

	function change_globle()
	{
			$isgloble = $this->input->post('isGlobel');
			$promoid = $this->input->post('id');
			$this->promocode_model->change_globle($isgloble,$promoid);
	}
	function change_active()
	{
		$isactive = $this->input->post('isActive');
			$promoid = $this->input->post('id');
			$this->promocode_model->change_active($isactive,$promoid);
	}

	function add_promocode()
	{
		$promocode = $this->input->post('promocode');
			$promo_tag = $this->input->post('promo_tag');
					$promo_detail = $this->input->post('promo_detail');
			$promo_amount = $this->input->post('promo_amount');
			$promo_amount_percentage = $this->input->post('promo_amount_percentage');
			$max_count = $this->input->post('max_count');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$imageurl = $this->input->post('imageurl');

			$this->promocode_model->add_promocode($promocode,$promo_tag,$promo_detail,$promo_amount,$promo_amount_percentage,$max_count,$start_date,$end_date,$imageurl);
	}

	function delete()
	{
		$promoid = $this->input->post('id');
		$this->promocode_model->delete($promoid);
	}

	function update_commition()
	{
		$commition = $this->input->post('commition');
		$extra_charge= $this->input->post('extra_charge');
		$password = $this->input->post('password');
		$userid = $this->input->post('userid');
		$this->promocode_model->update_commition($commition,$extra_charge,$userid,$password);
	}
	
	function get_commition_echarge()
	{
		$data =	$this->promocode_model->get_commition_echarge();
		echo json_encode($data);
	}	
	

	
}