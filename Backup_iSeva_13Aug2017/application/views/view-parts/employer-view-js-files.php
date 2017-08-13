<script type="text/javascript" src="<?=base_url();?>docs/js/xerces_globals.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript">
	$(function(){
       


		
    ADVERTISEMENT_NAMESPACE = {};
		ADVERTISEMENT_NAMESPACE.getDomString = function(id,name,username,number,isenable,imagedata){
			var enablecheck = "";
			//var disablestyle = "background-color:#"
			if(isenable == "1")
				enablecheck = " checked ";
				var jobperson = $("#jobperson").val();
				var domString = '';
				if(jobperson==1){
			domString = '<div class="well well-sm sortableitem" id="category-'+id+'">'+
								'<div class="row">'+
									'<div class="col-md-4">'+
										'<div style="width:100%;border:1px solid #fff;">'+
											'<img src="'+imagedata.imageurl+'" alt="Image not Available!" class="img-responsive center-block" style="height:150px;">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-6">'+
										'<div style="height:150px;background-color:#aaa;width:1px;position:absolute;right:0px;">&nbsp;</div>'+
										
										'<hr>'+
										'<b>Name  </b><i>'+name+'</i>'+
										'<br>'+
										'<b>Number </b><i>'+number+'</i>'+
										'<br>'+
										'<b>Username </b><i>'+username+'</i>'+
										'<br>'+
										/*'<b>Total views : </b><i>3174 Views</i>'+*/
									'</div>'+
									'<div class="col-md-2 col-sm-2 col-sm-2">'+
										/*'<div class="btn btn-default btn-block sortablehandle">'+
											'<span class="glyphicon glyphicon-move"></span> Move'+
											'<span class="label label-info pull-right " id="sortorderlabel-'+catid+'" >'+sortorder+'</span>'+
										'</div>'+*/
										/*'<div class="btn btn-danger btn-block" style="margin-bottom:5px;">'+
											'<span class="glyphicon glyphicon-remove"></span> Delete'+
										'</div>'+*/
										//'<div class="btn btn-default btn-block">'+
										//	'<span class="glyphicon glyphicon-remove"></span> Disable'+
										//'</div>'+
										
										'<input type="checkbox" name="" value="'+id+'" id="'+id+'" class="bootstraptogglebtn" '+enablecheck+' data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger" onchange=setDisablenable('+id+')>'+
										/*'<a href="'+xb_global_namespace.baseurl+'category/'+catid+'" class="btn btn-default btn-block" style="margin-top:5px;">'+
											'<span class="glyphicon glyphicon-eye-open"></span> View'+
										'</a>'+*/
									'</div>'+
									'<div class="col-md-2 col-sm-2 col-sm-2" style="margin-top:20px">'+
									'<input data-empid="'+id+'" type="button" name="" value="Delete" id="'+id+'" class="btn btn-danger remove_fields form-control"  data-target="#customModal" data-toggle="modal">'+
									'</div>'+
								'</div>'+
							'</div>';
							}else{
							//employer view hide delete button
							
							domString = '<div class="well well-sm sortableitem" id="category-'+id+'">'+
								'<div class="row">'+
									'<div class="col-md-4">'+
										'<div style="width:100%;border:1px solid #fff;">'+
											'<img src="'+imagedata.imageurl+'" alt="Image not Available!" class="img-responsive center-block" style="height:150px;">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-6">'+
										'<div style="height:150px;background-color:#aaa;width:1px;position:absolute;right:0px;">&nbsp;</div>'+
										
										'<hr>'+
										'<b>Name  </b><i>'+name+'</i>'+
										'<br>'+
										'<b>Number </b><i>'+number+'</i>'+
										'<br>'+
										'<b>Username </b><i>'+username+'</i>'+
										'<br>'+
										/*'<b>Total views : </b><i>3174 Views</i>'+*/
									'</div>'+
									'<div class="col-md-2 col-sm-2 col-sm-2">'+
										/*'<div class="btn btn-default btn-block sortablehandle">'+
											'<span class="glyphicon glyphicon-move"></span> Move'+
											'<span class="label label-info pull-right " id="sortorderlabel-'+catid+'" >'+sortorder+'</span>'+
										'</div>'+*/
										/*'<div class="btn btn-danger btn-block" style="margin-bottom:5px;">'+
											'<span class="glyphicon glyphicon-remove"></span> Delete'+
										'</div>'+*/
										//'<div class="btn btn-default btn-block">'+
										//	'<span class="glyphicon glyphicon-remove"></span> Disable'+
										//'</div>'+
										
										'<input type="checkbox" name="" value="'+id+'" id="'+id+'" class="bootstraptogglebtn" '+enablecheck+' data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger" onchange=setDisablenable('+id+')>'+
										/*'<a href="'+xb_global_namespace.baseurl+'category/'+catid+'" class="btn btn-default btn-block" style="margin-top:5px;">'+
											'<span class="glyphicon glyphicon-eye-open"></span> View'+
										'</a>'+*/
									'</div>'+
									
								'</div>'+
							'</div>';
							}
			return domString;
		};


      

    setDisablenable = function(id){
        	
        	var isenable;
        	/*var check = document.getElementById(id);
        	if(check && check.checked){
        		 isactive = 1;
        	}*/
        	/*if(document.getElementById(id).checked){
                isactive = 1;
        	}else{
        		 isactive = 0;
        	}*/
                var jobperson = $("#jobperson").val();
        	var x=$("#"+id).is(":checked");
        	console.log("call checkbox",id);
        	if(x==true){
                isenable = 1;
        	}else{
        		 isenable = 0;
        	}
        	
        	$.ajax({                
					async:true,
					type:'POST',
					dataType:'json',
					url:xb_global_namespace.baseurl+"admin_requests/businessextra/setactivemployer",
					data:{
						"id":id,
						"isenable":isenable,
						"jobperson":jobperson
						
					},
					success:function(datarecieved,textStatus,jqXHR)
					{
						console.log(datarecieved);
						if(datarecieved['status'] == 'login')
						{
							//$('#loadMoreImagesContainer').css('display','none');
							

						}
						else if(datarecieved['status'] == 'notlogin')
						{
							$(location).attr('href',$(location).attr('href'));
						}
					},
					error:function(jqXHR,textStatus,errorThrown)
					{
						$("#loading_bar").css("display","none");	
						console.log(jqXHR,textStatus,errorThrown);
					}
				});
        }
        
       $('#customModal').modal({
                keyboard: true,
                backdrop: "static",
                show:false
				}).on('show.bs.modal',function(event){
						
				var _this = $(event.relatedTarget);
				var empid= _this.data('empid');
				console.log(empid);
						
				var modal = $(this);
				modal.find('#Deletemployer').data("empid",empid);
				modal.find('.modal-body').text('This will delete forever !');
				modal.find('#Deletemployer').show();
				$('#customModal').find('[data-dismiss="modal"]').show();
				modal.find('#Deletemployer').text("Delete");
		});
        $('#Deletemployer').on('click',function(){
                        console.log("click");
			var _this = $(this);
			$('#customModal').find('.modal-body').text('');
			$('#customModal').find('#Deletemployer').hide();
			$('#customModal').find('[data-dismiss="modal"]').hide();
			$('#customModal').find('.modal-body').append('<i class="fa fa-spinner fa-pulse"></i> Deleting... ');
			var empid = _this.data('empid');
			var jobperson = $("#jobperson").val();
			console.log(jobperson);
			$.ajax({
					type:'POST',
					async:true,
					dataType:"json",
					data:{
							"id":empid ,
							"jobperson":jobperson
						},
					url:xb_global_namespace.baseurl+"admin_requests/businessextra/deletemployee",
					success: function(datareceived, textStatus, jqXHR)
					{
						console.log(datareceived);
						$('#customModal').modal('hide');

						if(datareceived['status'] == 'login')
						{
							domString = "";
							$.each(datareceived['data'], function(index,val) {
								ADVERTISEMENT_NAMESPACE.loadAd(); 
							});
							
						}
						else if(datareceived['status'] == 'notlogin')
						{
							$(location).attr('href',$(location).attr('href'));
						}
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						console.log(jqXHR , "\n" , textStatus , "\n" , errorThrown);
						$('#customModal').modal('hide');
					}
				});
		});	


	
	

		/*ADVERTISEMENT_NAMESPACE.loadAdver = function(){
			
            $('#newsContainerColumn').empty();
			$.ajax({                
						async:true,
						type:'POST',
						dataType:'json',
						url:xb_global_namespace.baseurl+"admin_requests/businessextra/get",
						data:{
							"userid":0,
							//"isenable":1
						},
						success:function(datarecieved,textStatus,jqXHR)
						{
							console.log(datarecieved);
							if(datarecieved['status'] == 'login')
							{
								var data = datarecieved['data'];
								$.each(data, function(index, val) {
									$(ADVERTISEMENT_NAMESPACE.getDomString(val.id,val.des,val.userid,val.expirydatetime,val.publishdatetime,val.isnable,val.image)).hide().appendTo('#newsContainerColumn').fadeIn('slow',function() {});
								});
								$('.bootstraptogglebtn').bootstrapToggle();
							}
							else if(datarecieved['status'] == 'notlogin')
							{
								$(location).attr('href',$(location).attr('href'));
							}
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							$("#loading_bar").css("display","none");	
							console.log(jqXHR,textStatus,errorThrown);
						}
					});

		}*/

/*ADVERTISEMENT_NAMESPACE.loadAdver();

*/		
//ADVERTISEMENT_NAMESPACE.loadAd();




$('#catselectid').on('change',function(e){
			var _this = $(this);
			console.log(_this.val());
			$('#newsContainerColumn').empty();
			ADVERTISEMENT_NAMESPACE.loadAd();

			});
$('#cityselectid').on('change',function(e){
			var _this = $(this);
			console.log(_this.val());
			$('#newsContainerColumn').empty();
			ADVERTISEMENT_NAMESPACE.loadAd();

			});

$('#jobperson').on('change',function(e){
			var _this = $(this);
			console.log(_this.val());
			var jobperson = $("#jobperson").val();
			if(jobperson==1){
			  document.getElementById("catselectid").style.display = "block";
			  document.getElementById("cityselectid").style.display = "block";
			}else{
			 //$("#catselectid").disabled = false;
			  document.getElementById("catselectid").style.display = "none";
			  document.getElementById("cityselectid").style.display = "none";
			   //$("#cityselectid").disabled = false;
			}
			
			$('#newsContainerColumn').empty();
			ADVERTISEMENT_NAMESPACE.loadAd();

			});
				ADVERTISEMENT_NAMESPACE.loadAd = function(){
									$('#newsContainerColumn').empty();
									
									//console.log("fileter:",USER_NAMESPACE.filter);
									var cityid = 0;
									var catid = 0;
									var jobperson = $("#jobperson").val();
								        catid = $("#catselectid").val();
									 cityid = $("#cityselectid").val();
									var postData = [];
			
									if(jobperson==1){
									   postData.push({"name":"jobperson","value":jobperson});
			                                                   postData.push({"name":"catid","value":catid});
			                                                   postData.push({"name":"cityid","value":cityid});
									}else
									postData.push({"name":"jobperson","value":jobperson});
									
									
									console.log("postData:",postData);
									$.ajax({                
											async:true,
											type:'POST',
											dataType:'json',
											url:xb_global_namespace.baseurl+"admin_requests/businessextra/getemployee",
											data:postData,
											success:function(datarecieved,textStatus,jqXHR)
											{
												console.log(datarecieved);
												if(datarecieved['status'] == 'login')
												{
													//$('#loadMoreImagesContainer').css('display','none');
													data = datarecieved['data'];
													$('#merchantcontainer').empty();
													$.each(data, function(index, val) {
														//console.log(val);
														$(ADVERTISEMENT_NAMESPACE.getDomString(val.id,val.name,val.username,val.number,val.isactive,val.image)).hide().appendTo('#newsContainerColumn').fadeIn('1000', function() {});
													});
													$('.bootstraptogglebtn').bootstrapToggle();

												}
												else if(datarecieved['status'] == 'notlogin')
												{
													$(location).attr('href',$(location).attr('href'));
												}
											},
											error:function(jqXHR,textStatus,errorThrown)
											{
												$("#loading_bar").css("display","none");	
												console.log(jqXHR,textStatus,errorThrown);
											}
										});
								}

								//ADVERTISEMENT_NAMESPACE.loadAd();




			$('#newsContainerColumn').empty();
			ADVERTISEMENT_NAMESPACE.loadAd();

			});
</script>