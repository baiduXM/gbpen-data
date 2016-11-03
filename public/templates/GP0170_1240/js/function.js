jQuery(function () {
        if (jQuery("body div").hasClass("article")) {
            jQuery('html,body').animate({ scrollTop: jQuery('.article').offset().top }, 600);
        }
    });






jQuery(document).ready(function(){




$('.ny-prolist li:nth-child(4n)').css('marginRight',0);
	$('.ny-prolist li a').hover(function() {
			$(this).children('h2').show();
		}, function() {
			$(this).children('h2').hide();
		});





});

