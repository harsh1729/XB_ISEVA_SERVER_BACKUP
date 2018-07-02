<?php
class Travel extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->is_LoggedIn();
		$this->load->model('promocode_model');
		
	}
	
	function index()
	{
		
			$dataToNav['page'] = "travel";
			$dataToNav['userName'] = "sushil";
			$navigationData['navigation'] = $this->load->view('view-parts/navigation',$dataToNav,TRUE);
			$navigationData['css'] = $this->load->view('view-parts/travel-view-css-files','',TRUE);
			$headerData['header'] = $this->load->view('view-parts/header',$navigationData,TRUE);
			$headerData['promocodes']=$this->promocode_model->get_all();
			$data['data'] = $this->load->view('travel',$headerData,TRUE);
			$data['js'] = $this->load->view('view-parts/travel-view-js-files','',TRUE);

			$this->load->view('view-parts/footer',$data);


	}
}
?>