$(document).ready(function() {


	 // nav
		jQuery(".nav").slide({ 
				type:"menu", //效果类型
				titCell:".m", // 鼠标触发对象
				targetCell:".subnav", // 效果对象，必须被titCell包含
				delayTime:0, // 效果时间
				triggerTime:0, //鼠标延迟触发时间
				returnDefault:true  //返回默认状态
			});
	 

	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
    
    //    /*鼠标移过，左右按钮显示*/
    // jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
    // /*SuperSlide图片切换*/
    // jQuery(".focusBox").slide({ mainCell:".pic",effect:"leftLoop", autoPlay:true, delayTime:600, trigger:"click"});


		jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:2,trigger:"click"});


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


		$('.pro ul li:nth-child(4),.pro-list li:nth-child(3n),.prolist li:nth-child(3n)').css('marginRight',0)
		$(".nav .sub li:nth-child(2n) span").hide();	
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