$(document).ready(function(){
	
	//image uplaod temp view
$("#logo").change(function() {
		
	//var v=$("#icon").val();
$(".img-preview-logo").text('Loading...');
		
		$(".upload-msg-logo").empty(); 
	var file = this.files[0];
	var imagefile = file.type;
	var imageTypes= ["image/jpeg","image/png","image/jpg"];
		if(imageTypes.indexOf(imagefile) == -1)
		{
			$(".img-preview-logo").empty(); 
			$(".upload-msg-logo").html("<span class='msg-error'>Please Select A valid Image File</span><br /><span>Only jpeg, jpg and png Images type allowed</span>");
			return false;
		}
		else
		{
			var reader = new FileReader();
			reader.onload = function(e){
				$(".img-preview-logo").html('<img style="height:100px;width:150px"src="' + e.target.result + '" />');				
			};
			reader.readAsDataURL(this.files[0]);
		}
		
	});
//delete entry	common to all
	$('.confirmModal_del').click(function(){
		 
		var url=baseurl+'delete_entry';
		var tb=$(this).attr('data-table');
		var id=$(this).attr('data-id');
		var field=$(this).attr('data-field');
		$('#confirm_content_del').confirmModal({
			topOffset: 0,
			onOkBut: function() {
				
				
	    $.ajax({
        url: url,
        type: 'POST',
		 method: 'POST',
        data: {
			action:'delete',
               table_name: tb,
			   id:id,
			   col:field
                },
        
                async: false,
        success: function (response) {
			
			
			
                    $('#'+id).hide();
				   $('.del_res').html(response);
		        },
        error: function (xhr, desc, err)
        {
            console.log("error");

        }
    }); 
				
				
				
			},
			onCancelBut: function() {},
			onLoad: function() {},
			onClose: function() {}
		});
	});
	

//view detail
	
$('.detailview').click(function(e) {
	
	var url=baseurl+'view_details_form';
	//var url='http://www.cost2build.co.uk/admin/view_details_form';
var table=$(this).attr('data-table'); 
var id=$(this).attr('data-id'); 


if(id){
	$.ajax({
        url: url,
        type: 'POST',
		 method: 'POST',
		
        data: {
			action:'view_details',
              table_name: table,
			   id:id,
                },
        
                async: false,
        success: function (response) {
			//alert(response);
			   $('#overlay').show();
			   $('#popup').show();
			$('.popupcontent .col-md-12').html(response);
			
              
				  
		  },
        error: function (xhr, desc, err)
        {
            console.log(err);

        }
    }); 
 }	


});	
	
//change status
	$('.confirmModal_status').click(function(){
		
		var url=baseurl+'deal_status_change';
		var tb=$(this).attr('data-table');
		var id=$(this).attr('data-id');
		var sts=$(this).attr('data-status');
		 var slctopt=$("#spc_"+id).val();
		 var useremail=$(this).attr('data-email');
	    var name=$(this).attr('data-name');
		
		$('.confirm_content').confirmModal({
			topOffset: 0,
			onOkBut: function() {
				
				
	    $.ajax({
        url: url,
        type: 'POST',
		 method: 'POST',
        data: {
			action:'update',
               table_name: tb,
			   id:id,
			   status:sts,
			   slctopt:slctopt,
			  usermail:useremail,
			  name:name
                },
        
                async: false,
        success: function (response) {
			
			      $('.del_res').html('');
				   $('.del_res').html(response);
				  $('#add_'+id).removeClass().addClass(slctopt);
				   //$('.stus_chang_'+id).html(status);
				 setTimeout("window.location.reload(true)",3000);
		        },
        error: function (xhr, desc, err)
        {
            console.log("error");

        }
    }); 
				
				
				
			},
			onCancelBut: function() {},
			onLoad: function() {},
			onClose: function() {}
		});
	});	
	
	
	
//perioty
$('#periority').on('change', function() {
   var pr= this.value; // or $(this).val()
   
    $('#perioritychange').val(pr);
   var url=baseurl+'check_periority';
   $.ajax({ 
   url:url,
   type:'POST',
   method:'POST',
   data:{
	   action:'check',
              pr:pr,
   },
     async: false,
        success: function (response) {
			        
				   if(response)
				   {
              $('.del_res').html(response);
             //alert(response);	
       return false ;			 
			    }		
				   
				   
		        },
        error: function (xhr, desc, err)
        {
            console.log("error");

        }
   
   });
});


	//read more read less
	// Configure/customize these variables.
    var showChar = 100;  
    var ellipsestext = "...";
    var moretext = "Show more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
	
	
	
//common for all page editor and date picker
 $(function () {
		  $('#example1').DataTable({
		 "pageLength":5,
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
		
        $('#example2').DataTable({
		 "pageLength":5,
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });

		
		//Date picker
    $('#expdate').datepicker({
      autoclose: true
    });
	$('#reservation').daterangepicker({
    "startDate": "05/26/2017",
    "endDate": "06/01/2017"
}, function(start, end, label) {
  
   $('#contract_end').val(end.format('YYYY-MM-DD'));
});
	

   		$(".select2").select2();
$("#slectall").click(function(){
    if($("#slectall").is(':checked') ){
        $(".select2 > option").prop("selected","selected");
        $(".select2").trigger("change");
    }else{
        $(".select2 > option").removeAttr("selected");
         $(".select2").trigger("change");
     }
});

	CKEDITOR.replace('editor1');
       
        $(".textarea").wysihtml5();
		
		CKEDITOR.replace('editor2');
       	
      });

});

