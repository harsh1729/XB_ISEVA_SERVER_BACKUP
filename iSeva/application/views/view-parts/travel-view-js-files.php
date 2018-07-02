<script src="<?=base_url();?>plugins/dropzone/js/dropzone.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>docs/js/xerces_globals.js"></script>
<script>
	
	
	
	
	
	
	$(function(){
        IMAGE_CHOOSER = {};
		IMAGE_CHOOSER.totalcount = 0;
		IMAGE_CHOOSER.lastimageid = 0;
		IMAGE_CHOOSER.myinfinitescroll = {};
		IMAGE_CHOOSER.myinfinitescroll.scrollEnable = true;	
		IMAGE_CHOOSER.myinfinitescroll.scrollBusy = false;	// is there any ongoing ajax request
		IMAGE_CHOOSER.myinfinitescroll.loadBefore = 100; // load this much pixel before the scrollbar reaches to end!

		$("#galleryScrollView").scroll(function(event)
		{
			//console.log(event);
			if(
				IMAGE_CHOOSER.myinfinitescroll.scrollEnable && 
				!IMAGE_CHOOSER.myinfinitescroll.scrollBusy && 
				$("#galleryContainer").height() - $("#galleryScrollView").height() - IMAGE_CHOOSER.myinfinitescroll.loadBefore <= $("#galleryScrollView").scrollTop() )
				{
					//console.log("*********************************************************");
					$('#loadMoreImagesContainer').css('display','block');
					IMAGE_CHOOSER.loadImages();
					//HOME_VIEW_NAMESPACE.myinfinitescroll.scrollBusy = true;
					//HOME_VIEW_NAMESPACE.load_news($('#categoryId').val(),$('#fromDate').val(),$('#toDate').val(),"old");
				}
		});

		IMAGE_CHOOSER.loadImages = function(){
			$.ajax({                
					async:true,
					type:'POST',
					dataType:'json',
					//url:"<?=base_url('admin_requests/news/get_news')?>",
					url:xb_global_namespace.baseurl+"admin_requests/gallery/get_images",
					data:{
						"lastimageid":IMAGE_CHOOSER.lastimageid
					},
					success:function(datarecieved,textStatus,jqXHR)
					{
						console.log(datarecieved);
						if(datarecieved['status'] == 'login')
						{

							IMAGE_CHOOSER.myinfinitescroll.scrollBusy = false;
							$('#loadMoreImagesContainer').css('display','none');
							data = datarecieved['data'];
							$.each(data, function(index, val) {
								IMAGE_CHOOSER.lastimageid = val.id;
								$(IMAGE_CHOOSER.getImageChooserDomString(val.imageurl,val.thumburl,val.imagename,val.id)).hide().appendTo('#galleryContainer').fadeIn('1000', function() {});
							});
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
		};

		$('#imageChooserModal').modal({
                keyboard: true,
                backdrop: "static",
                show:false
				}).on('show.bs.modal',function(event){	
					//var _callerthis = $(event.relatedTarget);

					$('#loadMoreImagesContainer').css('display','block');
					IMAGE_CHOOSER.loadImages();
		});

		IMAGE_CHOOSER.getImageChooserDomString = function(imageurl,thumburl,imagename,imageid){
			var domString = '<div class="col-md-2 col-sm-2 col-xs-2 galleryImgContainer">'+
				        			'<div style="padding:2px;border:1px solid #aaa;">'+
				        				'<img src="'+imageurl+'" alt="image" style="height:80px;" class="center-cropped">'+
				        				'<div class="galleryHR"></div>'+
										'<div class="row">'+
											'<div class="col-md-6 col-sm-6 col-xs-6" style="padding-right:1px;">'+
												'<a href="'+imageurl+'" target="_blank" class="btn btn-default btn-block btn-xs" style="border-radius:0px;">'+
													'<i class="fa fa-eye"></i> View'+
												'</a>'+
											'</div>'+
											'<div class="col-md-6 col-sm-6 col-xs-6" style="padding-left:1px;">'+
												'<div class="btn btn-success btn-block btn-xs addImageBtn" style="border-radius:0px;" data-imageid="'+imageid+'" data-imageurl="'+imageurl+'" data-thumburl="'+thumburl+'" data-imagename="'+imagename+'">'+
													'<i class="fa fa-check"></i> Add'+
												'</div>'+
											'</div>'+
										'</div>'+
				        			'</div>'+
				        		'</div>';
			return domString;
		};


		$(document).on('click', '.addImageBtn', function(event) {
			//event.preventDefault();
			var _this = $(this);
			$('#imageChooserModal').modal('hide');
			$('#imageSelectorField>div.imageSelectBox').hide();

			$('#imageSelectorField>div.imageSelectedBox').find('img').attr("src",_this.data('imageurl'));
			$('#imageSelectorField').find('#imageurl').val(_this.data('imageurl'));
			$('#imageSelectorField>div.imageSelectedBox').show();
			/*console.log("Imageid",_this.data('imageid'));
			console.log("Imageurl",_this.data('imageurl'));
			console.log("thumburl",_this.data('thumburl'));
			console.log("imagename",_this.data('imagename'));*/
		});

		$(document).on('click', '#removeImgBtn', function(event) {
			$('#imageSelectorField>div.imageSelectedBox').hide();
			$('#imageSelectorField').find('#imageurl').val("");
			$('#imageSelectorField>div.imageSelectBox').show();
		});

	
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    flag_promo = 0;
    flag_comm = 0;

    $( function() {
    $( "#start_date" ).datepicker();
    $( "#end_date" ).datepicker();
  } );
   


	$('#addNewPromoBtn').on('click',function(event){
			if(flag_comm == 1)
			{
				$("#update_commition_main_container").css("display", "none");
				$('#addNewCommCancelBtn').hide();
				$('#addNewCommBtn').show();
				flag_comm =0;
			}
			flag_promo = 1;
			$('#add_new_promocode_main_container').slideUp({duration:300,easing:"easeInQuart"}).slideDown('300', function() {
				
			});
			$(this).hide();
			$('#addNewPromoCancelBtn').show();
			
			
		});
		$('#addNewPromoCancelBtn').on('click',function(event){
			flag_promo = 0;
			$('#add_new_promocode_main_container').slideUp({duration:300,easing:"easeInQuart"}).slideUp('300',function(){
				
			});
			$(this).hide();
			$('#addNewPromoBtn').show();
			
			
		});

	$('#addNewCommBtn').on('click',function(event){
			if(flag_promo ==1)
			{
				$("#add_new_promocode_main_container").css("display", "none");
				$('#addNewPromoCancelBtn').hide();
				$('#addNewPromoBtn').show();
				flag_comm =0;
			}
			
			flag_comm = 1;
			$('#update_commition_main_container').slideUp({duration:300,easing:"easeInQuart"}).slideDown('300', function() {
				
			});
			$(this).hide();
			$('#addNewCommCancelBtn').show();
			
			
		});
		$('#addNewCommCancelBtn').on('click',function(event){
			flag_comm = 0;
			$('#update_commition_main_container').slideUp({duration:300,easing:"easeInQuart"}).slideUp('300',function(){
				
			});
			$(this).hide();
			$('#addNewCommBtn').show();
			
			
		});
		
		$('.delete_btn').on('click',function(event){

			
			promo_id = $(this).attr("data-promocodeId");
			container_id = $(this).attr("data-containerId");
			
			
			$('<div></div>').appendTo('body')
    .html('<div><h6>Are you sure to delete promocode ?</h6></div>')
    .dialog({
        modal: true,
        title: 'Alert',
        zIndex: 10000,
        autoOpen: true,
        width: '400',
        resizable: false,
        buttons: {
            Yes: function () {
               	
            	delete_promoc(promo_id,container_id);
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


function delete_promoc(promo_id,container_id)
{
	$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/delete')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/promocode/change_active",
						data:{
								
								"id":promo_id,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							if(datareceived == "success")
							{
								$("#"+container_id).css("display","none");
							}
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
}


		$('.isGlobel').change(function() {

			local_globle = $(this).prop('checked');
			promo_id = $(this).attr("data-promocodeId");
			if(local_globle == true)
			{
					local_globle = 1;
			}
			else
			{
				local_globle = 0;
			}
			
				$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/change_globle')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/Promocode/change_globle",
						data:{
								"isGlobel":local_globle,
								"id":promo_id,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
		});

		

		$('.isActive').change(function() {

			local_active = $(this).prop('checked');
			promo_id = $(this).attr("data-promocodeId");
			if(local_active == true)
			{
					local_active = 1;
			}
			else
			{
				local_active = 0;
			}
				$.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/change_active')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/promocode/change_active",
						data:{
								"isActive":local_active,
								"id":promo_id,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
		});

		function change_date(date)
		{
				var month = date.substring(0,2);
				var day = date.substring(3,5);
				var year = date.substring(6,10);

				return year+"-"+month+"-"+day; 
		}	
		
	$(document).ready(function(){ 
		$("#promocode_submit_form").on("submit",function(event){
            var promo_no =$('#promocode_no').val();
            var promo_tag =$('#promocode_tag').val();
            var promo_detail=$('#promocode_details').val();

            var promo_amount_percentage = $('#promocode_amount_percentage').val();
            var promo_amount =  $('#promocode_amount').val();

            var max_count = $('#max_uses_count').val() ;
            var start_date = $('#start_date').val();
             var end_date = $('#end_date').val();
	var imageurl = $('#imageurl').val();
             var current_full_date = new Date();
             var twoDigitMonth = ((current_full_date.getMonth().length+1) === 1)? (current_full_date.getMonth()+1) : '0' + (current_full_date.getMonth()+1);

             var current_date = twoDigitMonth+"/"+current_full_date.getDate()+"/"+current_full_date.getFullYear();

             if(new Date(current_date) <= new Date(start_date))
             {
             		 if(new Date(start_date) < new Date(end_date))
				{	
					start_date = change_date(start_date);
           			 end_date = change_date(end_date);
				}
				else
				{
					alert("Start date can not be small from end date");
					return false;
				}
             }
             else
             {
             	alert("Start date can not be small from current date");
					return false;
             }
           
            
           
           


           
          
	            $.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/add_promocode')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/gcm/send_notification",
						data:{
								"promocode":promo_no,
								"promo_tag":promo_tag,
								"promo_detail":promo_detail,
								"promo_amount":promo_amount,
								"promo_amount_percentage":promo_amount_percentage,
								"max_count":max_count,
								"start_date":start_date,
								"end_date":end_date,
								"imageurl":imageurl,
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							console.log(datareceived);
							
							alert(datareceived);
							location.reload();
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	        
					event.preventDefault();
			
		});
	});


	$(document).ready(function(){ 
		$("#update_commition_main_container").on("submit",function(event){
            var commition =$('#commition').val();
            var extra_charge = $('#extra_charge').val();
            var password = $('#password_update').val();
            var userid = $('#userid_update').val();
           

            $.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/update_commition')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/gcm/send_notification",
						data:{
								"commition":commition,
								"extra_charge":extra_charge,
								"password":password,
								"userid":userid,
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
							if(datareceived.success == 1)
							{
								console.log(datareceived);
								alert(datareceived.message);
							 	$('#commition').val(datareceived.commition);
							 	$('#extra_charge').val(datareceived.extra_charge);
            				
								
							}
							
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	        
					event.preventDefault();
			
		});
	});
	
	
	
	
	 $.ajax({
						type:'POST',
						async:true,
						dataType:'json',
						url:"<?=base_url('admin_requests/promocode/get_commition_echarge')?>",
						//url:xb_global_namespace.baseurl+"admin_requests/gcm/send_notification",
						data:{
								
								
						},
						success:function(datareceived,textStatus,jqXHR)
						{
								console.log(datareceived);
								
							 	$('#commition').val(datareceived.commition);
							 	$('#extra_charge').val(datareceived.extra_charge);
							 	$('#password_update').val(datareceived.password);
							 	$('#userid_update').val(datareceived.username);
            				
								
						
							
							
						},
						error:function(jqXHR,textStatus,errorThrown)
						{
							console.log(jqXHR,textStatus,errorThrown);
						}
					});
	        
				

</script>