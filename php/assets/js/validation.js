$(document).ready(function() {

	$('#submit_contact_form').click(function(e) {
	
		// Stop form submission, validate first
		e.preventDefault();
		
		// Variable declaration
		var empty = false;
		var name = $('#name').val();
		var email = $('#email').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
		var emptyEmail = $('#email_error_empty');
		var emptyMessage = $('#message_error_empty');
		
		// Form field validation
		if(!email) {
			var empty = true;
			emptyEmail.fadeIn();
			emptyEmail.closest('.form-group').addClass('has-error');
		} else {
			emptyEmail.fadeOut();
			emptyEmail.closest('.form-group').removeClass('has-error');
		}
		if(!message) {
			var empty = true;
			emptyMessage.fadeIn();
			emptyMessage.closest('.form-group').addClass('has-error');
		} else {
			emptyMessage.fadeOut();
			emptyMessage.closest('.form-group').removeClass('has-error');
		}		
		
		// Process, if there is no validation error
		if(empty == false) {
		
			// Disable submit button just after the form processed 1st time successfully.
			$('#submit_contact_form').attr({'disabled' : 'true', 'value' : 'Sending..' });
			
			// Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php
			$.post("contactform.php", $("#contactform").serialize(),function(result) {
			//Check the result set from email.php file.
			
			// Server Side Validation
			if(result == 'invalidEmailAddress') {
				$('#email_error_invalid').fadeIn();			
			} else {
				$('#email_error_invalid').fadeOut();			
			
				// if email.php outputs 'sent' show success message
				if(result == 'sent') {
					//Display the success message
					$('#mailsuccess').fadeIn();
					// Enable the submit button again
					$('#submit_contact_form').removeAttr('disabled').attr('value', 'Send');
				} else {
					//Display the error message
					$('#mailfail').fadeIn();
					// Enable the submit button again
					$('#submit_contact_form').removeAttr('disabled').attr('value', 'Send');
				}
			
			}
			
			});
			
		}
	
	});    

});