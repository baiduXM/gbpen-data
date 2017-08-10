$(document).ready(function() {		

		// banner轮播
  	 	jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:1000, trigger:"click",interTime:4000});        
        
        //新闻展示
        jQuery(".news_top").slide({mainCell:".bd ul",autoPlay:true, effect:"top",delayTime:500, trigger:"click",interTime:4000});        

        //案例展示
        jQuery(".case_data").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:3, trigger:"click",delayTime:300,interTime:2800});
        
        // 产品详情页 轮播
        jQuery(".pro_images").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:1000, trigger:"click",interTime:3500});

        //面包屑导航
        $(".here a:last-child").addClass('in');

        //侧边菜单栏 展开
        $(".left_list .first li a").click(function() {
        	$(this).addClass('cu1')
            $(this).parent().css("border-bottom", "1px solid #7db033");
            $(this).parent().siblings().css("border-bottom", "1px solid #ccc");
            $(this).parent().siblings().find('a').removeClass('cu1')
            $(this).parent().siblings().find('.second a').removeClass('cu2')
            $(this).parent().siblings().find('.second').slideUp();
        	$(this).siblings('.second').slideToggle();
        });
        $(".second li a").click(function() {
        	$(this).addClass('cu2')
            $(this).parent().css("border-bottom", "none");
            $(this).parent().siblings().css("border-bottom", "none");
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

        //字数控制
        $(".kz").each(function(){
          var maxwidth=parseInt($(this).attr("data-limit"));
          if($(this).text().length>maxwidth){
          $(this).text($(this).text().substring(0,maxwidth));
          $(this).html($(this).html()+'...');
          }
        });

        



});