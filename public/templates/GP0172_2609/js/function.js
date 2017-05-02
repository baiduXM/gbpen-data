

$(document).ready(function() {

window.onload=function(){
function adaption(selector,li_w,li_h){
		$(selector).each(function(i){
		img_i=$(selector).eq(i).find("img")
	    if(img_i.width() >= li_w&&img_i.width()>=img_i.height()){
          img_i.width("100%");}
        else if(img_i.height() > li_h){
         img_i.height("100%");}
	   var img_h=img_i.height()	
       var img_w=img_i.width()												
       var mar_t=Math.floor((li_h-img_h)*0.5);
       var mar_l=Math.floor((li_w-img_w)*0.5);
  	   $(this).css({"padding-top":mar_t+"px","padding-left":mar_l+"px"})
	   $(this).width($(this).width()-mar_l);
	   $(this).height($(this).height()-mar_t);
		})
	}
adaption(".picBox ul li .pic",400,400)
}
	 // nav
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

	 
	 // $('.menubar').click(function(){
	 // 	$('.nav-wrap').show();
	 // })
	 // $('.close').click(function(){
	 // 	$('.nav-wrap').hide()
	 // })
	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
			jQuery(".txtMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:1,interTime:50});
    
    //    /*鼠标移过，左右按钮显示*/
    // jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
    // /*SuperSlide图片切换*/
    // jQuery(".focusBox").slide({ mainCell:".pic",effect:"leftLoop", autoPlay:true, delayTime:600, trigger:"click"});


		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
		// $('.picMarquee-left .bd ul li').hover(function(){
		// 	$(this).find('.title').animate({height:40},"slow");
		// },function(){
		// 	$(this).find('.title').animate({height:0},"slow");			
		// })
// about 
		// $('.morebtn a').hover(function() {
		// 	$(this).prev('h2').hide();
		// }, function() {
		// 	$(this).prev('h2').show();
		// });

        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5,trigger:"click",interTime:2500});
        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

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