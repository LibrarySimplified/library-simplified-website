<?php $page_title = "Single Project - Slider"; include("header.php"); ?>
  
<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header">Single Project - Slider</h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Single Project - Slider</li>
		</ol>
	</div>	
</div>
  
<div class="container" id="main">

  <div class="row project-single">
	  <div class="col-md-8">
		  <div id="carousel" class="carousel slide">
			
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">			  
			    <div class="item active">
			      <img src="http://placehold.it/1200x800&text=Slide+1" alt="" />
			    </div>			    
			    <div class="item">
			      <img src="http://placehold.it/1200x800&text=Slide+2" alt="" />
			    </div>
			    <div class="item">
			      <img src="http://placehold.it/1200x800&text=Slide+3" alt="" />
			    </div>		    
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel" data-slide="prev">
			    <i class="icon-angle-left"></i>
			  </a>
			  <a class="right carousel-control" href="#carousel" data-slide="next">
			    <i class="icon-angle-right"></i>
			  </a>
			  
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel" data-slide-to="1"></li>
			    <li data-target="#carousel" data-slide-to="2"></li>
			  </ol>
			  
			</div>
	  </div>
	  
	  <div class="col-md-4">
		  <h5 class="page-header">Single Project with Slider</h5>
		  <p>
			  Use this space to explain a little bit about this certain project.
		  </p>
		  <p>
			  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, molestias, asperiores, cumque blanditiis repellat tempore eligendi vel dolor error odit quam quas suscipit.
			</p>
			
			<div class="panel-group" id="accordion">
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Client</a></h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in">
			      <div class="panel-body">
			        <p>
				        <strong>Great Company Inc.</strong>
			        </p>
			        <p>
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, odit libero quis facilis expedita voluptates maxime quaerat dolorum quas laudantium.
			        </p>
			        <p>
				        <a href="http://google.com">www.google.com</a>
			        </p>
			        <span class="project-date">September 2013</span>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Our Expertise</a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
	        </p>
		        <ul class="list-icon">
						<li><i class="icon-ok-sign"></i>Awesome Skill #1</li>
						<li><i class="icon-ok-sign"></i>Awesome Skill #2</li>
						<li><i class="icon-ok-sign"></i>Awesome Skill #3</li>
					</ul>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Feedback</a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse">
			      <div class="panel-body">
			        <blockquote>
							  <p><strong>Incredible.</strong> What a team, what a result. I am so happy. Highly recommend those folks.</p>
							  <small>John Doe, CEO of <cite title="Source Title">"Great Company Inc."</cite></small>
							</blockquote>
			      </div>
			    </div>
			  </div>
			</div>
	  </div>
  </div><!-- .row -->

  <div class="project-single-more">
  	<h3 class="hr2 text-center">More Projects</h3>
	  <div class="row">
	  	<ul>
		  	<li class="col-sm-3">
		  		<a href="single-project-slider-full-width">
		  			<img src="http://placehold.it/600x400&text=Slider+Full+Width+Project" alt="" />
		  		</a>
		  		<h6 class="header">Single Project - Slider Full Width</h6>
		  	</li>
		  	<li class="col-sm-3">
		  		<a href="single-project-gallery">
		  			<img src="http://placehold.it/600x400&text=Gallery+Project" alt="" />
					</a>
		  		<h6 class="header">Single Project - Gallery</h6>
		  		<p>
			  		Short description, if you feel fancy.
		  		</p>
		  	</li>
		  	<li class="col-sm-3">
		  		<a href="single-project-slider-full-width">
		  			<img src="http://placehold.it/600x400&text=Slider+Full+Width++Project" alt="" />
		  		</a>
		  		<h6 class="header">Single Project - Slider Full Width</h6>
		  	</li>
		  	<li class="col-sm-3">
		  		<a href="single-project-gallery">
		  			<img src="http://placehold.it/600x400&text=Gallery+Project" alt="" />
		  		</a>
		  		<h6 class="header">Single Project - Gallery</h6>
		  		<p>
			  		Short description, if you feel fancy.
		  		</p>
		  	</li>
	  	</ul>
	  </div>
  </div>
	
</div><!-- .container -->

<?php include("footer.php"); ?>