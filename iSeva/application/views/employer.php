<?=$header;?>

<div class="container-fluid" style="/*padding-bottom:10px;*/ background-color:#fff;">
                <div style="background-color:#CCC;padding-top:10px;padding-bottom:10px;">
					<div class="row" style="">

                          <div class="col-md-2 col-xs-12" style:"margin-left:20px">

                          <select name="jobperson" id="jobperson" class="form-control" autofocus="autofocus" required>
						      						       <option value="1">Employee</option>
						        <option value="0">Employer</option>
					        </select>

                          </div>

                         <div class="col-md-3 col-xs-12">
                         
                         <select name="cityselectid" id="cityselectid" class="form-control" autofocus="autofocus" required>
						      
						      <!--<?php foreach ($category as $index => $row):?>
							   <option value="<?=$row['catid'];?>"><?=$row['name'];?></option>
						       <?php endforeach; ?>-->
						       <option value="0">Choose City</option>
						      	<?php foreach ($city as $index => $row):?>
								   <option value="<?=$row['id'];?>"><?=$row['name'];?></option>
							       <?php endforeach; ?>

					        </select>
                             
 						</div>
		                <div class="col-md-3 col-xs-12">
		                
		                 <select name="catselectid" id="catselectid" class="form-control" autofocus="autofocus" required>
						      
						      <!--<?php foreach ($category as $index => $row):?>
							   <option value="<?=$row['catid'];?>"><?=$row['name'];?></option>
						       <?php endforeach; ?>-->
						       <option value="0">Choose Category</option>
						      	<?php foreach ($category as $index => $row):?>
								   <option value="<?=$row['id'];?>"><?=$row['name'];?></option>
							       <?php endforeach; ?>

					        </select>
                         
						</div>
						

						<div class="col-md-2 col-xs-12">
                       
						</div>

		                <div class="col-md-2 ">
		                	

						

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
<input type="hidden" class="lang_class" />
		<div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	   	<div class="modal-dialog">

	    	<div class="modal-content">

	        	<div class="modal-header">

	            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

	                	&times;

	            	</button>

		            <h4 class="modal-title" id="myModalLabel">

		               Are you Sure ?

		            </h4>

	        	</div>

		        <div class="modal-body">

		        	This will delete Epaper forever !

		        </div>

		        <div class="modal-footer">

		           	<button type="button" class="btn btn-default" data-dismiss="modal">

		            	Close

		            </button>

		            <button type="button" class="btn btn-danger" id="Deletemployer" data-empid="-1">

		               Delete

		            </button>

		        </div>

	    	</div>

		</div>
		</div>