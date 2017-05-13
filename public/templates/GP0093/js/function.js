$(document).ready(function() {

	$(".menu>ul>li:last-child").css({background:'none'});

//实例一
	$("#menu>ul>li>a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu>ul>li>a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu>ul>li").hover(function(){
		$(".out",this).stop().animate({'top':'45px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
		$(this).find('.nav_list').stop(true, true).slideDown(300).prev('a').addClass('menu_in');
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-45px'},250);
		$(".bg",this).stop().animate({'top':'-45px'},120);
		$(this).find('.nav_list').slideUp(300).prev('a').removeClass('menu_in');
	});

	/*SuperSlide图片切换*/
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:600, trigger:"click"});

// 编辑框
	$("ul.first a").click(function(event) {
		if ($(this).next("ul").length > 0) {
			
			var a=$(this);
			var thisname = a.attr('class');
			a.parent().siblings().find("ul").slideUp(300).prev("a").removeClass();
			if (thisname == null || thisname == 0) {
				a.next("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prev("a").removeClass();
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box_on");
						break;
					default:
						a.addClass("box_in");
				}
			}else{
				a.removeClass().next('ul').slideUp(300);
				a.next('ul').find('a').removeClass().next('ul').slideUp(300);
			};
			return false;
		};
	});

// 产品图片
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});	
});