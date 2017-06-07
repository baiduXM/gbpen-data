$(document).ready(function() {
if (jQuery("body div").hasClass("main")) {
            jQuery('html,body').animate({ scrollTop: jQuery('.content').offset().top-100}, 600);
        }

	 // nav
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

	// banner js
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true,interTime:4000});
		// 下拉菜单
		// $(".nav>ul>li>a").click(function(){
		// 	$(this).parent().siblings().find(".subnav").slideUp()
		// 	$(this).siblings(".subnav").slideToggle()
		// 	})
			
		$(".first li a").click(function(){
			$(this).parent().siblings().find(".second").slideUp()
			$(this).siblings(".second").slideToggle()
		})
		$(".second li a").click(function(){
			$(this).parent().siblings().find(".third").slideUp()
			$(this).siblings(".third").slideToggle()
		})		

		$('.prolist li:nth-child(3n)').css('marginRight',0)
		$('.newsbox li:nth-child(2n) .nr').css("float","right")	
		$('.newsbox li:nth-child(2n) .pic').css("float","left")	
		$('.casebox ul li:nth-child(2),.casebox ul li:nth-child(3)').css("marginBottom","40px")	
		$('.casebox ul li a,.prolist li .pro-img a').hover(function(){
			$(this).find('.pichover').animate({top:0});
		},function(){
			$(this).find('.pichover').animate({top:"100%"});

		})

      $("#slt-one h3").click(function(){
        var ul=$("#slt-one .new");
        if(ul.css("display")=="none"){
          ul.slideDown();
        }else{
          ul.slideUp();
        }
      });
      $("#slt-one li").click(function(){
        var span=$(this).text();
        $("#slt-one h3").html(span);
        $("#slt-one .new").hide(); 
      });
		

})