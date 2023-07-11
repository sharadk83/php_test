$(function () {
	$('#register').on('submit', function (e) {
	  e.preventDefault();
	  $.ajax({
	    type: 'post',
	    url: '././controller/register.php',
	    data: $('form').serialize(),
	    success: function (results) {
	            
	      alert('Registration successful, please verify in the registered Email-Id');
	      $('#Signup').modal('hide');
	      window.location = '/html_test/';
	       
	      
	    }
	  });
	});
});