 		<?=$header;?>
	</div>
</div>
 <div style="background-color:#CCC;padding-top:10px;padding-bottom:10px;">
					<div class="row" style="">

                          <div class="col-md-2 col-xs-12">

                          

                          </div>

                         <div class="col-md-2 col-xs-12">
                            
 						</div>
		                <div class="col-md-2 col-xs-12">
                         
						</div>
						

						<div class="col-md-3 col-xs-12">
                        	<div class="btn btn-default pull-right" style="height:34px;margin-right:10px;display:none;" id='addNewPromoCancelBtn'>Cancel <span class="glyphicon glyphicon-remove"></span></div>
							<div class="btn btn-default pull-right" style="height:34px;margin-right:10px;" id='addNewPromoBtn'>New Promocode <span class="glyphicon glyphicon-plus"></span></div>
						</div>

		                <div class="col-md-3 ">
		                	
							<div class="btn btn-default pull-right" style="height:34px;margin-right:10px;display:none;" id='addNewCommCancelBtn'>Cancel <span class="glyphicon glyphicon-remove"></span></div>
							<div class="btn btn-default pull-right" style="height:34px;margin-right:10px;" id='addNewCommBtn'>Update Commition <span class="glyphicon glyphicon-plus"></span></div>
							

						

						</div>
						
		            </div>
				</div>
			</div>
	</div>
</div>
<div class="container-fluid" style="min-height:89vh;">
	<div class="row" id="add_new_promocode_main_container" style="border: 1px solid #0F0;padding-top: 30px;padding-bottom: 30px;display: none;">
		<div class="col-sm-12">
			<form id="promocode_submit_form" >
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8" >
						
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="text" id="promocode_no" class="form-control" placeholder="Promocode Number" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="text" id="promocode_tag" class="form-control" placeholder="Promocede Tag" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="text" id="promocode_details" class="form-control" placeholder="Promocede Details" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="number" id="promocode_amount" class="form-control" placeholder="Promocede Amount" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="number" id="promocode_amount_percentage" class="form-control" placeholder="Promocede Amount Percentage" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="number" id="max_uses_count" class="form-control" placeholder="Maximum use" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="text" id="start_date" class="form-control" placeholder="Start Date" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<input type="text" id="end_date" class="form-control" placeholder="End Date" required="required"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="imageSelectorField">
							<div class="imageSelectBox" style="height:150px;border:1px solid #666;padding:2px;">
								<div style="background-color:#f3f3f3;height:100%;" class="text-center">
									<div class="btn btn-default" style="margin-top:58px;" data-imageid="" data-target="#imageChooserModal" data-toggle="modal">
									<span class="glyphicon glyphicon-picture"></span> Add Image
									</div>
								</div>
							</div>
							<div class="imageSelectedBox" style="border:1px solid #666;padding:2px;display:none;">
								<div style="background-color:#f3f3f3;" class="text-center">
									<div style="position:relative;">
										<div style="width:100%;position:absolute;padding:4px;color:#fff;bottom:0px;">
											<div class="btn btn-danger" id="removeImgBtn"><span class="glyphicon glyphicon-remove"></span> Remove</div>
										</div>
										<img src="" alt="" style="height:150px;" class="img-responsive center-block">
									</div>
								</div>
							</div>
							<input type="hidden" name="image" id="imageurl" value="">
						</div>
						</div>
					</div>
					<div class="col-sm-2" style="margin-bottom:10px">
									
					</div>
					
				</div>
					
				<div class="row" style="margin-top:10px;">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row" id="update_commition_main_container" style="border: 1px solid #0F0;padding-top: 30px;padding-bottom: 30px;display:none;">
		<div class="col-sm-12">
			<form id="promocode_submit_form" >
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12" style="margin-bottom:10px">
								<div>Commition</div>
								<input type="number" id="commition" class="form-control" placeholder="Enter Commition" required="required"/>
								<div style="margin-top:20px;">Extra Charge</div>
								<input type="number" id="extra_charge" class="form-control" placeholder="Enter Extra Charge" required="required" />
								<div style="margin-top:20px;">User Id</div>
								<input type="text" id="userid_update" class="form-control" placeholder="Enter Userid" required="required" />
								<div style="margin-top:20px;">Password</div>
								<input type="text" id="password_update" class="form-control" placeholder="Enter Password" required="required" />
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						
					</div>
				</div>	
				<div class="row" style="margin-top:10px;">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-save"></span> Update</button>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</form>
		</div>	
	</div>
	<div class="row wmd-view-topscroll" style="z-index: 0; width: 200%; border: 1px solid #0F0;padding-bottom: 30px;">
		<div class="col-sm-12" style="">
			<div class="row" style=" z-index: -1;background-color:#333;color: #FFF;padding: 5px;margin-bottom: 10px;">
					<div class="col-sm-1 text-center" >
						Promocode
					</div>
					<div class="col-sm-1 text-center">
						Tag
						
						
					</div>
					<div class="col-sm-2 text-center">
						Details
						
					</div>
					<div class="col-sm-1 text-center">
						Maximum Use
						
					</div>
					<div class="col-sm-1 text-center">
						Discount %
						
					</div>
					<div class="col-sm-1 text-center">
						Discount Value
						
					</div>
					<div class="col-sm-1 text-center">
						Start Date
						
					</div>
					<div class="col-sm-1 text-center">
						End Date
						
					</div>
					<div class="col-sm-1 text-center">
						IsGloble
						
					</div>
					<div class="col-sm-1 text-center">
						IsActive
						
					</div>
			</div>	
			<?php foreach ($promocodes as $index => $row):?>
				
				<?php if($index%2 == 0) {?>
				<div class="row" id="promo_container<?=$row['id']?>" style="background-color: #fff;padding-top: 5px;padding-bottom: 5px;">
				<?php } else { ?>
					<div class="row" id="promo_container<?=$row['id']?>" style="background-color: #DDD;padding-top: 5px;padding-bottom: 5px;">
				<?php } ?>
				
					<div class="col-sm-1 text-center"
					>
						<?=$row['coupan_code'];?>
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['tag'];?>
						<?php if(strlen($row['image']) > 0) { ?>	
							<img src="<?=$row['image'];?>" style="height:100px; width:150px;" />
						<?php 	} ?>
						
					</div>
					<div class="col-sm-2 text-center">
						<?=$row['detail'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['max_uses_count'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['discount_percentage'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['discount_amount'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['start_date'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						<?=$row['end_date'];?>
						
					</div>
					<div class="col-sm-1 text-center">
						
						<?php if($row['isGlobel'] == 1) { ?>
							<input type="checkbox" class="isGlobel" data-promocodeId="<?=$row['id']?>"  data-on="Globel" data-off="Not Globel" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
						<?php } else { ?>
							<input type="checkbox" class="isGlobel" data-promocodeId="<?=$row['id']?>" data-on="Globel" data-off="Not Globel"  data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
						<?php } ?>
						
						
					</div>
					<div class="col-sm-1 text-center">
						
						

						<?php if($row['isActive'] == 1) { ?>
							<input type="checkbox" class="isActive" data-promocodeId="<?=$row['id']?>" data-on="Active" data-off="InActive" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
						<?php } else { ?>
							<input type="checkbox" class="isActive" data-promocodeId="<?=$row['id']?>" data-on="Active" data-off="InActive"  data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
						<?php } ?>
						
					</div>
					<div class="col-sm-1 text-center">
						<button type="button" data-containerId="promo_container<?=$row['id']?>"  data-promocodeId="<?=$row['id']?>" class="btn btn-danger delete_btn">Delete</button>
						
					</div>

			</div>	
			<div class="row" style="background-color: #DDD;height: 2px;">
				
			</div>				   

			<?php endforeach; ?>
			
		</div>
	</div>


<!-- image chooser -->	

<div class="modal fade" id="imageChooserModal" tabindex="-1" role="dialog" aria-labelledby="myimgModalLabel" aria-hidden="true">
	   	<div class="modal-dialog modal-lg">
	    	<div class="modal-content" style="border-bottom-left-radius:0px;border-radius:0px;">
	        	<div class="modal-header">
	            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
	                	&times;
	            	</button>
		            <h4 class="modal-title" id="myimgModalLabel">
		               Image Chooser
		            </h4>
	        	</div>
		        <div class="modal-body" style="height:75vh;overflow:auto;" id="galleryScrollView">
		        	<div class="row galleryContainer" id="galleryContainer">
		        	<?php for($i=0;$i>0;$i--): ?>
		        		<div class="col-md-2 col-sm-2 col-xs-2 galleryImgContainer">
		        			<div style="padding:2px;border:1px solid #aaa;">
		        				<img src="http://localhost/iservice/publicuploads/2015/11/thumb_14488655351448865663.jpeg" alt="image" style="height:80px;" class="center-cropped">
		        				<div class="galleryHR"></div>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:1px;">
										<a href="#" target="_blank" class="btn btn-default btn-block btn-xs" style="border-radius:0px;">
											<i class="fa fa-eye"></i> View
										</a>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:1px;">
										<div class="btn btn-success btn-block btn-xs deleteImageBtn" style="border-radius:0px;" data-imageid="" data-target="#customModal" data-toggle="modal">
											<i class="fa fa-check"></i> Add
										</div>
									</div>
								</div>
		        			</div>
		        		</div>
		        	<?php endfor; ?>
		        	</div>
		        	<div class="row" style="display:none;" id="loadMoreImagesContainer" >
		        		<div class="col-md-12">
		        			<div style="width:100%;border:1px solid #aaa;padding:2px;">
		        				<div style="width:100%;background-color:#e3e3e3;padding:10px;" class="text-center">
		        					<div>
		        						<i class="fa fa-circle-o-notch fa-spin"></i> 
		        						Loading ...
		        					</div>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		        <div class="modal-footer">
		           	<!-- <button type="button" class="btn btn-default" data-dismiss="modal">
		            	Close
		            </button>
		            <button type="button" class="btn btn-danger" id="DeleteImage" data-imageid="-1" >
		               Delete
		            </button> -->
		        </div>
	    	</div>
		</div>
	</div>

