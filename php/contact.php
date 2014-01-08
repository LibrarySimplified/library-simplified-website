<?php $page_title = "Contact"; include("header.php"); ?>

<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header">Contact</h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Contact</li>
		</ol>
	</div>	
</div>

<iframe id="googlemaps-page-top" width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.de/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Main+Street,+New+York+City&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=Main+St,+New+York,+USA&amp;t=m&amp;z=14&&amp;output=embed&iwloc=near"></iframe>

<div class="container" id="main">

	<h3 class="hr2">We would love to hear from you</h3>	
	<div class="row">	
		<div class="col-sm-6">
			<p class="lead">
				Our qualified support is waiting for you, literally. Ask us anything you want. We will get back to you within 24h, seven days a week.</strong>
			</p>
			<form name="contactform" id="contactform" class="margin-bottom-large" method="post" action="contactform.php">		
				<div class="row">
					<div class="form-group col-md-6">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="" class="form-control" />
					</div>
					<div class="form-group col-md-6">
						<label for="email">Email <span class="text-warning">*</span></label>
						<input type="text" name="email" id="email" placeholder="" class="form-control" />
						<div id="email_error_empty" class="error">Please enter your email address.</div>
						<div id="email_error_invalid" class="error">Please enter a valid email address.</div>
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" name="subject" id="subject" class="form-control" placeholder="" />
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-warning">*</span></label>
					<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder=""></textarea>
					<div id="message_error_empty" class="error">Please enter a message.</div>
					<div id="message_error_invalid" class="error">Please check your message for any errors.</div>
				</div>

				<div id="mailsuccess" class="success">Your message has been sent successfully.</div>
				<div id="mailfail" class="error">Sorry, error occured this time sending your message.</div>
				
				<div class="margin-top-base">
					<input type="submit" id="submit_contact_form" class="btn btn-primary" value="Send">				
					<small class="pull-right text-muted">* required</small>
				</div>
			</form>
		</div>		
		<div class="col-sm-5 col-sm-offset-1 contactinfo">
			<h4 class="invert">Great Company Inc.</h4>
			<address>
				<i class="icon-map-marker"></i> Main Street, New York City, United States<br />
				<i class="icon-envelope"></i> mail@yourcompany.com<br />
				<i class="icon-phone"></i> +1 555 1234 4556<br />
			</address>
			<h5 class="hr2 margin-top-large margin-bottom-base text-muted"><i class="icon-time"></i> Business Hours</h5>
			<p class="lead">
				<span class="color">Mon - Fri:</span> <span class="text-muted">9am to 5pm <em>(EST)</em></span><br />
				<span class="color">Sat:</span> <span class="text-muted">9am to 2pm <em>(EST)</em></span><br />
				<span class="color">Sun:</span> <span class="text-muted">closed</span>
			</p>
			<p class="text-muted">.. don't be shy, get in touch ;-)</p>
		</div>		
	</div>

</div><!-- .container -->

<?php include("footer.php"); ?>