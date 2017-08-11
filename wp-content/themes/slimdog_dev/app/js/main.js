$( document ).ready(function() {
	$('.owl-slider').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    autoplay:true,
	    autoplayTimeout: 4000,
	    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
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

	$('.owl-about').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    autoplay:false,
	    autoplayTimeout: 4000,
	    autoHeight: true,
	    autoHeightClass: 'owl-height',
	    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
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

});