$(document).ready(function() {	
	
	/* Slideshow (Carousel)
	-------------------------*/
	$('.carousel').carousel({
	  interval: 8000 // Slider interval in ms. Default is 8000 (=8sec)
	});
	
	$('.carousel').bind('slide', function(e) {
		$('.carousel').animate({height: $(e.relatedTarget).outerHeight()});
	}); 
	
	// Slideshow - Update margin-bottom when dispalying indicators
	if ( $('.carousel').find('.carousel-indicators').length > 0 ) {
		$('.carousel').css('margin-bottom','60px');
	}


	/* animate.css: CSS Animations (Random Display)
	http://daneden.me/animate/
	Example: Homepage Slideshow
	-------------------------*/
	
	// Random Delay from .25s to 1s
	var delay = ["delay025s", "delay050s", "delay075s", "delay1s"];
	function random_delay() {
	 return delay[Math.floor(Math.random() * delay.length)];
	}
	
	// animate.css Effects Library:
	
		// Effect: Attention seekers
		var attention = ["flash", "bounce", "shake", "tada", "swing", "wobble", "pulse"];
		function random_attention() {
		   return attention[Math.floor(Math.random() * attention.length)];
		}
		
		// Effect: Flip
		var flip = ["flip", "flipInX", "flipOutX", "flipInYada", "flipOutY"];
		function random_flip() {
		   return flip[Math.floor(Math.random() * flip.length)];
		}   
		
		// Effect: FadeInSmall
		var fadeInSmall = ["fadeIn", "fadeInUp", "fadeInDown", "fadeInLeft", "fadeInRight"];
		function random_fadeInSmall() {
		   return fadeInSmall[Math.floor(Math.random() * fadeInSmall.length)];
		}
		
		// Effect: FadeInBig 
		var fadeInBig = ["fadeInUpBig", "fadeInDownBig", "fadeInLeftBig", "fadeInRightBig"];
		function random_fadeInBig() {
		   return fadeInBig[Math.floor(Math.random() * fadeInBig.length)];
		}
		
		// Effect: FadeOutSmall
		var fadeOutSmall = ["fadeOut", "fadeOutUp", "fadeOutDown", "fadeOutLeft", "fadeOutRight"];
		function random_fadeOutSmall() {
		   return fadeOutSmall[Math.floor(Math.random() * fadeOutSmall.length)];
		}
		
		// Effect: FadeOutBig 
		var fadeOutBig = ["fadeOutUpBig", "fadeOutDownBig", "fadeOutLeftBig", "fadeOutRightBig"];
		function random_fadeOutBig() {
		   return fadeOutBig[Math.floor(Math.random() * fadeOutBig.length)];
		}
		
		// Effect: BounceIn
		var bounceIn = ["bounceIn", "bounceInDown", "bounceInUp", "bounceInLeft", "bounceInRight"];
		function random_bounceIn() {
		   return bounceIn[Math.floor(Math.random() * bounceIn.length)];
		}
		
		// Effect: BounceOut
		var bounceOut = ["bounceOut", "bounceOutDown", "bounceOutUp", "bounceOutLeft", "bounceOutRight"];
		function random_bounceOut() {
		   return bounceOut[Math.floor(Math.random() * bounceOut.length)];
		}
		
		// Effect: RotateIn 
		var rotateIn = ["rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight"];
		function random_rotateIn() {
		   return rotateIn[Math.floor(Math.random() * rotateIn.length)];
		}
		
		// Effect: RotateOut 
		var rotateOut = ["rotateOut", "rotateOutDownLeft", "rotateOutDownRight", "rotateOutUpLeft", "rotateOutUpRight"];
		function random_rotateOut() {
		   return rotateOut[Math.floor(Math.random() * rotateOut.length)];
		}
		
		// Effect: Lightspeed 
		var lightspeed = ["lightSpeedIn", "lightSpeedOut"];
		function random_lightspeed() {
		   return lightspeed[Math.floor(Math.random() * lightspeed.length)];
		}
		
		// Effect: Specials 
		var special = ["hinge", "rollIn", "rollOut"];
		function random_special() {
		   return special[Math.floor(Math.random() * special.length)];
		} 
	
	// CSS Animation - Random Choice
	$('.carousel .random').each( function( index ) {
		$(this).addClass('animated ' + random_bounceIn() + ' ' + random_delay());
	});
	
	/* FitText - Responsive Slider font-size scaling according to parent element width
	-------------------------*/
	$('.carousel-content .carousel-header').fitText(3, { minFontSize: '14px', maxFontSize: '48px' } );
	$('.carousel-content .carousel-body').fitText(6, { minFontSize: '12px', maxFontSize: '28px' } );
	$('.carousel-caption').fitText(8, { minFontSize: '16px', maxFontSize: '21px' } );
	$('.carousel-control i').fitText(2, { minFontSize: '20px', maxFontSize: '60px' } );
	
	
	/* Navigation - Collapse (for mobile)
	-------------------------*/
	$('.navbar .collapse').collapse();
	
	
	/* Dropdown Menu - Add a caret to each dropdown menu
	-------------------------*/
	$('.dropdown-toggle').dropdown();
	$('.dropdown').not('.header-search-form').find('> a').append('<i class="icon-angle-down"></i>');
	$('.dropdown > a').prepend('<div class="nav-caret-square"><span></span></div>');


	/* Seperator: .hr2 Fine Double Line Styling
	-------------------------*/
	$('.hr2').wrapInner('<span></span>');


	/* FitVids v1.0 - Fluid Width Video Embeds
	https://github.com/davatron5000/FitVids.js/
	Example: Blog - Video Demo Post
	-------------------------*/
	$('.video-full-width').fitVids();
	$('.fluid-width-video-wrapper').css('padding-top','56.25%'); // Always display videos 16:9 (100/16*9=56.25)


	/* BxSlider v4.0 - Multislider
	http://bxslider.com/
	-------------------------*/
	container = $('.container').width();
	slide2 = Math.round(container / 2);
	slide3 = Math.round(container / 3);
	slide4 = Math.round(container / 4);
	slide5 = Math.round(container / 5);
	slide6 = Math.round(container / 6);
	slide7 = Math.round(container / 7);
	slide8 = Math.round(container / 8);
	 
	$('.bxslider2').bxSlider({ minSlides: 2, maxSlides: 2, slideWidth: slide2, slideMargin: 10 });
	$('.bxslider3').bxSlider({ minSlides: 3, maxSlides: 3, slideWidth: slide3, slideMargin: 10 });
	$('.bxslider4').bxSlider({ minSlides: 4, maxSlides: 4, slideWidth: slide4, slideMargin: 10 });
	$('.bxslider5').bxSlider({ minSlides: 5, maxSlides: 5, slideWidth: slide5, slideMargin: 10 });
	$('.bxslider6').bxSlider({ minSlides: 6, maxSlides: 6, slideWidth: slide6, slideMargin: 10 });
	$('.bxslider7').bxSlider({ minSlides: 7, maxSlides: 7, slideWidth: slide7, slideMargin: 10 });
	$('.bxslider8').bxSlider({ minSlides: 8, maxSlides: 8, slideWidth: slide8, slideMargin: 10 });
	
	$('.bxslider').bxSlider();	
	
	// Multislider: Replace arrows with Icon Font
	$('.bx-prev').html('<i class="icon-angle-left"></i>');
	$('.bx-next').html('<i class="icon-angle-right"></i>');
	
	
	/* Magnific Popup v0.9.5 - Lightbox plugin
	https://github.com/dimsemenov/Magnific-Popup
	-------------------------*/
	$('.lightbox-image').magnificPopup({type: 'image'});
	$('.lightbox-iframe').magnificPopup({type:'iframe'});
	$('.lightbox-ajax').magnificPopup({type:'ajax'});
	
	$('.gallery').each(function() { // the containers for all your galleries should have the class "gallery"
    $(this).magnificPopup({
      delegate: 'a', // the element that hosts each of your gallery items
      type: 'image',
			gallery:{enabled:true},
			callbacks: {    
		    buildControls: function() {
		      // re-appends controls inside the main container
		      this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
		    }		    
		  },
		  zoom: {
				enabled: true,
				duration: 300, // don't forget to change the duration also in CSS
				opener: function(element) {
					return element.find('img');
				}
			}
    });
	});

	
	/* Bootstrap Plugins
	-------------------------*/
	
	// Tooltip
	$('[data-toggle="tooltip"]').tooltip(); 
	
	// Popover on click
	$('[data-toggle="popover"]').popover({
		html: true,
		placement: 'top' // Popover Position (top, right, bottom, left)
	});
	
	// Popover on hover
	$('[data-toggle="popover-hover"]').popover({
		html: true,
		placement: 'top',
		trigger: 'hover' // Popover Position (top, right, bottom, left)
	});
	
	// Sidebar Affix: Offset from the Top (.affix-top) & Dynamically calculated from the Bottom (.affix-bottom)
	$('#sidebar').affix({
	  offset: {
	  	top: 160,
			bottom: function () {
	      return (this.bottom = $('#footer').outerHeight(true))
	    }
	  }
	});
	
	
	/* Blog
	-------------------------*/	
	$('.like a').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('active');
	});
	
	// Blog Comments: Triangle pointing to the Comment Author
	$(window).on('resize', function () {
		if ( $(window).width() >= 992 ) {
			$('.comment-data').prepend('<div class="arrow-left"></div>');
		}
		else {
			$('.comment-data .arrow-left').hide();
		}
	}).resize();
	
	
	/* Scroll To The Top - Button
	-------------------------*/
	$('#scrollToTop').click(function(e) {
		e.preventDefault();
		$('html,body').animate({scrollTop: 0}, 800);
	});

}); // END $(document).ready();


$(window).scroll(function() {

	/* Scroll To The Top - Button Visibility
	-------------------------*/
  if ($(this).scrollTop() > 180) {
  		$('#scrollToTop').css({'visibility': 'visible', 'opacity': '.75'});
  }
  else {
  		$('#scrollToTop').css({'visibility': 'hidden', 'opacity': '0'});
  }	
  
  /* On Scroll Down: Fixed Header
  -------------------------*/  
  if ($(this).scrollTop() > 0) {
      $('body').css('padding-top','60px'); // = header height
      $('header').addClass('navbar-fixed-top');
  }
  else {
      $('body').css('padding-top','0px');
      $('header').removeClass('navbar-fixed-top');
  }  


	/* On Scroll Down: Logo Resize
	-------------------------*/
  if ($(this).scrollTop() > 120) {
      $('.logo').css('font-size','20px');
  }
  else {
      $('.logo').css('font-size','28px');
  }
  
}); // END $(window).scroll();


$(window).load(function() {

	/* Isotope Layout Plugin
	-------------------------*/
	
	// Cache portfolio container
	var $container = $('.portfolio');
	var $columns2 = $('.portfolio.columns2');
	var $columns3 = $('.portfolio.columns3');
	
	// Direction Aware Hover Effect
	$container.find("li").each(function() { 
		$(this).hoverdir({
			speed : 			200,
			hoverDelay : 	100,
			hoverElem: 		'.portfolio-item-content'
		});
	});
	
	// Initialize Isotope & Masonry Layout
	$container.imagesLoaded( function() {
		$container.isotope({
		  masonry: { columnWidth: $container.width() / 4 } // 4 Columns (Default)
		});
		$columns3.isotope({
			masonry: { columnWidth: $container.width() / 3 } // 3 Columns
		});
		$columns2.isotope({
			masonry: { columnWidth: $container.width() / 2 } // 2 Columns
		});
	 });
	
	// Recalculate Portfolio Item width when resizing the browser window
  $(window).smartresize(function() {
	  $container.isotope({
		  masonry: { columnWidth: $container.width() / 4 } // 4 Columns (Default)
		});
		$columns3.isotope({
			masonry: { columnWidth: $container.width() / 3 } // 3 Columns
		});
		$columns2.isotope({
			masonry: { columnWidth: $container.width() / 2 } // 2 Columns
		});
	});
    
	$(window).smartresize();
	
	// Initialize Portfolio Filter (on click)
	$('.portfolio-filter a').click(function(e) {		
		e.preventDefault();	  
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });		
		// Active Filter Class
		$('.portfolio-filter').find('.active').removeClass('active');
		$(this).parent().addClass('active');		
		return false;		
	});
	
	// Portfolio Filter Item Counter
	$('.portfolio-filter a').each(function() {
		var projecttype = $(this).attr('data-filter');
		if ( projecttype == "*" || "" ) {
			$(this).append( '<span class="type-counter">'+$(".portfolio > li").length+'</span>' ); // Count All Projects
		}
		else {
			$(this).append( '<span class="type-counter">'+$(".portfolio > li"+projecttype).length+'</span>' ); // Count The Specific Project Type
		}
	});
	
}); // END $(window).load();