<?php $page_title = "Page Not Found"; include("header.php"); ?>

<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header"></h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Page Not Found</li>
		</ol>
	</div>	
</div>

<div class="container page-404" id="main">
<i class="icon-file-text icon-404"></i>

<div class="header-404">404 - Page Not Found</div>
<h4 class="lead margin-top-base description-404">We're sorry, but the page you were looking for doesn't exist.</h4>

<div class="section-small">
	<h5 class="hr2">Try one of those pages</h5>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="about">About Us</a></li>
		<li><a href="faq">FAQ's</a></li>
		<li><a href="contact">Contact Us</a></li>
	</ul>
</div>

<div class="section-small">
	<h5 class="hr2">Last, but not least, the search</h5>
	<form action="404" method="post"class="row">
		<div class="input-group col-sm-3">
			<input type="text" placeholder="Search.." class="form-control" />
			<span class="input-group-addon gradient">
				<a onclick="$(this).closest('form').submit()"><i class="icon-search"></i></a>
			</span>
		</div>
	</form>
</div>

</div><!-- .container -->

<?php include("footer.php"); ?>