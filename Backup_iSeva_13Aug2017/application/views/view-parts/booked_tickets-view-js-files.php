<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>docs/js/xerces_globals.js"></script>

<script type="text/javascript" src="<?=base_url();?>docs/js/jquery.twbsPagination.js"></script>

<script type="text/javascript">

var offset = 0;
var offsetcounter =1;
	


	 $( "#from_date" ).datepicker();
	 $("#to_date").datepicker();

	function change_date(date)
		{
				var month = date.substring(0,2);
				var day = date.substring(3,5);
				var year = date.substring(6,10);

				return year+"-"+month+"-"+day+" 00:00:00"; 
		}	

	$(document).ready(function(){ 
		$("#search_form").on("submit",function(event){
            var from_date =$('#from_date').val();
            if(from_date != "")
            {
            	from_date = change_date(from_date);	
            }
            
            var to_date = $("#to_date").val();
            if(to_date != "")
            {
            	to_date = change_date(to_date);
            }
            
          
            var email = $("#email_id").val();
            var phone =$("#phone_no").val();
            var pnr_no =$("#pnr_no").val();
           
           	if(from_date == "" && to_date == "" && email == "" && phone == "" && pnr_no == "")
           	{
           		setdata(page);
           	}
           	else
           	{
           		$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/booked_tickets/search')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/gcm/send_notification",
						data:{
								"from_date":from_date,
								"to_date":to_date,
								"email":email,
								"phone":phone,
								"pnr_no":pnr_no,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							$("#from_date").val("");
							$("#to_date").val("");
							$("#email_id").val("");
							$("#phone_no").val("");
							$("#pnr_no").val("");
							

							$('#all_ticket_container').empty();
							for(i=0;i<datareceived.data.length;i++)
							{
								var data = "";
								if(i%2== 0)
								{
									data = "<div class='row'  style='background-color: #fff;padding-top: 5px;padding-bottom: 5px;'>";
								}
								else
								{
									data = "<div class='row' style='background-color: #DDD;padding-top: 5px;padding-bottom: 5px;'>";
								}
								
				
								data = data+"<div class='col-sm-6'>"+
								"<div class='col-sm-1 text-center'>"+
								 ""+datareceived.data[i].pnr_no+""+
								"</div>"+
								"<div class='col-sm-2 text-center'>"+
									datareceived.data[i].ticket_no +
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
									
									datareceived['data'][i]['from']+
									
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
									
									datareceived['data'][i]['to']+
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
									
									datareceived['data'][i]['logged_user_name']+
								"</div>"+
								"<div class='col-sm-2 text-center'>"+
									
									datareceived['data'][i]['logged_user_phone']+
								"</div>"+
								"<div class='col-sm-3 text-center'>"+
									
									datareceived['data'][i]['logged_user_email']+
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
									datareceived['data'][i]['transaction_status']+
									
								"</div>"+
								
							"</div>"+
							"<div class='col-sm-6'>"+
								"<div class='col-sm-2 text-center'>"+
									
									datareceived['data'][i]['phone']+
								"</div>"+
								"<div class='col-sm-3 text-center'>"+
									
									datareceived['data'][i]['email']+
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
								datareceived['data'][i]['message_sent']+
									
								"</div>"+
								"<div class='col-sm-1 text-center'>"+
								datareceived['data'][i]['email_sent']+
									
								"</div>"+
								"<div class='col-sm-2 text-center'>"+
								datareceived['data'][i]['ticket_date']+
									
								"</div>"+
								"<div class='col-sm-2 text-center'>"+
								datareceived['data'][i]['ticket_status']+
									
								"</div>";
								if(datareceived['data'][i]['cancelable'] == 1 && datareceived['data'][i]['ticket_status'] == "cancelled" && datareceived['data'][i]['isrefund'] == 0)
								{
									data = data+"<div class='col-sm-1 text-center'>"+
									
										"<button type='button' class='btn btn-danger refund' data-totalfare='"+datareceived['data'][i]['total_fare']+"' data-cancelcharge='"+datareceived['data'][i]['cancel_charge']+"' data-paymentid='"+datareceived['data'][i]['payumoney_payment_id']+"'>Refund</button>"+
									"</div>"+
									"</div>"+
									"</div>";
								}
								else
								{
									data = data+"<div class='col-sm-1 text-center'>"+
										

									"</div>"+
									"</div>"+
									"</div>";
								}


						
						$('#all_ticket_container').append(data);
						
							}


						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	        
					event.preventDefault();
           	}

            
			
		});
	});	
		
	
	
	
	
	
	$(document).on('click', '.refund', function(){ 

		totalfare = $(this).attr("data-totalfare");
		cancel_charge = $(this).attr("data-cancelcharge");
		paymentid = $(this).attr("data-paymentid");
		cancelamount = (totalfare * cancel_charge)/100;
		refundamount = totalfare - cancelamount; 
		//refundamount =1;
    	//alert("totalfare:"+totalfare+" cancel_charge:="+cancel_charge+" paymentid:="+paymentid);
    	$('<div></div>').appendTo('body')
    .html('<div><h6>Total Fare   '+totalfare+'</h6></div>'+
    		'<div><h6>Cancel Charge   '+cancel_charge+'%</h6></div>'+
    		'<div><h6>Refund Amount   '+refundamount+'</h6></div>')
    .dialog({
        modal: true,
        title: 'Are You Sure!',
        zIndex: 10000,
        autoOpen: true,
        width: '400',
        resizable: false,
        buttons: {
            Yes: function () {
               	
            	ajax_call_refund(refundamount,paymentid);
                $(this).dialog("close");
            },
            No: function () {
                $(this).dialog("close");
            }
        },
        close: function (event, ui) {
            $(this).remove();
        }
    });
	});
	

	function ajax_call_refund(refundamount,paymentid)
	{
		$('#loading_container').css("display","block");
		$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/booked_tickets/refund')?>",
						
						data:{
								
								"refundamount":refundamount,
								"paymentid":paymentid,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
							alert(datareceived.message);
							
							$('#loading_container').css("display","none");
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							$('#loading_container').css("display","none");
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	}
	
	
	
	
	
		

	
	$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/booked_tickets/get_all_row_count')?>",
						
						data:{
								
								
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
							if(datareceived.success == "1")
							{
								var row_count =	parseInt(datareceived.count);
								var tab = (row_count/5)+1;

								$('#pager').twbsPagination({
						            totalPages: tab,
						            visiblePages: 5,
						            onPageClick: function (event, page) {
						                setdata(page);
						            }
						        }).on('page', function (event, page) {
						            console.info(page + ' (from event listening)');
						        });
							}
							else
							{
								alert("something went wrong");
							}
							
							$('#loading_container').css("display","none");
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	


	function setdata(page)	
	{
		offset = 5*(page-1);

		$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/booked_tickets/get_booked_all_ticket')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/promocode/change_active",
						data:{
								
								"offset":offset,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							$('#all_ticket_container').empty();
							for(i=0;i<datareceived.data.length;i++)
							{
								var data = "";
								if(i%2== 0)
								{
									data = "<div class='row'  style='background-color: #fff;padding-top: 5px;padding-bottom: 5px;'>";
								}
								else
								{
									data = "<div class='row' style='background-color: #DDD;padding-top: 5px;padding-bottom: 5px;'>";
								}
								
				
						data = data+"<div class='col-sm-6'>"+
						"<div class='col-sm-1 text-center'>"+
						 ""+datareceived.data[i].pnr_no+""+
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							datareceived.data[i].ticket_no +
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['from']+
							
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['to']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['logged_user_name']+
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							
							datareceived['data'][i]['logged_user_phone']+
						"</div>"+
						"<div class='col-sm-3 text-center'>"+
							
							datareceived['data'][i]['logged_user_email']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							datareceived['data'][i]['transaction_status']+
							
						"</div>"+
						
					"</div>"+
					"<div class='col-sm-6'>"+
						"<div class='col-sm-2 text-center'>"+
							
							datareceived['data'][i]['phone']+
						"</div>"+
						"<div class='col-sm-3 text-center'>"+
							
							datareceived['data'][i]['email']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
						datareceived['data'][i]['message_sent']+
							
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
						datareceived['data'][i]['email_sent']+
							
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
						datareceived['data'][i]['ticket_date']+
							
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
						datareceived['data'][i]['ticket_status']+
							
						"</div>";
								if(datareceived['data'][i]['cancelable'] == 1 && datareceived['data'][i]['ticket_status'] == "cancelled" && datareceived['data'][i]['isrefund'] == 0)
								{
									data = data+"<div class='col-sm-1 text-center'>"+
									
										"<button type='button' class='btn btn-danger refund' data-totalfare='"+datareceived['data'][i]['total_fare']+"' data-cancelcharge='"+datareceived['data'][i]['cancel_charge']+"' data-paymentid='"+datareceived['data'][i]['payumoney_payment_id']+"'>Refund</button>"+
									"</div>"+
									"</div>"+
									"</div>";
								}
								else
								{
									data = data+"<div class='col-sm-1 text-center'>"+
										

									"</div>"+
									"</div>"+
									"</div>";
								}


						
						$('#all_ticket_container').append(data);
						
							}
							
							
							
							
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	}



	/*$('.get_more_ticket').on('click',function(event){

		offset = 5*offsetcounter;
			
		
			$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/booked_tickets/get_booked_all_ticket')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/promocode/change_active",
						data:{
								
								"offset":offset,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
							for(i=0;i<datareceived.data.length;i++)
							{
								var data = "";
								if(i%2== 0)
								{
									data = "<div class='row'  style='background-color: #fff;padding-top: 5px;padding-bottom: 5px;'>";
								}
								else
								{
									data = "<div class='row' style='background-color: #DDD;padding-top: 5px;padding-bottom: 5px;'>";
								}
								
				
						data = data+"<div class='col-sm-6'>"+
						"<div class='col-sm-2 text-center'>"+
						 ""+datareceived.data[i].pnr_no+""+
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							datareceived.data[i].ticket_no +
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['from']+
							
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['to']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							
							datareceived['data'][i]['logged_user_name']+
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							
							datareceived['data'][i]['logged_user_phone']+
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							
							datareceived['data'][i]['logged_user_email']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
							datareceived['data'][i]['transaction_status']+
							
						"</div>"+
						
					"</div>"+
					"<div class='col-sm-6'>"+
						"<div class='col-sm-2 text-center'>"+
							
							datareceived['data'][i]['phone']+
						"</div>"+
						"<div class='col-sm-3 text-center'>"+
							
							datareceived['data'][i]['email']+
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
						datareceived['data'][i]['message_sent']+
							
						"</div>"+
						"<div class='col-sm-1 text-center'>"+
						datareceived['data'][i]['email_sent']+
							
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
						datareceived['data'][i]['ticket_date']+
							
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
						datareceived['data'][i]['ticket_status']+
							
						"</div>"+
						"<div class='col-sm-2 text-center'>"+
							
						"</div>"+
							
					"</div>"+
					"</div>";

					
						$('#all_ticket_container').append(data);
						
							}
							if(datareceived.data.length < 5)
							{
								$('#get_more_ticket_container').css("display","none");
							}
							
							
							offsetcounter++;
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
		});*/
   
</script>