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
$('[placeholder]').focus(function() { 
var input = $(this); 
if (input.val() == input.attr('placeholder')) { 
input.val(''); 
input.removeClass('placeholder'); 
} 
}).blur(function() { 
var input = $(this); 
if (input.val() == '' || input.val() == input.attr('placeholder')) { 
input.addClass('placeholder'); 
input.val(input.attr('placeholder')); 
} 
}).blur(); 
$('[placeholder]').parents('form').submit(function() { 
$(this).find('[placeholder]').each(function() { 
var input = $(this); 
if (input.val() == input.attr('placeholder')) { 
input.val(''); 
} 
}) 
}); 

