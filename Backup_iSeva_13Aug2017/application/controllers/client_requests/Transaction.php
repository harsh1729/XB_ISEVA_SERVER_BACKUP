<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('Transaction_model');
		//$this->load->model('gcmuser_model');
	}
	
	function add_transaction()
	{
	
		$user_id = $this->input->get_post('user_id');
		$payu_transaction_id = $this->input->get_post('payu_transaction_id');
		$coupan_id= $this->input->get_post('coupan_id');
		$user_name= $this->input->get_post('username');
		$phone = $this->input->get_post('phone');
		$email= $this->input->get_post('email');
		$ticket_date = $this->input->get_post('ticket_date');
		$from = $this->input->get_post('from_city');
		$to = $this->input->get_post('to_city');
		$total_fare = $this->input->get_post('total_fare');
		$extra_charge = $this->input->get_post('extra_charge');
		$transaction_status = "1";
		
		$ticket_date = str_replace("T"," ",$ticket_date);
		
		$this->Transaction_model->add_transaction($user_id,$payu_transaction_id,$coupan_id,$user_name,$phone,$email,$transaction_status,$ticket_date,$from,$to,$total_fare,$extra_charge);
			
		 //echo json_encode( array("success"=>1,"message"=>"","data"=>$data) );
	}
	
	function update_success_payment()
	{
		$payu_transaction_id= $this->input->get_post('payu_transaction_id');
		$payu_payment_id = $this->input->get_post('payu_payment_id');
		$transaction_status = "2";
		$this->Transaction_model->update_success_payment($transaction_status,$payu_transaction_id,$payu_payment_id);
		
	}
	
	function update_start_booking_ticket()
	{
		$payu_transaction_id= $this->input->get_post('payu_transaction_id');
		$transaction_status = "3";
		$this->Transaction_model->update_start_booking_ticket($transaction_status,$payu_transaction_id);
		
	}
	function update_success_booking()
	{
		$payu_transaction_id= $this->input->get_post('payu_transaction_id');
		$mentis_id = $this->input->get_post('mentis_id');
		$pnr_no =  $this->input->get_post('pnr_no');
		$ticket_no =  $this->input->get_post('ticket_no');
		
		$transaction_status = "4";
		$ticket_status ="confirmed";
$this->Transaction_model->update_success_booking($transaction_status,$payu_transaction_id,$mentis_id,$pnr_no,$ticket_no,$ticket_status);
		
	}
	
	function update_mail_send_flag()
	{
		$mentis_id= $this->input->get_post('mentis_id');
		$flag= true;
		$this->Transaction_model->update_mail_send_flag($flag,$mentis_id);
	}
	
	function get_booked_ticket()
	{
		$offset= $this->input->get_post('offset');
		$user_id = $this->input->get_post('user_id');
		
		/*$offset= "0";
		$user_id = "2";*/
		
		$data = $this->Transaction_model->get_booked_ticket($offset,$user_id);
		echo json_encode($data);
		
	}
	
	function get_booked_ticket_detail()
	{
		$id= $this->input->get_post('id');
		$data = $this->Transaction_model->get_booked_ticket_detail($id);
		echo json_encode($data);
	}
	
	
	function update_ticket_status()
	{
		$status= $this->input->get_post('status');
		$pnr_no= $this->input->get_post('pnr_no');
		$ticket_no= $this->input->get_post('ticket_no');
		$cancel_charge= $this->input->get_post('cancel_charge');
		
		
		$this->Transaction_model->update_ticket_status($status,$pnr_no,$ticket_no,$cancel_charge);
	}
	
	function cancel_ticket_refund()
	{
		$amount= $this->input->get_post('amount');
		$payment_id= $this->input->get_post('payment_id');
		
		//$amount= "1";
		//$payment_id= "1111111487";
		
		$this->Transaction_model->cancel_ticket_refund($amount,$payment_id);
	}
	
	function create_hash()
	{
		$key= $this->input->get_post('key');
		$txnId= $this->input->get_post('txnid');
		$amount= $this->input->get_post('amount');
		$productName= $this->input->get_post('productInfo');
		$firstName= $this->input->get_post('firstName');
		$email= $this->input->get_post('email');
		$udf1= $this->input->get_post('udf1');
		$udf2= $this->input->get_post('udf2');
		$udf3= $this->input->get_post('udf3');
		$udf4= $this->input->get_post('udf4');
		$udf5= $this->input->get_post('udf5');

		$salt = "LWheJzcY3O";

		$this->Transaction_model->create_hash($key,$txnId,$amount,$productName,$firstName,$email,$udf1,$udf2,$udf3,$udf4,$udf5,$salt);

	}	
	
	function send_message()
	{
		$order_no = $this->input->get_post('order_no');
		$ticket_no =$this->input->get_post('ticket_no'); 
		$pnr_no = $this->input->get_post('pnr_no');
		$from_city = $this->input->get_post('from_city');
		$to_city = $this->input->get_post('to_city');
		$date_of_journey = $this->input->get_post('date_of_journey');
		$reporting_time = $this->input->get_post('reporing_time');
		$departure_time = $this->input->get_post('departure_time');
		$status = $this->input->get_post('status');
		$boarding_address = $this->input->get_post('boarding_address');
		$bus_type = $this->input->get_post('bus_type');
		$company_name = $this->input->get_post('company_name');
		$contact_no = $this->input->get_post('contact_no');
		$contact_name = $this->input->get_post('contact_name');
		$total_fare = $this->input->get_post('total_fare');
		$p_length = $this->input->get_post('p_length');
		$cd_length = $this->input->get_post('cd_length');
		$to_mail = $this->input->get_post('to_mail');
		
		
		/*$order_no = "16756390";
		$ticket_no ="1234567";
		$pnr_no = "";
		$from_city ="ahmedabad";
		$to_city = "chennai";
		$date_of_journey = "2017-02-11";
		$reporting_time = "4:45 PM";
		$departure_time = "5:00 PM";
		$status = "Booked";
		$boarding_address ="";
		$company_name = "";
		$contact_no ="9782908308";
		$total_fare = "";
		$to_mail = "vikassharma9782@gmail.com";
		$bus_type ="";
		$p_length = 3;
		$cd_length =4;
		$contact_name="vikas sharma";*/
		
		$seats = "";
		for($i =0;$i<$p_length;$i++)
    		 {
		     	//$p_name = $this->input->get_post('p_name'.$i);
		     	if($i == 0)
		     	{
		     		$p_seat = $this->input->get_post('p_seat'.$i);
		     		$seats = $seats.$p_seat;
		     	}
		     	else
		     	{
		     		$p_seat = $this->input->get_post('p_seat'.$i);
		     		$seats = $seats.",".$p_seat;
		     	}
		     	
		     	
		     	
		  }  
		
		
	$data =	$this->Transaction_model->send_message($order_no,$pnr_no,$ticket_no,$from_city,$to_city,$date_of_journey,$reporting_time,$departure_time,$status,$boarding_address,$bus_type,$company_name,$contact_no,$total_fare,$contact_name,$seats);
	
	
	}
	
	
	function update_message_send_flag()
	{
		$mentis_id= $this->input->get_post('mentis_id');
		$flag= true;
		$this->Transaction_model->update_message_send_flag($flag,$mentis_id);
	}
     	
}