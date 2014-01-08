<footer id="footer">

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3 class="title"><i class="icon-envelope-alt"></i> Newsletter</h3>
					<span class="lead">We will only send you good stuff. Promise!</span>
				</div>
				<div class="col-md-4">
					<form class="input-group small" method="post" action="">
				    <input type="text" class="form-control" placeholder="Your Email Address" />
				    <div class="input-group-btn">
				      <button class="btn btn-default" type="button">Sign Up <i class="icon-angle-right"></i></button>
				    </div>
				  </form>
				</div>
			</div>
	  </div>
  </div>

	<div class="footer-top">
		<div class="container">
			<div class="row">
			
				<div class="col-md-4">
					<div class="social-networks">
						<a href=""><i class="icon-facebook"></i></a>
						<a href=""><i class="icon-twitter"></i></a>
						<a href=""><i class="icon-google-plus"></i></a>
						<a href=""><i class="icon-linkedin"></i></a>
						<a href=""><i class="icon-tumblr"></i></a>
						<a href=""><i class="icon-dribbble"></i></a>	
						<a href=""><i class="icon-instagram"></i></a>
						<a href=""><i class="icon-pinterest"></i></a>
						<a href=""><i class="icon-youtube-play"></i></a>
						<a href=""><i class="icon-rss"></i></a>
					</div>
				</div>
				
				<div class="col-md-4">
					<h6 class="title">About</h6>
					<p>
						We are a small team of remarkable people doing great things. The people who worked with us, leave always happy. Get to know a little bit more <a href="about">about us</a>.
					</p>
				</div>  
				
				<div class="col-md-4">
					<h6 class="title">Get in Touch</h6>
					<address>
						<i class="icon-map-marker"></i> <a class="lightbox-iframe" href="https://maps.google.com/maps?q=Main+Street,+New+York+City,+New+York&amp;hl=en&amp;t=v&amp;hnear=Main+Street,+New+York+City,+New+York" data-toggle="tooltip" title="Show on Google Maps">Main Street, New York City, United States</a><br />
						<i class="icon-envelope"></i> <a href="mailto:mail@yourcompany.com" data-toggle="tooltip" title="Email Us">mail@yourcompany.com</a><br />
						<i class="icon-phone"></i> +1 555 1234 4556<br />
					</address>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container footer-bottom">
		<div class="footer-copyright">
			<p>&copy; 2013 by Olin. All Rights Reserved.</p>
		</div>
	</div>
	
</footer>

<a href="#" id="scrollToTop">
	<i class="icon-angle-up icon-2x"></i>
</a>

<!-- Contact Popup (Modal) -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">We would love to hear from you</h4>
      </div>
      <div class="modal-body">

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
					<script src="assets/js/validation.js"></script>
				</form>

				<div class="row">
					<div class="col-sm-6">
						<h4 class="invert">Great Company Inc.</h4>
						<address>
							<i class="icon-map-marker"></i> Main Street, New York City, United States<br />
							<i class="icon-envelope"></i> mail@yourcompany.com<br />
							<i class="icon-phone"></i> +1 555 1234 4556<br />
						</address>		
					</div>
					<div class="col-sm-6">
						<h5 class="hr2 margin-bottom-base text-muted"><i class="icon-time"></i> Business Hours</h5>
						<p class="lead">
							<span class="color">Mon - Fri:</span> <span class="text-muted">9am to 5pm <em>(EST)</em></span><br />
							<span class="color">Sat:</span> <span class="text-muted">9am to 2pm <em>(EST)</em></span><br />
							<span class="color">Sun:</span> <span class="text-muted">closed</span>
						</p>
					</div>
				</div>
        
      </div>
    </div>
  </div>
</div>

<!-- JavaScript Libraries & jQuery Plugins -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/jquery.fittext.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.hoverdir.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/theme.js"></script>

<!-- The Final Countdown v1.0
https://github.com/hilios/jQuery.countdown
Example: "Coming Soon" Page (coming-soon.html)
-->
<script src="assets/js/jquery.countdown.min.js"></script>
<script>
$(document).ready(function() {
  $('.countdown').countdown("2013/12/31 23:59:59", function(event) {
    var $this = $(this);
    switch(event.type) {
      case "seconds":
      case "minutes":
      case "hours":
      case "days":
        $this.find('span#'+event.type).html(event.value);
        break;
      case "finished":
        $this.css('color','red');        
        break;
    }
  });
});
</script>
 
</body>
</html>