<?php
class Booked_tickets extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->is_LoggedIn();
		$this->load->model('transaction_model');
		
	}
	
	function index()
	{
		
			$dataToNav['page'] = "booked_ticket";
			$dataToNav['userName'] = "sushil";
			$navigationData['navigation'] = $this->load->view('view-parts/navigation',$dataToNav,TRUE);
			$navigationData['css'] = $this->load->view('view-parts/booked_tickets-view-css-files','',TRUE);
			$headerData['header'] = $this->load->view('view-parts/header',$navigationData,TRUE);
			$headerData['all_tickets'] = $this->transaction_model->get_booked_all_ticket(0);
			$data['data'] = $this->load->view('booked_tickets',$headerData,TRUE);
			$data['js'] = $this->load->view('view-parts/booked_tickets-view-js-files','',TRUE);

			$this->load->view('view-parts/footer',$data);


	}
}
?>