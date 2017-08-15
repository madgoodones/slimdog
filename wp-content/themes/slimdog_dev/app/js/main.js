$( document ).ready(function() {
	$('.owl-slider').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    autoHeight: true,
	    navText : ['<img src="http://localhost/slimdog/wp-content/uploads/2017/08/prev-arrow-white.png" alt="">','<img src="http://localhost/slimdog/wp-content/uploads/2017/08/next-arrow-white.png" alt="">'],
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
	    navText : ['<img src="http://localhost/slimdog/wp-content/uploads/2017/08/prev-arrow.png" alt="">','<img src="http://localhost/slimdog/wp-content/uploads/2017/08/next-arrow.png" alt="">'],
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
});