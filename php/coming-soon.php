<?php $page_title = "Coming Soon"; include("header.php"); ?>

<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header">Coming Soon</h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Coming Soon</li>
		</ol>
	</div>	
</div>
	
<div class="container" id="main">

		<div class="countdown-container">
		<h2 class="hr2 text-center">Get on Board..</h2>	
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

<?php include("footer.php"); ?>