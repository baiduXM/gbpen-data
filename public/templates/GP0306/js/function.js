$(document).ready(function() {		

		// banner轮播 js
  	 	jQuery(".slider").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:500, trigger:"click",interTime:4000});

        //友情链接轮播
        jQuery(".link").slide({mainCell:".bd ul",autoPlay:true,autoPage:true, effect:"left", trigger:"click",vis:6,interTime:4000});

        if ($(".pictureSlider").length > 0) {
            Carousel.init($(".pictureSlider"));
        };

        //侧边菜单栏 展开
        $(".left_list .first li a").click(function() {
        	$(this).addClass('cu1')
            $(this).parent().siblings().find('a').removeClass('cu1')
            $(this).parent().siblings().find('.second a').removeClass('cu2')
            $(this).parent().siblings().find('.second').slideUp();
        	$(this).siblings('.second').slideToggle();
        });
        $(".second li a").click(function() {
        	$(this).addClass('cu2')
            $(this).parent().siblings().find('a').removeClass('cu2')
            $(this).parent().siblings().find('.third').slideUp();
        	$(this).siblings('.third').slideToggle();
        });



        //nav横向下拉菜单栏
        $("ul.one li").hover(function(){
        		$(this).addClass("cu")
        		$(this).find("ul.two").stop(false,true).slideDown("fast")
        		},function(){
        		$(this).removeClass("cu")
        		$(this).find("ul.two").stop(false,true).slideUp("fast")
        		})



});