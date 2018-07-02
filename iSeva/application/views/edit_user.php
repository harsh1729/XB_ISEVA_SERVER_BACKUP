<?=$header;?>
<div id="loadingscreen" style="height:700px;width:100%; background-color:rgba(102,102,102,.5); z-index:1100; position:fixed; display:none;">
				<img src="<?=base_url('docs/images/ajax-loader-blue.gif')?>" style="margin-top:18%; margin-left:45%;">
			</div>
			<div class="container-fluid" style="/*padding-bottom:10px;*/ background-color:#fff;">
                <div style="background-color:#CCC;padding-top:10px;padding-bottom:10px;">
					<div class="row" style="">
		                <div class="col-md-4 hidden-xs">
		                	<span><button type="button" class="imeboldbtn btn btn-sm btn-info" title="Bold" style="margin-left:10px;"><b>B</b></button></span>
							<span><button type="button" class="imeitalicbtn btn btn-sm btn-info" title="Italic"><i>I</i></button></span>
							<span><button type="button" class="imeunderlinebtn btn btn-sm btn-info" title="Underline"><u>U</u></button></span>
							<span><button type="button" class="imefontsizebtn btn btn-sm btn-info" title="Text size"><span class="glyphicon glyphicon-signal"></span></button></span>
							<span><button type="button" class="imelinkbtn btn btn-sm btn-info" title="Add Link">li</button></span>
						</div>
						<div class="col-md-3 col-xs-12">
						Edit User
						</div>
		                
		            </div>
				</div>
			</div>
	</div>
</div>
<div class="container-fluid" style="">
	<div class="row">
		<div class="col-md-12">
			<div id="newsContainerColumn" style="overflow:auto;height:auto;border:1px solid #00aa00;padding:5px;">
		<form data-id="<?=$user['id'];?>" action="" method="POST" id="update_doctor_form" >
	<div class="row">
		<div class="col-md-12">
			
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Choose Root Category:
					</div>
					<div class="col-md-5">
						<select style="" id = "rootcategory" name="rootcategory" class="form-control" required="required">
							<option value="">Select Category</option>
							<?php foreach ($user['categories'] as $index => $row):?>
								<option value="<?=$row['catid'];?>" <?=($row['catid'] == $user['parentid'])?'selected':''?> ><?=$row['name'];?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-2"></div>
				</div>
				
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Choose Child Category:
					</div>
					<div class="col-md-5">
						<select style="" id = "subcategory" name="catid" class="form-control" required="required">
							<option value="">Select Category</option>
							<?php foreach ($user['subcategories'] as $index => $row):?>
								<option value="<?=$row['catid'];?>" <?=($row['catid'] == $user['catid'])?'selected':''?> ><?=$row['name'];?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-2"></div>
				</div>
				
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Choose City:
					</div>
					<div class="col-md-5">
						<select style="" name="cityid" class="form-control" required="required">
							<option value="">Select Category</option>
							<?php foreach ($user['cities'] as $index => $row):?>
								<option value="<?=$row['id'];?>" <?=($row['id'] == $user['cityid'])?'selected':''?> ><?=$row['name'];?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-2"></div>
				</div>
				
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Business Name:
					</div>
					<div class="col-md-5">
						<input type="text" value="<?=$user['firmname'];?>" name="fname" id="fname" placeholder="business name" class="form-control lang_class" required="required">
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Contact Number:
					</div>
					<div class="col-md-5">
						<input type="text" value="<?=$user['firmcontact'];?>" name="contact" id="contact" placeholder="Contact Number" class="form-control lang_class" required="required">
					</div>
					<div class="col-md-2"></div>
				</div>
				
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Email:
					</div>
					<div class="col-md-5">
						<input type="email" value="<?=$user['email'];?>" name="email" id="email" placeholder="Email" class="form-control">
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						Address:
					</div>
					<div class="col-md-5">
						<textarea placeholder="Address" name="address" id="address" rows="4" class="form-control lang_class"><?=$user['address'];?></textarea>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top:20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						iSeva:
					</div>
					<div class="col-md-5">
						<textarea placeholder="iSeva" name="services" id="services" rows="10" class="form-control lang_class"><?=$user['services'];?></textarea>
					</div>
					<div class="col-md-2"></div>
				</div>
				
				
				
				
				<div class="row" style="margin-top:40px;margin-bottom:20px;">
					<div class="col-md-5"></div>
					<div class="col-md-2">
						<input type="submit"  class="btn btn-success btn-lg btn-block" value="submit">
					</div>
					<div class="col-md-5"></div>
				</div>
			</form>
		</div>
	</div>
</form>
</div>
</div>
</div>