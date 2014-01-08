<?php $page_title = "Blog Post Video"; include("header.php"); ?>

<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header">Blog Post Video</h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li><a href="blog">Blog</a></li>
		  <li class="active">Blog Post Video</li>
		</ol>
	</div>
</div>

<div class="container" id="main">

<div id="blog-post" class="row">

	<div class="col-sm-8">
	
		<article>
			<div class="post-content">
				<div class="post-intro">
					<div class="video-full-width">
						<iframe src="//player.vimeo.com/video/72316750?byline=0&amp;portrait=0&amp;badge=0" frameborder="0"></iframe>
					</div>
				</div>				
				<h2 class="hr2 blog-post-title">Video Demo Post</h2>								
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ut, placeat, accusantium, nulla ab hic nam quis amet quam veritatis aperiam at magni illum maxime rerum et impedit eius consequuntur beatae sed. Tempora, explicabo, magni? Labore, pariatur, similique, accusantium facilis nemo id a quasi earum sed dolores culpa deleniti accusamus quia deserunt repudiandae voluptates fugiat at fuga assumenda nesciunt ipsum iure nulla reprehenderit tempora nostrum reiciendis iste molestiae dolor eius possimus facere ratione eaque officia delectus quam sint atque numquam vel nam et modi iusto. Esse, accusantium, perspiciatis, voluptatem maiores dolorem corporis dicta sed asperiores impedit placeat sequi nulla a.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ut, placeat, accusantium, nulla ab hic nam quis amet quam veritatis aperiam at magni illum maxime rerum et impedit eius consequuntur beatae sed. Tempora, explicabo, magni? Labore, pariatur, similique, accusantium facilis nemo id a quasi earum sed dolores culpa deleniti accusamus quia deserunt repudiandae voluptates fugiat at fuga assumenda nesciunt ipsum iure nulla reprehenderit tempora nostrum reiciendis iste molestiae dolor eius possimus facere ratione eaque officia delectus quam sint atque numquam vel nam et modi iusto. Esse, accusantium, perspiciatis, voluptatem maiores dolorem corporis dicta sed asperiores impedit placeat sequi nulla a.
					</p>
					<div class="post-meta">
						<span class="date"><i class="icon-time"></i>September 15, 2013</span>				
						<span class="author"><i class="icon-user"></i>Admin</span>
						<span class="category"><i class="icon-folder-open"></i>Branding</span>
						<span class="tags"><i class="icon-tag"></i>Video</span>
					</div>
				</div>												
		</article>
		
		<div id="comments"> 
			<h3 class="comment-title hr2">1 Comment</h3>
			<ul>
				<li class="comment">
					<div class="comment-avatar">
						<img src="http://placehold.it/64x64&text=Alexis" alt="" height="64" width="64" />
					</div>
					<div class="comment-data">
						<cite class="comment-author">Alexis</cite>
						<div class="comment-text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, dignissimos, fugiat, temporibus, voluptas voluptatibus eos natus quod aut adipisci voluptatum quaerat excepturi tenetur nam voluptate dicta quis consectetur earum ut omnis eius pariatur officiis et ipsum perferendis nobis rem maxime?
							</p>
						</div>
						<div class="comment-meta">
							<span class="comment-reply pull-left"><a href="" class="btn btn-default">Reply</a></span>
							<span class="comment-date pull-right">September 16, 2013 at 11:25 am</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
		<div id="reply">
			<h3 class="hr2">Leave A Reply</h3>
			<form action="" role="form" class="comment-form">					
				<div class="row">
					<div class="form-group col-md-6">
						<label for="name">Name</label>
						<input type="text" id="name" placeholder="" class="form-control" />
					</div>
					<div class="form-group col-md-6">
						<label for="email">Email <span class="text-warning">*</span></label>
						<input type="text" id="email" placeholder="" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<label for="website">Website</label>
					<input type="text" id="website" class="form-control" placeholder="" />
				</div>
				<div class="form-group">
					<label for="comment">Comment <span class="text-warning">*</span></label>
					<textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder=""></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<small class="pull-right text-muted">* required</small>
			</form>
		</div>
		
	</div>
	
	<aside id="blog-sidebar" class="col-sm-4 col-md-3 col-md-offset-1">
		<ul>
			<li>
				<div class="input-group">
					<input type="text" placeholder="Search the blog for.." class="form-control" />
					<span class="input-group-addon gradient">
						<a onclick="$(this).closest('form').submit()"><i class="icon-search"></i></a>
					</span>
				</div>
			</li>
			<li class="social-networks">
				<a href=""><i class="icon-facebook"></i></a>
				<a href=""><i class="icon-twitter"></i></a>
				<a href=""><i class="icon-google-plus"></i></a>
				<a href=""><i class="icon-rss"></i></a>
			</li>
			<li class="widget-recent-comments">
				<h4 class="widget-title hr2">Recent Comments</h4>
				<ul>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ad!
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ad!
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ad!
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ad!
					</li>
					<li>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ad!
					</li>
				</ul>
			</li>
			<li class="widget-categories">
				<h4 class="widget-title hr2">Categories</h4>
				<ul>
					<li>Business</li>
					<li>Marketing</li>
					<li>Design</li>
					<li>Branding</li>
					<li>Project Management</li>
					<li>News</li>
					<li>Misc</li>
				</ul>
			</li>
			<li class="widget-archive">
				<h4 class="widget-title hr2">Archive</h4>
				<ul>
					<li>September 2013</li>
					<li>August 2013</li>
					<li>July 2013</li>
					<li>June 2013</li>
					<li>May 2013</li>
					<li>April 2013</li>
				</ul>
			</li>
		</ul>			
	</aside>
	
</div><!-- #blog-post -->

</div><!-- .container -->

<?php include("footer.php"); ?>