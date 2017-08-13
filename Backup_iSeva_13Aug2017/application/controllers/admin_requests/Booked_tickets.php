<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booked_tickets extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('transaction_model');
		
	}

	function get_booked_all_ticket()
	{
		$offset = $this->input->post('offset');
		$data = $this->transaction_model->get_booked_all_ticket($offset)	;
		echo json_encode($data);
	}
	function get_all_row_count()
	{
		$data = $this->transaction_model->get_all_row_count();
		echo json_encode($data);
	}
	function search()
	{
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$pnr_no = $this->input->post('pnr_no');

		$data = $this->transaction_model->search($from_date,$to_date,$email,$phone,$pnr_no);
		echo json_encode($data);
	}
	function refund()
	{
		$refund_amount = $this->input->post('refundamount');
		$paymentid = $this->input->post('paymentid');
		$this->transaction_model->cancel_ticket_refund($refund_amount,$paymentid);
	}	
	
}