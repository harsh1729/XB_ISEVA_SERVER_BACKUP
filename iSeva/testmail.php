<?php

require_once "PHPMailer/PHPMailerAutoload.php";

	$order_no = $_REQUEST['order_no'];
	$ticket_no = $_REQUEST['ticket_no'];
	$pnr_no = $_REQUEST['pnr_no'];
	$from_city = $_REQUEST['from_city'];
	$to_city = $_REQUEST['to_city'];
	$date_of_journey = $_REQUEST['date_of_journey'];
	$reporting_time = $_REQUEST['reporing_time'];
	$departure_time = $_REQUEST['departure_time'];
	$status = $_REQUEST['status'];
	$boarding_address = $_REQUEST['boarding_address'];
	$bus_type = $_REQUEST['bus_type'];
	$company_name = $_REQUEST['company_name'];
	$contact_no = $_REQUEST['contact_no'];
	$total_fare = $_REQUEST['total_fare'];
	$p_length = $_REQUEST['p_length'];
	$cd_length = $_REQUEST['cd_length'];
	$to_mail = $_REQUEST['to_mail'];
	
	
	
	
	if($ticket_no==null ||$ticket_no=="" ||$ticket_no==0)
	{
	    $ticket_no=$order_no;
	}
	
	/*$order_no = "24325353";
	$pnr_no = "";
	$from_city ="ahmedabad";
	$to_city = "chennai";
	$date_of_journey = "2017-02-11";
	$reporting_time = "4:45 PM";
	$departure_time = "5:00 PM";
	$status = "Booked";
	$boarding_address ="";
	$company_name = "";
	$contact_no ="";
	$total_fare = "";
	$to_mail = "vikassharma9782@gmail.com";
	$bus_type ="";
	$p_length = 3;
	$cd_length =4;*/
	


try{



$message = "<div>
<div style='width:595px;margin:0 auto;border:#dfdfdf solid 1px'>
  <div style='background:#f5f5f5;height:45px;padding:25px 0 0 20px'>
    <img src='http://xercesblue.website/iservice/iseva.png' style='float:left;height:40px' class='CToWUd'>
    <div style='color:#727272;font:500 12px Arial,Helvetica,sans-serif;float:right;font-weight:bold;margin:5px 15px 0 0;width:150px;text-align:right'>TICKET NO. ".$ticket_no."</div>
  </div>
  <div style='margin:15px;padding-bottom:15px;overflow:hidden;border-bottom:1px solid #ededed'>
    <div style='float:left;width:145px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>from</div>
      <div style='text-transform:capitalize;color:#727272;font:600 14px Arial,Helvetica,sans-serif'>".$from_city."</div>
    </div>
    <div style='float:left;width:110px;text-align:left'><img style='margin-top:10px' src='https://ci3.googleusercontent.com/proxy/ZYToH-WCnjNRWgdL3lH45sTrWV0U3Dvj1SDqZjmXboFe_RZBaKoiGtMl81W8U-Rimd_c5sF6a28VqBrSk-ewzEbVUNn_QZPVbw=s0-d-e1-ft#http://assets.paytm.com/images/tickets/bus-icon.png' class='CToWUd'></div>
    <div style='float:left;width:125px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>to</div>
      <div style='text-transform:capitalize;color:#727272;font:600 14px Arial,Helvetica,sans-serif'>".$to_city."</div>
    </div>
    <div style='float:left;width:150px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>date of journey</div>
      
      <div style='text-transform:capitalize;color:#727272;font:600 14px Arial,Helvetica,sans-serif'>".$date_of_journey."</div>
    </div>
  </div>
  <div style='margin:15px;padding-bottom:15px;overflow:hidden;border-bottom:1px solid #ededed'>
    <div style='float:left;width:140px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>REPORTING TIME</div>
      
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'><span class='aBn' data-term='goog_466591271' tabindex='0'><span class='aQJ'>".$reporting_time."</span></span></div>
      
    </div>
    <div style='float:left;width:140px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>DEPARTURE TIME</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'><span class='aBn' data-term='goog_466591272' tabindex='0'><span class='aQJ'>".$departure_time."</span></span></div>
    </div>
    <div style='float:left;width:100px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>STATUS</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'>".$status."</div>
    </div>
    <div style='float:left;width:140px'>
      
    </div>
  </div>
  <div style='margin:15px;padding-bottom:15px;overflow:hidden'>
  
    <table width='100%' border='0' cellspacing='0' cellpadding='5'>
      <tbody><tr>
        <td width='460' style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>PASSENGER NAME</td>
        <td width='85' style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>SEAT</td>
        <td width='10' style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;padding-bottom:5px'>TICKET PNR</td>
      </tr>";
      
     for($i =0;$i<$p_length;$i++)
     {
     
     	$p_name = $_REQUEST['p_name'.$i];
     	$p_seat = $_REQUEST['p_seat'.$i];
     	
     	//$p_name = "vikas";
     	//$p_seat = "2";
     	if($i == 0)
     	{
     		$message1 = "<tr>
        <td style='text-transform:capitalize;color:#727272;font:400 13px/1 Arial,Helvetica,sans-serif'>".$p_name."</td>
        <td style='text-transform:capitalize;color:#727272;font:400 13px/1 Arial,Helvetica,sans-serif'>".$p_seat."</td>
        
        <td style='text-transform:capitalize;color:#727272;font:400 13px/1 Arial,Helvetica,sans-serif'>".$pnr_no."</td>
        
      </tr>";
     	}
     	else
     	{
     		$message1 = "<tr>
       <td style='text-transform:capitalize;color:#727272;font:400 13px/1 Arial,Helvetica,sans-serif'>".$p_name."</td>
        <td style='text-transform:capitalize;color:#727272;font:400 13px/1 Arial,Helvetica,sans-serif'>".$p_seat."</td>
        
        
      </tr>";
     	}
     	
      
      $message = $message.$message1;
     } 
     
      
 $message2 =  " </tbody></table>
  </div>
  <div style='padding:15px;overflow:hidden'>
    <div style='width:330px;float:left;border-top:1px solid #ededed'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:15px;padding-bottom:5px'>BOARDING POINT ADDRESS</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'>".$boarding_address."
      </div>
    </div>
    <div style='width:195px;float:left;border-top:1px solid #ededed;margin-left:40px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:15px;padding-bottom:5px'>BUS TYPE</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'>".$bus_type."</div>
    </div>
  </div>
  <div style='padding:0 15px 6px 15px;overflow:hidden'>
    <div style='width:330px;float:left;border-top:1px solid #ededed'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:15px;padding-bottom:5px'>".$company_name."</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'>".$contact_no."</div>
    </div>
    <div style='width:195px;float:left;border-top:1px solid #ededed;margin-left:40px'>
      <div style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:15px;padding-bottom:5px'>TOTAL FARE</div>
      <div style='text-transform:capitalize;color:#727272;font:400 13px Arial,Helvetica,sans-serif'>Rs ".$total_fare."</div>
    </div>
  </div>
        <div style='color:#727272;font:400 11px Arial,Helvetica,sans-serif;margin-top:5px;margin-left:5px;'>For any kind of journey inconvenience and bus cancellation issues, contact us within 15 days of Journey date, else request would not be processed.</div>


       
    <p style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:25px;margin-left:5px;'>CANCELLATION POLICY</p>
    <table width='100%' border='0' cellspacing='0' cellpadding='3' style='margin-bottom:20px;margin-left:5px;'>
        <tbody><tr>
            <td width='33%'>Hours before Departure</td>
            <td width='67%'>Refund</td>
        </tr>";
        
        for($j =0;$j<$cd_length; $j++)
        {
        	
        	$condition = $_REQUEST['cd_condition'.$j];
        	$percentage= $_REQUEST['cd_percentage'.$j];
        	
        	//$condition = "4";
        	//$percentage= 60;
        	
        	if($j == $cd_length-1)
        	{
        		$message4 =     "<tr style='color:#727272;font:400 11px Arial,Helvetica,sans-serif'>
            <td> Above ".$condition." Hrs. </td>
            <td>".(100 - $percentage)."%</td>
        </tr>";
        	}
        	else
        	{
        		$message4 =     "<tr style='color:#727272;font:400 11px Arial,Helvetica,sans-serif'>
            <td> Before ".$condition." Hrs. </td>
            <td>".(100 - $percentage)."%</td>
        </tr>";
        	}
        	 
     	
     		$message2 = $message2.$message4;
        }
 
        
 $message3 =   " </tbody></table>

    <ul style='padding-left:16px;color:#727272'>
        <li style='margin-bottom:5px'>Refund policy mentioned above is indicative. The actual cancellation charges are determined by bus operators and bus providers at the actual time of cancellation. ISEVA has no role in governing cancellation charges.</li>
        <li>Cancellation charges are calculated on the actual fare of the ticket, if any discount coupons are used while purchasing the ticket, the discounted value would be used to calculate the refund amount when a ticket is cancelled.</li>
       <li>Partial cancellation of tickets in the same order is not allowed </li>
    </ul>





        <p style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:25px;margin-left:5px;'>ISEVA IS RESPONSIBLE FOR</p>
        <ul style='padding-left:16px;color:#727272'>
          <li style='margin-bottom:5px'>Issuing a valid ticket (a ticket that will be accepted by the bus operator) for its' network of bus operators.</li>
          <li style='margin-bottom:5px'>Providing refund and support in the event of cancellation.</li>
          <li>Providing customer support and information in case of any delays / inconvenience.</li>
        </ul>
        <p style='text-transform:uppercase;color:#b5b5b5;font:500 11px Arial,Helvetica,sans-serif;margin-top:25px;margin-left:5px;'>ISEVA'S RESPONSIBILITIES DO NOT INCLUDE</p>
        <ul style='padding-left:16px;color:#727272'>
          <li style='margin-bottom:5px'>The bus operator's bus not departing / reaching on time.</li>
          <li style='margin-bottom:5px'>The bus operator's employees being rude.</li>
          <li style='margin-bottom:5px'>The bus operator's bus seats etc not being up to the customer's expectation.</li>
          <li style='margin-bottom:5px'>The bus operator canceling the trip due to unavoidable reasons.</li>
          <li style='margin-bottom:5px'>The baggage of the customer getting lost / stolen / damaged.</li>
          <li style='margin-bottom:5px'>The bus operator changing a customer's seat at the last minute to accommodate a lady / child.</li>
          <li style='margin-bottom:5px'>The customer waiting at the wrong boarding point (please call the bus operator to find out the exact boarding point if you are not a regular traveler on that particular bus).</li>
          <li style='margin-bottom:5px'>The bus operator changing the boarding point and/or using a pick-up vehicle at the boarding point to take customers to the bus departure point</li>
        </ul>
      </div>
  </form></div>

<img src='https://ci5.googleusercontent.com/proxy/8mYYk49d0dXPZEkGn_b2semyeLDfjY3G9IcTVl-UDDlb0_UGyGulVrr6IUuCWv3UYMdB9do5KRYURZaDYf7Q4sK_gJEkkR31QLCH9FqkGjopKLTceTg3YckOzReyBj9DX6K43hUMjJoVw8ghnJXdfIr-pBJpcYnAsRxqP2fEV22G_Ueyafxnp3uqrDOSOyVlbqgIWaEnZiEDcucMyxWLgnURf-CJljlF0fxIvFuVT0GwzudPcID08J1ho4x5ENxbA-otEbCW7x-sPQU1EUJnPKSsTPRUowkV_m7X_1RMpuWCXBKh20uP19w_7JAkGzpjzTx5IDkouIev7PS2xC3sxsz2KR8aicu1_Ohx7KN2kTrB3ZNDXfmS_XJTKu2HODx9KRpwmJ-11QNhMV9y4_tfyOl7V-SRzeSA1tqN4S9klWbgGal6mdMzqNiHmPOXeo8bd5gs1T1bi46FujervWUpiZlUbpQmFZFpotYQWiYBWgylQ5LMJnnOPlL_e7NEkYOL9lzYZvTInyVDRGjI9Lm8Mcqv=s0-d-e1-ft#http://email.paytm.com/wf/open?upn=4kRwqd9CYVlWzTudQk669P-2B9nMiFJC-2BnodbhieiputkhZ2MY1fZkit2FJ6OSMuQV8aJOE12A-2FhtsMRYzB1xCjgy-2FiXqyFl1gt6qjEfDtCysYA-2BODcxa9cuOuybM1NTZVZ2IAaG-2FQ8u6Eq6jFMSz8veXDWn9s1mgU-2FW8yvnWAkKAACJsZNSXb-2FC8ICPFpnyG78zlHicaR7KdD-2BK9p3OXmKGq-2FiiD6-2F1PPJ717yUG0obdgzcIVeidh-2FeQSlIZdlugKA3E2YRsNUVdu9iSonxWR6CHBjJOwXFBWrnvDxXcVrxiou0LhhPSxfBDghS4okOh9' alt='' width='1' height='1' border='0' style='height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important' class='CToWUd'><div class='yj6qo'></div><div class='adL'>
</div></div><div class='adL'>

</div></div>";

$message = $message.$message2.$message3;

	
	//PHPMailer Object
$mail = new PHPMailer;
//From email address and name
$mail->From = "booking@xercesblue.in";
$mail->FromName = "iSeva Ticket";
//To address and name
$mail->addAddress($to_mail,"vikas sharma");
//$mail->addAddress("recepient1@example.com"); //Recipient name is optional
	
//Address to which recipient will reply
//$mail->addReplyTo("reply@yourdomain.com", "Reply");
//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");
//Send HTML or Plain Text email
$mail->isHTML(true);
$mail->Subject = "Ticket Confirmation";
$mail->Body = $message;
//$mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://xercesblue.website/iservice/client_requests/transaction/update_mail_send_flag");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,
            "mentis_id=".$order_no);
            
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$server_output = curl_exec ($ch);
            
    	echo "Message has been sent successfully";
}
}catch(Exception $e)
{
	$msg = 'Catch Error: ' . $e->getMessage();
}
?>

