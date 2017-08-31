$( document ).ready(function() {

	$window = $(window);

	$('.owl-slider').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    autoHeight: true,
	    navText : ['<img src="http://madknow.com.br/slim-dog/wp-content/uploads/2017/08/prev-arrow-white.png" alt="">','<img src="http://madknow.com.br/slim-dog/wp-content/uploads/2017/08/next-arrow-white.png" alt="">'],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    autoHeight: true,
	    navText : ['<img src="http://madknow.com.br/slim-dog/wp-content/uploads/2017/08/prev-arrow.png" alt="">','<img src="http://madknow.com.br/slim-dog/wp-content/uploads/2017/08/next-arrow.png" alt="">'],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

	var homeblock = $(".home-block");
	var homeblockwidth = homeblock.width();
	homeblock.height(homeblockwidth/1.5);

	// Effect Scroll menu
	var $menu = $('.go-header');
	$window.on('scroll', function() {
		if ($window.scrollTop()>=5) $menu.addClass('active'); 
		else $menu.removeClass('active');
	});
	// Toggle menu
	var $navToggle = $(".nav-toggle"),
		$goNavigation = $(".go-navbar .navigation"),
		$goNavbar = $(".go-navbar");
	$navToggle.on('click', function(event) {
		event.preventDefault();
		$goNavbar.fadeToggle('slow', function() {});
		$window.trigger('resize');
	});
	// CLick close menu
	if ($window.width() <= 768) {
		$goNavigation.on('click', function(event) {
			$goNavbar.fadeOut('slow', function() {});
		});
	}
	$window.trigger('resize');

	$('#fullpage').fullpage({
		scrollBar: true,
	});

	/**
	 * Anchor smooth
	 * @type event
	 */
	$('a[href*="#"]:not([href="#"], [href*="#panel"], .hash)').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
	    $('html, body').animate({
	      scrollTop: (target.offset().top-65)
	    }, 1000);
	    return false;
	  }
	}
	});

	var altura = $('.iframe').height();
    $(".page-iframe").height(altura);

	$(".projeto").on('click', function(event) {
		event.preventDefault();

		var src = $(this).find(".video-src").attr("data-src");

		console.log(src);

		$(".page-iframe").attr('src', src);

		$(".iframe").fadeIn('slow', function() {
			
		});
	});

	$(".close-iframe").on('click', function(event) {
		event.preventDefault();
		$(".page-iframe").attr('src', '');

		$(".iframe").fadeOut('slow', function() {
			
		});

	});

	$(window).on('load', function() { // makes sure the whole site is loaded 

		$("#status").fadeOut(5000, function() {
			$('#preloader').delay(500).fadeOut('slow'); // will fade out the white DIV that covers the website. 
			$('body').delay(500).css({'overflow':'visible'});
		});
	});
});