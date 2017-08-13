<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
	
	

	function __construct()
	{
		parent::__construct();
		
	}

	public function add_transaction($user_id,$payu_transaction_id,$coupan_id,$user_name,$phone,$email,$transaction_status,$ticket_date,$from,$to,$total_fare,$extra_charge)
	{
	
		
		$data = array(
					"user_id"=>$user_id,
					"payumoney_id"=>$payu_transaction_id,
					"coupan_id"=>$coupan_id,
					"transaction_status"=>$transaction_status ,
					"user_name"=>$user_name,
					"phone"=>$phone,
					"email"=>$email,
					"ticket_date"=>$ticket_date,
					"from_city"=>$from,
					"to_city"=>$to,
					"total_fare"=>$total_fare,
					"extra_charge"=>$extra_charge
					);
					
		$this->db->insert("transaction_travel",$data);			
		
	}
	
	public function update_success_payment($transaction_status,$payu_transaction_id,$payu_payment_id)
	{
		$data = array(
					"payumoney_payment_id"=>$payu_payment_id,
					"transaction_status"=>$transaction_status ,
					);
		$this->db->where('payumoney_id',$payu_transaction_id);				
		$this->db->update("transaction_travel",$data);										
	}
	
	public function update_start_booking_ticket($transaction_status,$payu_transaction_id)
	{
			$data = array(
					"transaction_status"=>$transaction_status ,
					);
		$this->db->where('payumoney_id',$payu_transaction_id);				
		$this->db->update("transaction_travel",$data);				
	}
	public function update_success_booking($transaction_status,$payu_transaction_id,$mentis_id,$pnr_no,$ticket_no,$ticket_status)
	{
			$data = array(
					"pnr_no"=>$pnr_no,
					"ticket_no"=>$ticket_no,
					"mantis_id"=>$mentis_id,
					"transaction_status"=>$transaction_status,
					"ticket_status"=>$ticket_status,
					);
		$this->db->where('payumoney_id',$payu_transaction_id);				
		$this->db->update("transaction_travel",$data);	
		
		
					
	}
	
	public function update_mail_send_flag($flag,$mentis_id)
	{
		$data = array(
					
					"email_sent"=>$flag,
					);
		$this->db->where('mantis_id',$mentis_id);				
		$this->db->update("transaction_travel",$data);	
	}
	
	public function get_booked_ticket($offset,$user_id)
	{
		$this->db->select('tv.*,pc.discount_percentage,pc.discount_amount');
		$this->db->where('tv.user_id',$user_id);
		$this->db->where('tv.transaction_status',4);
		$this->db->limit(20,$offset);
		//$this->db->order_by('id','desc');
		$this->db->order_by('tv.ticket_date', 'desc');
		$this->db->join('promocode pc','pc.id=tv.coupan_id',"left");
		$query= $this->db->get('transaction_travel tv');
		
		
		$all_rows= array();
		foreach ($query->result() as $row)
		{	
			$single_row = array();
			date_default_timezone_set('Asia/Kolkata');
			$date1 = new DateTime("now");
			$date2 = new DateTime($row->ticket_date);
			
			if($date1 > $date2)
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 0;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['discount_percentage']=$row->discount_percentage;
				$single_row['discount_amount']=$row->discount_amount;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			else
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 1;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['discount_percentage']=$row->discount_percentage;
				$single_row['discount_amount']=$row->discount_amount;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			
			
			
			 array_push($all_rows,$single_row );
		}
			
		return array("success"=>1,"message"=>"Success !","data"=>$all_rows);
		
	}
	
	
	
	
	public function search($from_date,$to_date,$email,$phone,$pnr_no)
	{
		$this->db->select('tv.*,tu.name as logged_user_name,tu.email as logged_user_email,tu.phone as logged_user_phone,ts.status as t_status');

		
		
		if($from_date !="")
		{
			
			$this->db->where('tv.ticket_date >=',$from_date);
		}
		if($to_date != "")
		{
			
			$this->db->where('tv.ticket_date <=',$to_date);
		}
		if($email != "")
		{
			$this->db->like("tv.email",$email);
		}
		if($phone != "")	
		{
			$this->db->like("tv.phone",$phone);
		}
		if($pnr_no != "")
		{
			$this->db->like("tv.pnr_no",$pnr_no);

		}

		//$this->db->order_by('tv.id','desc');
		$this->db->order_by('tv.ticket_date','desc');
		$this->db->join('treval_user tu','tu.id=tv.user_id');
		$this->db->join('transaction_status ts','ts.id=tv.transaction_status');
		
		$query= $this->db->get('transaction_travel tv');
		
		$all_rows= array();

		foreach ($query->result() as $row)
		{	
			$single_row = array();
			date_default_timezone_set('Asia/Kolkata');
			$date1 = new DateTime("now");
			$date2 = new DateTime($row->ticket_date);
			
			if($date1 > $date2)
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['transaction_status']=$row->t_status;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 0;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['logged_user_name']=$row->logged_user_name;
				$single_row['logged_user_email'] = $row->logged_user_email;
				$single_row['logged_user_phone']= $row->logged_user_phone;
				$single_row['message_sent']=$row->message_sent;
				$single_row['email_sent']=$row->email_sent;
				$single_row['phone'] = $row->phone;
				$single_row['email']= $row->email;
				$single_row['isrefund'] = $row->isrefunded;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			else
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['transaction_status']=$row->t_status;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 1;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['logged_user_name']=$row->logged_user_name;
				$single_row['logged_user_email'] = $row->logged_user_email;
				$single_row['logged_user_phone']= $row->logged_user_phone;
				$single_row['message_sent']=$row->message_sent;
				$single_row['email_sent']=$row->email_sent;
				$single_row['phone'] = $row->phone;
				$single_row['email']= $row->email;
				$single_row['isrefund'] = $row->isrefunded;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			
			
			
			 array_push($all_rows,$single_row );
		}
			
		return array("success"=>1,"message"=>"Success !","data"=>$all_rows);
	}

	
	
	
	
	public function get_all_row_count()
	{
		$this->db->select("id");
		$query =  $this->db->get("transaction_travel");

		$count = $query->num_rows();

		return array("success"=>1,"message"=>"Success","count"=>$count);

	}
	

	public function get_booked_all_ticket($offset)
	{
		
		
		$this->db->select('tv.*,tu.name as logged_user_name,tu.email as logged_user_email,tu.phone as logged_user_phone,ts.status as t_status');
		
		$this->db->limit(5,$offset);
		//$this->db->order_by('tv.id','desc');
		$this->db->order_by('tv.ticket_date', 'desc');
		$this->db->join('treval_user tu','tu.id=tv.user_id');
		$this->db->join('transaction_status ts','ts.id=tv.transaction_status');
		
		$query= $this->db->get('transaction_travel tv');
		
		
		$all_rows= array();
		foreach ($query->result() as $row)
		{	
			$single_row = array();
			date_default_timezone_set('Asia/Kolkata');
			$date1 = new DateTime("now");
			$date2 = new DateTime($row->ticket_date);
			
			if($date1 > $date2)
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['transaction_status']=$row->t_status;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 0;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['logged_user_name']=$row->logged_user_name;
				$single_row['logged_user_email'] = $row->logged_user_email;
				$single_row['logged_user_phone']= $row->logged_user_phone;
				$single_row['message_sent']=$row->message_sent;
				$single_row['email_sent']=$row->email_sent;
				$single_row['phone'] = $row->phone;
				$single_row['email']= $row->email;
				$single_row['isrefund'] = $row->isrefunded;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			else
			{
				$single_row['id'] = $row->id;
				$single_row['payumoney_id'] = $row->payumoney_id;
				$single_row['mantis_id'] = $row->mantis_id;
				$single_row['pnr_no'] = $row->pnr_no;
				$single_row['ticket_no'] = $row->ticket_no;
				$single_row['ticket_date'] = $row->ticket_date;
				$single_row['from']= $row->from_city;
				$single_row['to']= $row->to_city;
				$single_row['transaction_status']=$row->t_status;
				$single_row['current_time'] = $date1;
				$single_row['cancelable'] = 1;
				$single_row['ticket_status']= $row->ticket_status;
				$single_row['payumoney_payment_id']=$row->payumoney_payment_id;
				$single_row['logged_user_name']=$row->logged_user_name;
				$single_row['logged_user_email'] = $row->logged_user_email;
				$single_row['logged_user_phone']= $row->logged_user_phone;
				$single_row['message_sent']=$row->message_sent;
				$single_row['email_sent']=$row->email_sent;
				$single_row['phone'] = $row->phone;
				$single_row['email']= $row->email;
				$single_row['isrefund'] = $row->isrefunded;
				$single_row['total_fare']=$row->total_fare;
				$single_row['cancel_charge']=$row->cancel_charge;
				$single_row['extra_charge']=$row->extra_charge;
			}
			
			
			
			 array_push($all_rows,$single_row );
		}
			
		return array("success"=>1,"message"=>"Success !","data"=>$all_rows);
		
	}


	public function get_booked_ticket_detail($id)
	{
		$this->db->where('id',$id);
		$query= $this->db->get('transaction_travel');
		$ticket =array();
		foreach ($query->result() as $row)
		{
			
			$ticket['payumoney_id'] = $row->payumoney_id;
			$ticket['order_id'] = $row->mantis_id;
			$ticket['pnr_no']= $row->pnr_no;
			$ticket['ticket_no'] = $row->ticket_no;
			$ticket['booking_date'] = $row->date_time;
			$ticket['departure_date']= $row->ticket_date;
			$ticket['from']= $row->from_city;
			$ticket['to']= $row->to_city;
		}
		
		/*$this->db->where('t_id',$id);
		$query1 = $this->db->get('passenger_detail');
		$passengers = array();
		foreach($query1->result() as $row1)
		{
			$passenger = array();
			$passenger['name'] = $row1->name;
			$passenger['age'] = $row1->age;
			$passenger['gender'] = $row1->gender;
			$passenger['seatno'] = $row1->seatno;
			$passenger['isacseat'] = $row1->isacseat;
			
			array_push($passengers,$passenger);						
		}
		
		$ticket['passenger'] = $passengers;*/
		
		return array("success"=>1,"message"=>"Success !","data"=>$ticket);
	}
	
	public function update_ticket_status($status,$pnr_no,$ticket_no,$cancel_charge)
	{
		$data = array(
					"ticket_status"=>$status,
					"cancel_charge"=>$cancel_charge
					);
		$this->db->where('pnr_no',$pnr_no);				
		$this->db->where("ticket_no",$ticket_no);
		
		$this->db->update("transaction_travel",$data);
	}
	
	public function cancel_ticket_refund($amount,$payment_id)
	{
		$PayuMoney_BASE_URL = "https://www.payumoney.com/payment/merchant/refundPayment?";
	
			  $postData = array();
			  $postData['merchantKey']="EaXKMGaq";
			  $postData['paymentId']=$payment_id;
			  $postData['refundAmount']=$amount;

			  $postNow = http_build_query($postData);
  			  $postUrl = $PayuMoney_BASE_URL.$postNow; 
  				
	  		$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, True);
			curl_setopt($ch, CURLOPT_URL, $postUrl);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	
  
  			$header = array(
    			 'Authorization:3Ey+c27aI8/22YHswDedJqjDr2dzrVEFFz4mXXyb+7Q=');
    			 
    			 
    			 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    			 $out = curl_exec($ch);
			  //if got error
			  if (curl_errno($ch)) {
			    $c_error = curl_error($ch);
			    if (empty($c_error)) {
			      $c_error = 'Some server error';
			    }
			   echo json_encode(array('curl_status' => 'FAILURE','message'=>'not success', 'error' => $c_error));
			  }
			  else
			  {
			  	$out = trim($out);
				  //echo $data = json_encode(array('curl_status' => 'SUCCESS', 'result' => $out));
				  //$myArray = array();
				  //$myArray = json_decode($data,TRUE);
				   echo $out;
				  $test = json_decode($out,TRUE);
				  $status = $test['status'];
				  
				  if($status != -1)
				  {
				  	$data = array(
					"isrefunded"=>1,
						);
						
					$this->db->where("payumoney_payment_id",$payment_id);
					$this->db->update("transaction_travel",$data);
				  }
				  
				  
				  
			  }
			  
			  
//			 echo $myArray['result'];
  
  
					/*$url = "https://test.payumoney.com/payment/merchant/refundPayment?
					merchantKey=rjQUPktU&paymentId=".$payment_id."&refundAmount=".$amount; 
					$data =array('merchantKey'=>'rjQUPktU','paymentId'=>$payment_id,'refundAmount'=>$amount); 
					$options = array( 
					  'http' => array( 
					     'header' =>"Content-Type: application/x-www-form-urlencoded\r\n".
					                   
					    "Authorization:y8tNAC1Ar0Sd8xAHGjZ817UGto5jt37zLJSX/NHK3ok=",
					    'method' => 'POST', 
					    'Authorization'=> 'y8tNAC1Ar0Sd8xAHGjZ817UGto5jt37zLJSX/NHK3ok=', 
					    'content' => http_build_query($data) 
					    ), 
					  ); 
					$context = stream_context_create($options); 
					$result = file_get_contents($url, false, $context); 
					if ($result === FALSE) {}*/
					
			  
			  
	}
	
	public function create_hash($key,$txnId,$amount,$productName,$firstName,$email,$udf1,$udf2,$udf3,$udf4,$udf5,$salt)
	{
		$payhash_str = $key . '|' . $this->checkNull($txnId) . '|' .$this->checkNull($amount)  . '|' .$this->checkNull($productName)  . '|' .$this->checkNull($firstName) . '|' .$this->checkNull($email) . '|' . $this->checkNull($udf1) . '|' . $this->checkNull($udf2) . '|' . $this->checkNull($udf3) . '|' . $this->checkNull($udf4) . '|' . $this->checkNull($udf5) . '|' . $salt;

			$hash = strtolower(hash('sha512', $payhash_str));
			$arr['result'] = $hash;
			$arr['status']=0;
			$arr['errorCode']=null;
			$arr['responseCode']=null;
			$output=$arr;


	echo json_encode($output);
	}


	function checkNull($value) {
            if ($value == null) {
                  return '';
            } else {
                  return $value;
            }
      }

	

	public function send_message($order_no,$pnr_no,$ticket_no,$from_city,$to_city,$date_of_journey,$reporting_time,$departure_time,$status,$boarding_address,$bus_type,$company_name,$contact_no,$total_fare,$contact_name,$seats)
	{
		
		$user = "vikrant sharma";
		$pass = "123456";
		$sender ="VIseva";
		$priority = "ndnd";
		$stype = "normal";
		$base_url = "http://bhashsms.com/api/sendmsg.php?";
		
		$message = "Hi ";
		
		$message= $message.$contact_name." Details for your upcoming journey from ".$from_city." to ".$to_city." below \n"."PNR:".$pnr_no."\n"."Ticketid:".$ticket_no."\n"."Operator Name:".$company_name."\n"."Reporting Time:".$reporting_time." \n"."Departure Time:".$departure_time."\n"."Seat No:".$seats."\n"."Boarding Point:".$boarding_address."\n\n\n"."Iseva wishes you a safe and comfortable travel."."\n"." For queries contact Iseva at 7230002908";
		
		
		
		$url="user=".$user."&pass=".$pass."&sender=".$sender."&phone=".$contact_no."&text=".$message."&priority=".$priority."&stype=".$stype;
		
		$url = str_replace("%3D","=",$base_url.rawurlencode($url));
		$url = str_replace("%26","&",$url);
		
		
		//echo $url;
		
		/*$url = str_replace(" ","%20",$url);
		$url = str_replace("\n","%0A",$url);
		$url = str_replace(",","%2C",$url);
		$url = str_replace("$","%24",$url);
		$url = str_replace("-","%2D",$url);
		$url = str_replace("(","%28",$url);
		$url = str_replace(")","%29",$url);
		$url = str_replace("'","%27",$url);*/
		
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		
		curl_close($curl);
				
				
		
		if($result)
		{
			
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL,"http://xercesblue.website/iservice/client_requests/transaction/update_message_send_flag");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,
		            "mentis_id=".$order_no);
		            
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
			$server_output = curl_exec ($ch);
		curl_close($ch);
		
		
		}
		
		
		
			
		

		
	
	}
	
	
       
	public function update_message_send_flag($flag,$mentis_id)
	{
		$data = array(
					
					"message_sent"=>$flag,
					);
		$this->db->where('mantis_id',$mentis_id);				
		$this->db->update("transaction_travel",$data);	
	}
	
	
}
