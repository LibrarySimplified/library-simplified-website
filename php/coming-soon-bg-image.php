<?php $page_title = "Coming Soon (Background)"; include("header.php"); ?>

<style>

.coming-soon-bg-image {
	position: relative;
  overflow: hidden;
  width: 100%;
  height: 100%;
  color: #fff;
  background: url("http://placehold.it/1200x800&text=Coming+Soon+Dummy+Background+Image") no-repeat center center fixed; /* Replace the URL with your own background image */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.coming-soon-layer {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	opacity: .25;
	background: #000;
}

.title {
	color: #fff;
	text-transform: uppercase;
}

.countdown-container {
	position: relative;
	z-index: 2;
}

.countdown .date-unit { color: #ccc; }

</style>

<div class="coming-soon-bg-image">
	
	<div class="coming-soon-layer"></div>		
	<div class="container" id="main">
	 
 		<div class="countdown-container">
			<h2 class="text-center section-small title">Get on Board..</h2>	
			<div class="countdown section-base text-center">
			  <div>
				  <span id="days" class="date-number"></span>
					<span class="date-unit">Days</span>
			  </div>
			  <div>
				  <span id="hours" class="date-number"></span>
					<span class="date-unit">Hours</span>
			  </div>
			  <div>
				  <span id="minutes" class="date-number"></span>
					<span class="date-unit">Minutes</span>
			  </div>
			  <div>
				  <span id="seconds" class="date-number"></span>
					<span class="date-unit">Seconds</span>
			  </div>
			  <!-- USAGE: To set the countdown go to the "The Final Countdown" script right before the closing </body> tag and change the date (format: YYYY/MM/DD hh:mm:ss)  -->
			</div>
		
			<form class="countdown-form col-sm-offset-4 col-sm-4" method="post" action="">
		    <input type="text" class="form-control text-center" placeholder="john@yourcompany.com" />
		    <button class="btn btn-danger btn-lg" type="button">Join the Revolution <i class="icon-rocket"></i></button>
		  </form>
		
		</div>
	
	</div><!-- .container -->
		
</div>

<?php include("footer.php"); ?>