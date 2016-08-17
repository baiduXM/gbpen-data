$(document).ready(function() {

// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});


	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});    
    //    /*鼠标移过，左右按钮显示*/
    // jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
    // /*SuperSlide图片切换*/
    // jQuery(".focusBox").slide({ mainCell:".pic",effect:"leftLoop", autoPlay:true, delayTime:600, trigger:"click"});



// about 
		$('.morebtn a').hover(function() {
			$(this).prev('h2').hide();
		}, function() {
			$(this).prev('h2').show();
		});

        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:5,trigger:"click",interTime:2500});
        // jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3});

		// 下拉菜单
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
			})
			

		$('..prolist li:nth-child(3n)').css('marginRight',0)	
		$('.paging a').last().css('marginRight','30px');
		$('.pro-list li a,.picScroll-left .bd ul li a').hover(function() {
			$(this).children('.proimg').children('h3').show();
		}, function() {
			$(this).children('.proimg').children('h3').hide();
			
		})



})