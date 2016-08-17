//отправка формы аяксом с файлами
(function($) {
	$.fn.serializefiles = function() {
	    var obj = $(this);
	    /* ADD FILE TO PARAM AJAX */
	    var formData = new FormData();
	    $.each($(obj).find("input[type='file']"), function(i, tag) {
	        $.each($(tag)[0].files, function(i, file) {
	            formData.append(tag.name, file);
	        });
	    });

	    var params = $(obj).serializeArray();
	    $.each(params, function (i, val) {
	        formData.append(val.name, val.value);
	    });

	    return formData;
	};
})(jQuery);

jQuery(function($){
	$('#main_menu a').addClass('mdl-navigation__link');

	if ($('#map-1').length)
	$(window).resize(function(){
	 	$('#map-1').attr('style','');
	 	$('#map-2').attr('style','');
	 	initMap();
	});
	$('#guru-carousel-1').owlCarousel({
		items: 3,
		autoplay: 3000,
		autowidth:true,
		responsive:{
			0:{
	            items:1,
	            nav:false
	        },
	        480:{
	            items:2,
	            nav:false
	        },
	        840:{
	            items:3,
	            nav:false,
	            loop:true
	        }
	    }
	});

	if ($(window).width()>600){

		$('#guru-carousel').owlCarousel({
			navText: ['<div class="arrow-right"></div>', '<div class="arrow-left"></div>'],
			loop: true,
	        nav: true,
	        owl2row: true,
	        owl2rowTarget: 'item', 
	        owl2rowContainer: 'guru-item',
	        owl2rowDirection: 'utd', 
	        responsive: {
	            0: {
	                items: 1
	            },
	            600: {
	                items: 2
	            },
	            1000: {
	                items: 3
	            }
	        }
		});
	}else{
		$('#guru-carousel').removeClass('owl-carousel');
	}
	var owl = $('#games-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 30,
		autowidth:true,
        nav: true,
		navText: ['<div class="arrow-right-games"></div>', '<div class="arrow-left-games"></div>'],
        owl2row: true,
        owl2rowTarget: 'item', 
        owl2rowContainer: 'games-item',
        owl2rowDirection: 'utd', 
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2,
            }
        }
    });

	$("#phone").mask("+7 (999) 999-9999");

	$('.get_form').click(function(){
		$('.get_study').css('width', '420px');
		if ($(window).width()<400)
			$('.get_study').css('width', '320px');
		$(this).hide();
	});
	$('.supsystic-table tr td').each(function(){
		var content = $(this).data('original-value');
		if (content == '-') {
			$(this).addClass('empty');
		}
	});
	$('.supsystic-table tr td:not(.empty)').click(function(){
		$('.get_study').css('width', '420px');
		if ($(window).width()<400)
			$('.get_study').css('width', '320px');
	})

	$('.close__form').click(function(){
		$('.get_study').css('width', '0');
		$('.get_form').show();
	});
	$('.close__header').click(function(){
		$('.mdl-layout__drawer').removeClass('is-visible');
		$('.mdl-layout__obfuscator').removeClass('is-visible');
	});


	$(".contacts_info").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
		top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 700,function(){
			$('#name').focus();
		});
	});

	$( "#order_form" ).on( "submit", function( event ) {
	event.preventDefault();
	
	var formData = $(this).serializefiles();
		$.ajax
	    ({
			type: "POST",
			url: '/wp-content/themes/nashestvie/order.php',
            cache: false,
            contentType: false,
            processData: false,
		    data: formData,
			success: function(data){
				$('.out').html(data).slideDown(600);
			},
			error: function(error){
				console.error('Не могу получить данные: ' + error);
				$('.out').html(error).slideDown(600);
			}
	    });
    });

    $('#video-1').on('canplay', function () {
	  this.play();
	});
	$('#video-2').on('canplay', function () {
	  this.play();
	});
	$(window).on('mousewheel', function(event) {
    	delta = parseInt(event.originalEvent.wheelDelta || -event.originalEvent.detail);
	    if (delta >= 0) {
	      $('.arrow-right').click();
	    } else {
	      $('.arrow-left').click();
	    }
	  });

	$(window).on('load', function () {
	    var preloader = $('#preloader'),
	        spinner   = preloader.find('.preloader__icon');
	    spinner.fadeOut();
	    preloader.delay(350).fadeOut('slow');
	});
});
