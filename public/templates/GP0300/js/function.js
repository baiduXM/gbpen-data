jQuery(document).ready(function(){



    jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });



		
// 内页
	$(".first li a").click(function(){		
		$(this).next(".second").slideToggle(300);
		// return false;
		})	

});
