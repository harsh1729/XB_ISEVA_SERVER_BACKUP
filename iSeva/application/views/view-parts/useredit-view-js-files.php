<script type="text/javascript" src="<?=base_url();?>docs/js/xerces_globals.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript">
	//$(function(){

		
		$('#rootcategory').on('change', function(event) {
			
			var _this = $(this);
			console.log(_this.val());
			var rootcategory = _this.val();

			$('#subcategory').empty();

			$.ajax({
				async: true,
				type:'POST',
				dataType:'json',
				url:xb_global_namespace.baseurl+"admin_requests/category/get",
				data:{

						"parentid":rootcategory
					},
				success:function(datareceived,textStatus,jqXHR)
				{
					console.log(datareceived['data'].length);
					if(datareceived['status'] == 'login')
					{
						var domString = "";
						$.each(datareceived['data'],function(key,value){
							if(key == 0)
								domString += "<option value=''>-- Sub Category --</option>";
							domString += "<option value='"+value.catid+"'>"+value.name+"</option>";
						});
						$('#subcategory').append(domString);
						/*if(datareceived['data'].length==0){
							catid = rootcategory;
						}*/
					}
					else if(datareceived['status'] == 'notlogin')
					{$(location).attr('href',$(location).attr('href'));}
				},
				error:function(jqXHR,textStatus,errorThrown)
				{
					console.log(jqXHR,textStatus,errorThrown);
				}
			});
		});
		
		

		//USER_NAMESPACE.loadUsers();


	
	
	$('#update_doctor_form').on('submit',function(event){
			var _this = $(this);
			var id = _this.data('id');
			event.preventDefault();

			/*var doc_city = $('#doctor_address_city').val();
			var clinic_city = $('#hospital_address_city').val();
			if((doc_city == "" || doc_city == null) && (clinic_city == "" || clinic_city == null) )
			{
				alert("please choose city in atleast one address !");
			}
			else
			{*/
				var postData = $(this).serializeArray();
				
				
				//console.log(postData);
				
				tempObj = {"name":"userid","value":id};
				postData.push(tempObj);
				console.log(postData);

				formDataSaved = true;
				$('#loading_bar').css({"display":"inline"});
				$.ajax({
					async: true,
					type:'POST',
					dataType:'json',
					url:xb_global_namespace.baseurl+"admin_requests/user/updateuser",
					data:postData,
					success:function(datareceived,textStatus,jqXHR)
					{
						console.log(datareceived);
						if(datareceived['status'] == 'login')
						{
							alert("succesfully update user.");
							/*_Ddropzone.removeAllFiles();
							_Hdropzone.removeAllFiles();
							_this.find('input,textarea').not('input[type="submit"]').val('');
							_this.find('input:checkbox').removeAttr('checked');
							_this.find('select').prop('selectedIndex',0);
							_this.find('#doctor_address_city,#hospital_address_city').empty();

							formDataSaved = false;
							$('#loading_bar').css({"display":"none"});
							$('html, body').animate({
										scrollTop: $("body").offset().top
									}, 1000);*/
							//alert.()		
							//$(location).attr('href',);
						}
						else if(datareceived['status'] == 'notlogin')
						{$(location).attr('href',$(location).attr('href'));}
					},
					error:function(jqXHR,textStatus,errorThrown)
					{
						console.log(jqXHR,textStatus,errorThrown);
					}
				});
			//}

		});
		//}
	
</script>