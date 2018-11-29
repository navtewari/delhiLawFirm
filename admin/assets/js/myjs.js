$(function(){
	$( window ).on( "load", function(){
		$('#members_here').change();
		$('#files_here').change();
	});
	$('#frmMemberProfile').submit(function(e){
		e.preventDefault();
		url_ = site_url_ + "/admin/submitmember";
		data_ = new FormData($(this)[0]);

		$('#_msg_').html('<span>Loading <img src="'+base_path+'/assets/img/load.GIF" width="10" /></span>');

		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			async: false,
	        cache: false,
	        contentType: false,
	        processData: false,
			success: function(data){
				var obj = JSON.parse(data);
				$('#_msg_').html(obj.msg);
				$('#profile_submit').attr('class','form-control btn btn-info btn-fill pull-right');
				$('#profile_cancel').removeAttr('disabled');
				$('#profile_cancel').click();
				$('.changecolor').css('color', '#000000');
				$('#members_here').change();
			}, error: function(xhr, status, error){
				$('#_msg_').html(xhr.responseText);
				//$('#_msg_').html("<span style='color: #0000ff'>X: Please try again !!</span>");
	        }	
	    });
	return false;
	});
	
	$('#members_here').change(function(){
		url_ = site_url_ + '/admin/get_members';
		
		$.ajax({
			type: 'POST',
			url: url_,
			success: function(data){
				var obj = JSON.parse(data);
				var str_html = '';
				str_html = str_html + '';
				var len__ = obj.print_members.length;

				for(i=0; i<len__; i++){
					str_html = str_html + '<tr id="callme_'+obj.print_members[i].MID+'" style="display: table-row">';
                    str_html = str_html + '<td><img src="'+base_path+'/assets/memberpics/'+obj.print_members[i].PHOTO_+'" width="50" /></td>';
                    str_html = str_html + '<td>'+obj.print_members[i].NAME_+'</td>';
                    str_html = str_html + '<td>'+obj.print_members[i].EXPERIENCE+'</td>';
                    str_html = str_html + '<td>'+obj.print_members[i].EXPERT_AREA+'</td>';
                    str_html = str_html + '<td>'+obj.print_members[i].CONTACT_DETAIL+'</td>';
                    str_html = str_html + '<td>'+obj.print_members[i].EMAIL_+'</td>';
                    str_html = str_html + '<td>';
                    if(obj.print_members[i].CV_ != 'no-file') {
                    str_html = str_html + '<a href="'+base_path+'assets/membercv/'+obj.print_members[i].CV_+'" target="_blank"><span style="font-size: 25px" class="pe-7s-paperclip"></span></a>';
                    }
                    str_html = str_html + '</td>';
                    str_html = str_html + '<td><a href="#" class="modify" id="edit~'+obj.print_members[i].MID+'"><span style="font-size: 25px" class="pe-7s-tools"></span></a></td>';
                    str_html = str_html + '<td><a href="#" class="modify" id="del~'+obj.print_members[i].MID+'"><span style="font-size: 25px" class="pe-7s-delete-user"></span></td>';
                	str_html = str_html + '</tr>';
				}
				$('#members_here').html(str_html);
			}, error(xhr, status, error){
				$('#members_here').html(xhr.responseText);
			}
		});
	});	
	$('body').on('click', '.news_pdf_id', function(){
		var str = this.id;
		var arr_ = str.split('~');
		var pallet_id = "n_"+arr_[1]+"_";
		var url_ = site_url_ + "/Pdf_uploads/deletepdf/"+arr_[1];
		//$('#'+pallet_id).css('display', 'none');
		$('#'+pallet_id).css('visibility', 'hidden');
		$.ajax({
				type: 'POST',
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					callNotification(obj.msg);
				}, error(xhr, status, error){
					callNotification("Server not responding. Please try again.");
				}
			});
		});
	$('body').on('click', '.modify', function(){
		var str = this.id;
		arr_ = str.split('~');
		if(arr_[0] == 'edit'){
			$('#_msg_').html('<span>Loading <img src="'+base_path+'/assets/img/load.GIF" width="10" /></span>');
			$('#condition_').val('edit');
			url_ = site_url_ + '/admin/edit_member/'+arr_[1];
			$.ajax({
				type: 'POST',
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					$('#_msg_').html('');
					$('#txtName_').val(obj.NAME_);
					$('#txtExpertArea').val(obj.EXPERT_AREA);
					$('#txtExperience').val(obj.EXPERIENCE);
					$('#txtContact').val(obj.CONTACT_DETAIL);
					$('#txtEmail').val(obj.EMAIL_);
					//$('#txtBriefDesc_').val(obj.BRIEF_DESC_); is converted into markItUp
					$('#markItUp').val(obj.BRIEF_DESC_);
					
					$('.changecolor').css('color', '#FF4D00');
					$('#profile_submit').attr('class','form-control btn btn-danger btn-fill pull-right');
					$('#profile_cancel').attr('disabled','disabled');
					$('#txtName_').focus();

				}, error(xhr, status, error){

				}
			});
		} else {
			$('#condition_').val('del');
			url_ = site_url_ + '/admin/del_member/'+arr_[1];
			s = confirm('Are you sure for deleting a member?');
			if(s===true){
				$.ajax({
					type: 'POST',
					url: url_,
					success: function(data){
						var obj = JSON.parse(data);
						$('#callme_'+arr_[1]).css('visibility','hidden');
						//$('#callme_'+arr_[1]).css('display','none');
						callNotification(obj.msg);
					}, error(xhr, status, error){
						$('#members_here').html(error);
					}
				});
			}
		}
		$('#MID_modify').val(arr_[1]);
		//$('#members_here').change();
	});
	$('#frmFileUpload').submit(function(e){
		e.preventDefault();
		url_ = site_url_ + "/pdf_uploads/file_upload";
		data_ = new FormData($(this)[0]);

		$('#message_').html('<span>Loading <img src="'+base_path+'/assets/img/load.GIF" width="10" /></span>');
		$('#files_here').html('<span>Loading <img src="'+base_path+'/assets/img/load.GIF" width="10" /></span>');
		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			async: false,
	        cache: false,
	        contentType: false,
	        processData: false,
	        xhr: function() {
		        var xhr = $.ajaxSettings.xhr();
		        xhr.upload.onprogress = function(e) {
		        	complete = Math.floor(e.loaded / e.total *100) + '%';
		        	$('#message_').html(complete);	
		            console.log(complete);
		        };
		        return xhr;
		    },
			success: function(data){
				var obj = JSON.parse(data);
				$('#message_').html(obj.msg);
				$('#myfile').val('');
				$('#files_here').change();
			}, error: function(xhr, status, error){
				$('#message_').html(xhr.responseText);
	        }	
	    });
	return false;
	});

	$('#files_here').change(function(){
		url_ = site_url_ + "/pdf_uploads/get_files";
		$('#files_here').html('<span>Loading <img src="'+base_path+'/assets/img/load.GIF" width="10" /></span>');
		$.ajax({
			type: 'POST',
			url: url_,
			success: function(data){
				var obj = JSON.parse(data);
				var str_html = '';
				var len_ = obj.length;
				for(i=0; i<len_;i++){
					if(obj[i].PATH_ != 'no-image.png'){
						str_html = str_html + '<div class="col-md-4" style="width: auto; padding: 0px; margin:0px 0px 10px 10px; border:#f0f0f0 solid 0px" id="n_'+obj[i].PDFID+'_">';
						str_html = str_html + '<div style="float: left; border:#000000 solid 0px; padding: 0px; height: 30px; text-align:left">'
						str_html = str_html + '<div class="w3read">';
						str_html = str_html + '<a href="'+base_path+'assets/newspaper/'+obj[i].PATH_+'" target="_blank" style="background: #800090; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 3px; color: #ffffff">';
						str_html = str_html + 'Download';
						str_html = str_html + '</a>';
						str_html = str_html + '</div>';
						str_html = str_html + '</div>';
						str_html = str_html + '<div style="float: right; border:#000000 solid 0px; height: 30px; text-align:right"><a href="#" class="news_pdf_id" id="NEWS~'+obj[i].PDFID+'"><span class="pe-7s-close-circle" style="font-size: 25px; font-weight: bold"></span></a></div>';
						str_html = str_html + '<div style="clear: both; padding: 0px"></div>'
						str_html = str_html + '<embed src="'+base_path+'assets/newspaper/'+obj[i].PATH_+'" style="width:auto; height:300px; border:#0000ff solid 0px"></embed>';
						str_html = str_html + '</div>';
					}
				}
				$('#files_here').html(str_html);
			}, error: function(xhr, status, error){
				$('#files_here').html(xhr.responseText);
			}
		});
	});
	/*
	$('#txtPhoto').change(function () {
        var file = this.files[0];
        alert(file.size / 1024);
        if (((file.size / 1024) > 200) && ((file.type != 'image/jpeg') || (file.type != 'image/png'))) {
        	msg__ = "Photo should be less than or equals to <b>200KB</b> and only <b>(.jpg or .png file types)</b> are allowed.";
        	$('#txtPhoto').val('');
        	callNotification(msg__+file.type);
        }
    });

	$('#txtCV_').change(function () {
        var file = this.files[0];

        if (((file.size / 1024) > 150) || (file.type != 'application/pdf') || (file.type != 'application/doc') || (file.type != 'application/docx')) {
        	msg__ = "Photo should be less than or equals to 500KB.";
        	callNotification(msg__+file.type);
        }
    });
	*/

    function callNotification(msg__){
    	demo.initChartist();
    	$.notify({
        	icon: 'pe-7s-info',
        	message: msg__,
        },{
            type: 'danger',
            timer: 1000,
        });
    }



    $('#old_pwd').focus(function(){$('#msg_').html('');});
	$('#new_pwd').focus(function(){$('#msg_').html('');});
	$('#new_re-pwd').focus(function(){$('#msg_').html('');});
	
	$('#changepwdbutt').click(function(){
		if($.trim($('#old_pwd').val()) == ''){
			$('#msg_').html("X: Please mention your old password");
		} else if($.trim($('#new_pwd').val()) == ''){
			$('#msg_').html("X: New password should not be left blank.");
		} else if($.trim($('#new_pwd').val()) != $.trim($('#new_re-pwd').val())){
			$('#msg_').html("X: Please confirm the new password correctly.");
		} else {
			url_ = site_url_ + '/c_pwd/changepwd';
			data_ = $('#frm_cpwd').serialize();

			$('#msg_').html('<span style="color: #0000ff">Loading...</span>');
			
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					if(data == "All three chances over."){
						$('#fullform').css({'padding':'20px'});
						$('#fullform').html("Please contact administrator to reset your password.<br /><a href='"+site_url_+"/admin/logout'>Logout</a>");
					} else {
						if(data == 'good'){
							good = '<span style="padding: 5px; border-radius: 5px; background: #00AA00; color: #ffffff;"> Password changed successfully </span><br /><br />[ <a href="'+site_url_+'/admin">Click here login again</a> ]';
							$('#fullform').css({'padding':'20px'});
							$('#fullform').html(good);	
						} else {
							$('#msg_').html(data);
						}
					}
					$('#frm_cpwd')[0].reset();
				}, error(xhr, status, error){
					$('#msg_').html(xhr.responseText);
				}
			});
		}
	});




	// Add markItUp! to your textarea in one line
            // $('textarea').markItUp( { Settings }, { OptionalExtraSettings } );
            $('#markItUp').markItUp(mySettings);



            // You can add content from anywhere in your page
            // $.markItUp( { Settings } );  
            $('.add').click(function() {
                $('#markItUp').markItUp('insert',
                    {   openWith:'<opening tag>',
                        closeWith:'<\/closing tag>',
                        placeHolder:"New content"
                    }
                );
                return false;
            });
            
            // And you can add/remove markItUp! whenever you want
            // $(textarea).markItUpRemove();
            $('.toggle').click(function() {
                if ($("#markItUp.markItUpEditor").length === 1) {
                    $("#markItUp").markItUp('remove');
                    $("span", this).text("get markItUp! back");
                } else {
                    $('#markItUp').markItUp(mySettings);
                    $("span", this).text("remove markItUp!");
                }
                return false;
            });
});