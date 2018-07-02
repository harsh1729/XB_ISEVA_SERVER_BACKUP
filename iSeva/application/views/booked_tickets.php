 		<?=$header;?>
	</div>
</div>
<div style="background-color:#CCC;padding-top:10px;padding-bottom:10px;">
 		<form id="search_form" >
					<div class="row" style="">

                          <div class="col-md-2 col-xs-12" >

                          <input type="text" id="from_date" class="form-control" placeholder="From Date" style="margin-left: 5px;" />

                          </div>

                         <div class="col-md-2 col-xs-12">
                            <input type="text" id="to_date" class="form-control" placeholder="To Date"  style="margin-left: 5px;" />
 						</div>
		                <div class="col-md-2 col-xs-12">
                          <input type="text" id="email_id" class="form-control" placeholder="Email"  style="margin-left: 5px;" />
						</div>
						

						<div class="col-md-2 col-xs-12">
                        	 <input type="text" id="phone_no" class="form-control" placeholder="Phone"  style="margin-left: 5px;" />
						</div>

		                <div class="col-md-2 ">
		                	
							
							<input type="text" id="pnr_no" class="form-control" placeholder="PNR NO"  style="margin-left: 5px;" />

						

						</div>
						<div class="col-sm-2" style="padding-right: 20px;">
							<button type="submit" class="btn btn-primary btn-block btn-sm" ><span class="glyphicon glyphicon-search" ></span> Search</button>
						</div>
						
		            </div>
		    </form>        
				</div>
			</div>
	</div>
</div> 
<div class="container-fluid" style="min-height:89vh;">
	
	
	<div class="row wmd-view-topscroll" style="z-index: 0; width: 250%;min-height:89vh; border: 1px solid #0F0;padding-bottom: 30px;">
		<div class="col-sm-12" style="">
			<div class="row" style=" z-index: -1;background-color:#333;color: #FFF;padding: 5px;margin-bottom: 10px;">
				<div class="col-sm-6">
					<div class="col-sm-1 text-center" >
						PNR NO.
					</div>
					<div class="col-sm-2 text-center">
						Ticket No.
						
					</div>
					<div class="col-sm-1 text-center">
						From
						
					</div>
					<div class="col-sm-1 text-center">
						To
						
					</div>
					<div class="col-sm-1 text-center">
						User Name
						
					</div>
					<div class="col-sm-2 text-center">
						User Phone
						
					</div>
					<div class="col-sm-3 text-center">
						User Email
						
					</div>
					<div class="col-sm-1 text-center">
						T_Status
						
					</div>

				</div>
				<div class="col-sm-6">
					<div class="col-sm-2 text-center">
						Comm. Phone
						
					</div>
					<div class="col-sm-3 text-center">
						Comm. Email
						
					</div>
					<div class="col-sm-1 text-center">
						Msg
						
					</div>
					<div class="col-sm-1 text-center">
						Mail
						
					</div>
					<div class="col-sm-2 text-center">
						Departure Date
						
					</div>
					<div class="col-sm-2 text-center">
						Ticket Status
						
					</div>
					<div class="col-sm-1 text-center">
						Refund
						
					</div>

				</div>	
					
			</div>
			<div id="all_ticket_container">
				<?php foreach ($all_tickets['data'] as $index => $row):?>
				
				<?php if($index%2 == 0) {?>
				<div class="row" id="promo_container<?=$row['id']?>" style="background-color: #fff;padding-top: 5px;padding-bottom: 5px;">
				<?php } else { ?>
					<div class="row" id="promo_container<?=$row['id']?>" style="background-color: #DDD;padding-top: 5px;padding-bottom: 5px;">
				<?php } ?>
					<div class="col-sm-6">
						<div class="col-sm-2 text-center">
						<?=$row['pnr_no'];?>
						</div>
						<div class="col-sm-2 text-center">
							<?=$row['ticket_no'];?>
							
						</div>
						<div class="col-sm-1 text-center">
							<?=$row['from'];?>
							
						</div>
						<div class="col-sm-1 text-center">
							<?=$row['to'];?>
							
						</div>
						<div class="col-sm-1 text-center">
							<?=$row['logged_user_name'];?>
							
						</div>
						<div class="col-sm-2 text-center">
							<?=$row['logged_user_phone'];?>
							
						</div>
						<div class="col-sm-2 text-center">
							<?=$row['logged_user_email'];?>
							
						</div>
						<div class="col-sm-1 text-center">
					
							<?=$row['transaction_status'];?>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="col-sm-2 text-center">
							<?=$row['phone'];?>
						</div>
						<div class="col-sm-3 text-center">
							<?=$row['email'];?>
						</div>
						<div class="col-sm-1 text-center">
							<?=$row['message_sent'];?>
						</div>
						<div class="col-sm-1 text-center">
							<?=$row['email_sent'];?>
						</div>
						<div class="col-sm-2 text-center">
							<?=$row['ticket_date'];?>
						</div>
						<div class="col-sm-2 text-center">
							<?=$row['ticket_status'];?>
						</div>
						<div class="col-sm-2 text-center">
							
						</div>
							
					</div>
						
				</div>				   

				<?php endforeach; ?>
				

			</div>	
			</div>
	</div>
	<div style="position: fixed;bottom: 0px;left: 0px">
		<div class="container text-center">
			<ul id="pager" class="pagination">
		   
		  	</ul>	
		</div>
		  
		  
	</div>	
	