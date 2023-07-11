$(function () {
	$("#login_form").bind('submit',function(e){
	e.preventDefault();	   
	  	$.ajax({
	        type:"POST",
	        url:'././controller/user_login.php',
	        data:$('#login_form').serialize(),
	        success:function(result){				        	
	        	return false;    
	        }
        });
		 
	});
});