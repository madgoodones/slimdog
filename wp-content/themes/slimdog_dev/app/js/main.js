$( document ).ready(function() {
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


	$(".nav-toggle").on('click', function(event) {

		$(".go-navbar").fadeToggle('slow', function() {

		});
	});

	AOS.init({
		offset: 100,
      	duration: 400,
      	easing: 'ease-in-cubic',
      	delay: 100,
	});

	$('#fullpage').fullpage();

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

	$("#status").fadeIn('slow', function() {
		
	});

	$(window).on('load', function() { // makes sure the whole site is loaded 

		$("#status").fadeOut(1000, function() {
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
			$('body').delay(350).css({'overflow':'visible'});
		});
	});
});