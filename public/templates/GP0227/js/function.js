$(document).ready(function() {


	 // nav
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
	// pro js
		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});

// 返回顶部
		$(".back").click(function(){$("html,body").animate({scrollTop :0}, 800)})
		// $('.morebtn a').hover(function() {
		// 	$(this).prev('h2').hide();
		// }, function() {
		// 	$(this).prev('h2').show();
		// });

        
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
		// $('.prolist li a').hover(function(){
		// 	$(this).find('h2').animate({height:"38px"});
		// },function(){
		// 	$(this).find('h2').animate({height:"0px"});

		// })
		// $('.pro-list li a,.picScroll-left .bd ul li a').hover(function() {
		// 	$(this).children('.proimg').children('h3').show();
		// }, function() {
		// 	$(this).children('.proimg').children('h3').hide();
			
		// })

})
$(function () {
	
	var winw = parseInt($(window).width());
	// $('.menu .nav .box').css({'padding-left':(winw-960)/2,'padding-right':(winw-960)/2,'margin-left':-(winw-960)/2});
	// $('.menu .nav .box ul').css({'padding-left':(winw-960)/2,'padding-right':(winw-960)/2,'margin-left':-(winw-960)/2});
	
	var navLi=$(".menu .nav li");
	navLi.mouseover(function () {
		$(this).find("a").addClass("current");
		$(this).find(".box").stop().slideDown(200);
	})
	navLi.mouseleave(function(){
		$(this).find("a").removeClass("current");
		$(this).find(".box").stop().slideUp(200);
	})
	// console.log($('.nav>li').size())

})