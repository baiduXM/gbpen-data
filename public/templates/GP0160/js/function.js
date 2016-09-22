jQuery(document).ready(function(){




$('.ny-prolist li:nth-child(4n)').css('marginRight',0);
	$('.ny-prolist li a').hover(function() {
			$(this).children('h2').show();
		}, function() {
			$(this).children('h2').hide();
		});





});

