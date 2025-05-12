(function ($) {
	"use strict";

	$(window).on('load', function () {
		preloader();
		wowAnimation();
	});

	/*------------------------------------------
	= preloader
	-------------------------------------------*/
	function preloader() {
		$('#preloader').fadeOut('slow',function(){
			$(this).remove();
		});
	}

	/*------------------------------------------
	= back to top
	-------------------------------------------*/
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.xb-backtotop').addClass('active');
		} else {
			$('.xb-backtotop').removeClass('active');
		}
	});  
	$(function () {
		$(".scroll").on('click', function () {
			$("html,body").animate({ scrollTop: 0 }, "slow");
			return false
		});
	});

	$(window).scroll(function () {
		if ($ (this).scrollTop() > 500){
			$('.xb-backtotop').addClass('active');
		}
		else {
			$('.xb-backtotop').removeClass('.active');
		}
	});

	/*------------------------------------------
	= sticky header
	-------------------------------------------*/
	function stickyHeader() {
		var scrollDirection = "";
		var lastScrollPosition = 0;

		// Clone and make header sticky if the element with class 'xb-header' exists
		if ($('.xb-header').length) {
			$('.xb-header').addClass('original').clone(true).insertAfter('.xb-header').addClass('xb-header-area-sticky xb-sticky-stt').removeClass('original');
		}

		// Handle scroll events
		$(window).on("scroll", function () {
			var currentScrollPosition = $(window).scrollTop();

			// Determine scroll direction
			scrollDirection = currentScrollPosition < lastScrollPosition ? "up" : "down";
			lastScrollPosition = currentScrollPosition;

			// Check if element with ID 'xb-header-area' has class 'is-sticky'
			if ($("#xb-header-area").hasClass("is-sticky")) {
				// Add or remove classes based on scroll position for sticky header and mobile header
				if (lastScrollPosition > 100) {
					$(".xb-header-area-sticky.xb-sticky-stb").addClass("xb-header-fixed");
				} else {
					$(".xb-header-area-sticky.xb-sticky-stb").removeClass("xb-header-fixed");
				}

				// Add or remove classes for sticky header based on scroll direction
				if (scrollDirection === "up" && lastScrollPosition > 100) {
					$(".xb-header-area-sticky.xb-sticky-stt").addClass("xb-header-fixed");
				} else {
					$(".xb-header-area-sticky.xb-sticky-stt").removeClass("xb-header-fixed");
				}
			}
		});
	}
	stickyHeader();


//=======================
	// header search
	$(".header-search-btn").on("click", function (e) {
		e.preventDefault();
		$(".header-search-form-wrapper").addClass("open");
		$('.header-search-form-wrapper input[type="search"]').focus();
		$('.body-overlay').addClass('active');
	});
	$(".xb-search-close").on("click", function (e) {
		e.preventDefault();
		$(".header-search-form-wrapper").removeClass("open");
		$("body").removeClass("active");
		$('.body-overlay').removeClass('active');
	});


	/*------------------------------------------
	= sidebar
	-------------------------------------------*/
	$('.sidebar-menu-close, .body-overlay').on('click', function () {
		$('.offcanvas-sidebar').removeClass('active');
		$('.body-overlay').removeClass('active');
	});

	$('.offcanvas-sidebar-btn').on('click', function () {
		$('.offcanvas-sidebar').addClass('active');
		$('.body-overlay').addClass('active');
	});
	$('.body-overlay').on('click', function () {
		$(this).removeClass('active');
		$(".header-search-form-wrapper").removeClass("open");
	});

	/*------------------------------------------
	= mobile menu
	-------------------------------------------*/
	$('.xb-nav-hidden li.menu-item-has-children > a').append('<span class="xb-menu-toggle"></span>');
	$('.xb-header-menu li.menu-item-has-children, .xb-menu-primary li.menu-item-has-children').append('<span class="xb-menu-toggle"></span>');
	$('.xb-menu-toggle').on('click', function () {
		if (!$(this).hasClass('active')) {
			$(this).closest('ul').find('.xb-menu-toggle.active').toggleClass('active');
			$(this).closest('ul').find('.sub-menu.active').toggleClass('active').slideToggle();
		}
		$(this).toggleClass('active');
		$(this).closest('.menu-item').find('> .sub-menu').toggleClass('active');
		$(this).closest('.menu-item').find('> .sub-menu').slideToggle();
	});

	$('.xb-nav-hidden li.menu-item-has-children > a').click(function (e) {
		var target = $(e.target);
		if ($(this).attr('href') === '#' && !(target.is('.xb-menu-toggle'))) {
			e.stopPropagation();
			if (!$(this).find('.xb-menu-toggle').hasClass('active')) {
				$(this).closest('ul').find('.xb-menu-toggle.active').toggleClass('active');
				$(this).closest('ul').find('.sub-menu.active').toggleClass('active').slideToggle();
			}
			$(this).find('.xb-menu-toggle').toggleClass('active');
			$(this).closest('.menu-item').find('> .sub-menu').toggleClass('active');
			$(this).closest('.menu-item').find('> .sub-menu').slideToggle();
		}
	});
	$(".xb-nav-mobile").on('click', function () {
		$(this).toggleClass('active');
		$('.xb-header-menu').toggleClass('active');
	});

	$(".xb-menu-close, .xb-header-menu-backdrop").on('click', function () {
		$(this).removeClass('active');
		$('.xb-header-menu').removeClass('active');
	});

	/*------------------------------------------
	= data background and bg color
	-------------------------------------------*/
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ") ")
	})
	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));

	});

	/*------------------------------------------
	= aos animation
	-------------------------------------------*/
	function wowAnimation() {
		var wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 0,
			mobile: false,
			live: true
		});
		wow.init();
	}

	/*------------------------------------------
	= counter
	-------------------------------------------*/
	if ($(".xbo").length) {
		$('.xbo').appear();
		$(document.body).on('appear', '.xbo', function (e) {
			var odo = $(".xbo");
			odo.each(function () {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
			window.xboOptions = {
				format: 'd',
			};
		});
	}

	/*------------------------------------------
	= feature slider
	-------------------------------------------*/
	var slider = new Swiper('.fanfact-slider', {
		slidesPerView: 1,
		roundLengths: true,
		loop: true,
		loopAdditionalSlides: 30,
		effect: "fade",
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		autoplay: {
			enabled: true,
			delay: 6000
		},
		speed: 400,
		breakpoints: {
			'1600': {
				slidesPerView: 1,
			},
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	/*------------------------------------------
	= campus-slider
	-------------------------------------------*/
	var slider = new Swiper('.campus-slider', {
		slidesPerView: 3,
		roundLengths: true,
		loop: true,
		spaceBetween: 30,
		centeredSlides: true,
		loopAdditionalSlides: 30,
		speed: 400,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		autoplay: {
			enabled: true,
			delay: 6000
		},
		breakpoints: {
			'1600': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	
	/*------------------------------------------
	= program-slider
	-------------------------------------------*/
	var slider = new Swiper('.program-slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		roundLengths: true,
		loop: true,
		centeredSlides: true,
		loopAdditionalSlides: 30,
		speed: 400,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		navigation: {
			nextEl: '.xb-program-next',
			prevEl: '.xb-program-prev',
		},
		breakpoints: {
			'1600': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	/*------------------------------------------
	= testimonial slide
	-------------------------------------------*/
	var dcTestimonialSwiper = new Swiper(".testimonial-slider-nav", {
		loop: true,
		spaceBetween: 20,
		speed: 500,
		slidesPerView: 2,
		direction: 'vertical',
		navigation: {
			nextEl: ".xb-swiper-arrow-next",
			prevEl: ".xb-swiper-arrow-prev",
		},
	});
	var swiper2 = new Swiper(".testimonial-slider", {
		loop: true,
		spaceBetween: 10,
		effect: 'fade',
		navigation: {
			nextEl: ".xb-swiper-arrow-next",
			prevEl: ".xb-swiper-arrow-prev",
		},
		thumbs: {
			swiper: dcTestimonialSwiper,
		},
	});

	/*------------------------------------------
	= clg-testimonial slide
	-------------------------------------------*/
	var clgTestimonialSwiper = new Swiper(".clg-tes-slider_nav", {
		loop: true,
		spaceBetween: 20,
		speed: 500,
		slidesPerView: 5,
		navigation: {
			nextEl: ".tm-swiper-arrow-next",
			prevEl: ".tm-swiper-arrow-prev",
		},
		breakpoints: {
			'1600': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 5,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	});
	var swiper3 = new Swiper(".clg-testimonial-slider", {
		loop: true,
		spaceBetween: 10,
		navigation: {
			nextEl: ".tm-swiper-arrow-next",
			prevEl: ".tm-swiper-arrow-prev",
		},
		thumbs: {
			swiper: clgTestimonialSwiper,
		},
	});

	/*------------------------------------------
	= hs-testimonial slider
	-------------------------------------------*/
	var slider = new Swiper('.hs-testimonial-slider', {
		slidesPerView: 5,
		spaceBetween: 30,
		roundLengths: true,
		loop: true,
		loopAdditionalSlides: 30,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		speed: 400,
		breakpoints: {
			'1600': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	/*------------------------------------------
	= team slider
	-------------------------------------------*/
	var slider = new Swiper('.team-slider', {
		slidesPerView: 5,
		spaceBetween: 30,
		roundLengths: true,
		loop: true,
		loopAdditionalSlides: 30,
		autoplay: {
			enabled: true,
			delay: 6000
		},
		speed: 400,
		navigation: {
			nextEl: ".xb-program-next",
			prevEl: ".xb-program-prev",
		},
		breakpoints: {
			'1600': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	/*------------------------------------------
	= inhover active
	-------------------------------------------*/
	$(".xb-mouseenter").on('mouseenter', function () {
		$(".xb-mouseenter").removeClass("active");
		$(this).addClass("active");
	});
	$(".xb-mouseenter2").on('mouseenter', function () { 
		$(".xb-mouseenter2").removeClass("active");
		$(this).addClass("active");
	});

	/*------------------------------------------
	= magnificPopup
	-------------------------------------------*/
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	$('.popup-video').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-zoom-in',
	});

	/*------------------------------------------
	= Accordion Box
	-------------------------------------------*/
	if ($(".accordion_box").length) {
		$(".accordion_box").on("click", ".acc-btn", function () {
			var outerBox = $(this).parents(".accordion_box");
			var target = $(this).parents(".accordion");

			if ($(this).next(".acc_body").is(":visible")) {
				$(this).removeClass("active");
				$(this).next(".acc_body").slideUp(300);
				$(outerBox).children(".accordion").removeClass("active-block");
			} else {
				$(outerBox).find(".accordion .acc-btn").removeClass("active");
				$(this).addClass("active");
				$(outerBox).children(".accordion").removeClass("active-block");
				$(outerBox).find(".accordion").children(".acc_body").slideUp(300);
				target.addClass("active-block");
				$(this).next(".acc_body").slideDown(300);
			}
		});
	}

  	/*------------------------------------------
	= Blog Carousel
	-------------------------------------------*/
  var blogOneColCarousel = new Swiper(".blog_onecol_carousel", {
    loop: true,
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".b1cc-swiper-button-next",
      prevEl: ".b1cc-swiper-button-prev",
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".b1cc-swiper-pagination",
      clickable: true,
    },
  });

	/*------------------------------------------
	= isotop
	-------------------------------------------*/
	$('.grid').imagesLoaded(function () {
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: '.grid-item',
			}
		});

		// filter items on button click
		$('.program-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});
	});

	//for menu active class
	$('.program-menu button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	//  Countdown
	$('[data-countdown]').each(function () {

		var $this = $(this),
			finalDate = $(this).data('countdown');
		if (!$this.hasClass('countdown-full-format')) {
			$this.countdown(finalDate, function (event) {
				$this.html(event.strftime('<div class="single"><h1>%D</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Mins</p></div> <div class="single"><h1>%S</h1><p>Sec</p></div>'));
			});
		} else {
			$this.countdown(finalDate, function (event) {
				$this.html(event.strftime('<div class="single"><h1>%Y</h1><p>Years</p></div> <div class="single"><h1>%m</h1><p>Months</p></div> <div class="single"><h1>%W</h1><p>Weeks</p></div> <div class="single"><h1>%d</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Mins</p></div> <div class="single"><h1>%S</h1><p>Sec</p></div>'));
			});
		}
	});



})(jQuery);



