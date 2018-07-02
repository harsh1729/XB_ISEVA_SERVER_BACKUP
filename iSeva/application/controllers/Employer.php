<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->is_LoggedIn();
		//$this->load->model('user_model');
		$this->load->model('jobs_model');
		$this->load->model('city_model');
	}
	public function index()
	{
		$dataToNav['page'] = "employer";
		$dataToNav['userName'] = "jaspal";//$this->userinfo_model->get_user_name($this->session->userdata('user_id'));
		$navigationData['navigation'] = $this->load->view('view-parts/navigation',$dataToNav,TRUE);
		
		$navigationData['css'] = $this->load->view('view-parts/users-view-css-files','',TRUE);
		$headerData['header'] = $this->load->view('view-parts/header',$navigationData,TRUE);
		$headerData['category'] = $this->jobs_model->getcate();
		$headerData['city'] = $this->city_model->get();
		
		$data['data'] = $this->load->view('employer',$headerData,TRUE);
		
		$data['js'] = $this->load->view('view-parts/employer-view-js-files','',TRUE);
		$this->load->view('view-parts/footer',$data);
	}
}