jQuery(document).ready(function(){



    // jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });

// $('.ny-prolist li:eq(2)').css('marginRight',0);
// $('.ny-prolist li:eq(5)').css('marginRight',0);
// $('.ny-prolist li:eq(8)').css('marginRight',0);

$('.ny-prolist li:nth-child(3n)').css('marginRight',0);
	$('.ny-prolist li a').hover(function() {
			$(this).children('h2').show();
		}, function() {
			$(this).children('h2').hide();
		});
// 内页
	// $(".first li a").click(function(){		
	// 	$(this).next(".second").slideToggle(300);
	// 	// return false;
	// 	})	




});
