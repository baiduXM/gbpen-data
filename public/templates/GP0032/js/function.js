
$(document).ready(function(){

//实例一
	$("#menu li a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu li a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu li a").hover(function(){
		$(".out",this).stop().animate({'top':'48px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-48px'},250);
		$(".bg",this).stop().animate({'top':'-48px'},120);
	});
$('.topos_t li').mouseenter(function(){
	$(this).children('.left_list').show();
});
$('.topos_t li').mouseleave(function(){
	$(this).find('.left_list').hide();
});


// banner
/*鼠标移过，左右按钮显示*/
		jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
	jQuery(".pimgw").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});

})
