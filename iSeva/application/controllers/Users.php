<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->is_LoggedIn();
		$this->load->model('user_model');
		$this->load->model('category_model');
		$this->load->model('city_model');
	}
	public function index()
	{
		$dataToNav['page'] = "users";
		$dataToNav['userName'] = "jaspal";//$this->userinfo_model->get_user_name($this->session->userdata('user_id'));
		$navigationData['navigation'] = $this->load->view('view-parts/navigation',$dataToNav,TRUE);
		
		$navigationData['css'] = $this->load->view('view-parts/users-view-css-files','',TRUE);
		$headerData['header'] = $this->load->view('view-parts/header',$navigationData,TRUE);
		
		//$headerData['rootcategories'] = $this->category_model->get(0);
		$headerData['rootcategories'] = $this->category_model->get(0,1);
		$headerData['cities'] = $this->city_model->get();
		$data['data'] = $this->load->view('users',$headerData,TRUE);
		
		$data['js'] = $this->load->view('view-parts/users-view-js-files','',TRUE);
		$this->load->view('view-parts/footer',$data);
	}
	
	public function edit($userid=false)
	{
		if($userid===false)
		{
			redirect('404');
		}
		else
		{
			
		
			

			$dataToNav['page'] = "users";
		$dataToNav['userName'] = "jaspal";//$this->userinfo_model->get_user_name($this->session->userdata('user_id'));
		$navigationData['navigation'] = $this->load->view('view-parts/navigation',$dataToNav,TRUE);
		
		$navigationData['css'] = $this->load->view('view-parts/category-view-css-files','',TRUE);
		$headerData['header'] = $this->load->view('view-parts/header',$navigationData,TRUE);

			//$data2View['docid'] = $this->doctor_model->getDocDetail($docid);

			 $user= $this->user_model->getbasicdetails($userid);
                       
			 $user['categories'] = $this->category_model->get(0,1);
			 $parrentid = $this->category_model->getsubCatlevelwise($user['catid']);
			 $user['parentid'] = $parrentid;
			 $user['subcategories'] = $this->category_model->getsub($parrentid,1);
		         $user['cities'] = $this->city_model->get();

			$headerData['user'] = $user;
			
			$data['data'] = $this->load->view('edit_user',$headerData,TRUE);
		
		$data['js'] = $this->load->view('view-parts/useredit-view-js-files','',TRUE);
		$this->load->view('view-parts/footer',$data);
		
		}
	}
}