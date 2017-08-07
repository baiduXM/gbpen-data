$(document).ready(function() {		

		// banner轮播
  	 	jQuery(".slider").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:500, trigger:"click",interTime:4000});        

        // 产品详情页 轮播
        jQuery(".pro_image").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:1000, trigger:"click",interTime:3500});

        //首页新闻中心 滚动
        jQuery(".news_data").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50,trigger:"click"});

        //面包屑导航
        $(".right_top a:last-child").addClass('in');

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

        //字数控制
        $(".kz").each(function(){
          var maxwidth=parseInt($(this).attr("data-limit"));
          if($(this).text().length>maxwidth){
          $(this).text($(this).text().substring(0,maxwidth));
          $(this).html($(this).html()+'...');
          }
        });



});