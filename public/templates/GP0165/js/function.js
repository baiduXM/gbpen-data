$(document).ready(function() {

	 // nav
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
			jQuery(".txtMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:1,interTime:50});

		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});

		// 下拉菜单
		$(".nav>ul>li>a").click(function(){
			$(this).parent().siblings().find(".subnav").slideUp()
			$(this).siblings(".subnav").slideToggle()
			})
			
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
		})
		$(".second li a").click(function(){
			$(this).parent().siblings().find(".third").slideUp()
			$(this).siblings(".third").slideToggle()
		})		


		$('.sec-nav ul li:nth-child(3n),.pro-list li:nth-child(3n),.prolist li:nth-child(3n)').css('marginRight',0)	


})
