$(document).ready(function() {


	 // nav
	 $('.menubar').click(function(){
	 	$('.nav-wrap').show();
	 })
	 $('.close').click(function(){
	 	$('.nav-wrap').hide()
	 })
	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
    
    //    /*鼠标移过，左右按钮显示*/
    // jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
    // /*SuperSlide图片切换*/
    // jQuery(".focusBox").slide({ mainCell:".pic",effect:"leftLoop", autoPlay:true, delayTime:600, trigger:"click"});

			 // $('.down').click(function(){
			 //  $('html,body').animate({scrollTop:$('body').offset().top}, 800);
			 // });
			 $('.down').click(function(){
			  $('html,body').animate({scrollTop: '800px'}, 800);
			 });

// about 
		$('.morebtn a').hover(function() {
			$(this).prev('h2').hide();
		}, function() {
			$(this).prev('h2').show();
		});

        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5,trigger:"click",interTime:2500});
        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

		// 下拉菜单
		// $(".nav>ul>li>a").click(function(){
		// 	$(this).parent().siblings().find(".subnav").slideUp()
		// 	$(this).siblings(".subnav").slideToggle()
		// 	})
		 var timer=null;
		$('.nav>ul>li>a,.subnav').hover(function ()
		  {
		  clearTimeout(timer);
		     // $('.area-hover').show();
		     $(this).parent().find('.subnav').show();
		   },function(){
		  timer=setTimeout(function(){$('.subnav').hide();},50);});
			
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
		})
		$(".second li a").click(function(){
			$(this).parent().siblings().find(".third").slideUp()
			$(this).siblings(".third").slideToggle()
		})		


		$('.pro-list li:nth-child(3n),.prolist li:nth-child(3n)').css('marginRight',0)	
		$('.prolist li a').hover(function(){
			$(this).find('h2').animate({height:"38px"});
		},function(){
			$(this).find('h2').animate({height:"0px"});

		})
		$('.pro-list li a,.picScroll-left .bd ul li a').hover(function() {
			$(this).children('.proimg').children('h3').show();
		}, function() {
			$(this).children('.proimg').children('h3').hide();
			
		})

})