$(document).ready(function() {

        //获取地址，以及滑块定位
        //var initial = $(".hd_news>ul>li.on").position().left;
        //var initial = 0;

         //$(".liner").css({left:initial});
        // $(".liner").stop(true, true).animate({left:initial},400);

        // $(".hd_news>ul>li").mouseover(function(){
        //     var leftPosition = $(this).position().left;
        //     $(".liner").stop(true,false).animate({left:leftPosition}, 400);
        // });
        // $(".hd_news>ul").mouseleave(function(event) {
        //     $(".liner").stop(true, true).animate({left:initial},400);
        // });

        
		// banner轮播
        jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true, effect:"fold",delayTime:2000, trigger:"click",interTime:5500});

        //今日要闻
        jQuery(".radio").slide({mainCell:".bd_radio ul",autoPlay:true, effect:"topLoop",delayTime:500, trigger:"click",interTime:4000});

        //首页选项卡
        jQuery(".product").slide({titCell:".hd_pro li.pro_li",mainCell:".bd_pro", effect:"fold"});
        jQuery(".about_data").slide({titCell:".hd_about li",mainCell:".bd_about", effect:"fold"});
        jQuery(".case_data").slide({titCell:".hd_case li",mainCell:".bd_case", effect:"fold"});
        jQuery(".news").slide({titCell:".hd_news li",mainCell:".bd_news", effect:"fold"});

        // 制作工艺轮播
        jQuery(".made").slide({mainCell:".bd ul",autoPlay:true, effect:"leftLoop",delayTime:300, trigger:"click",interTime:3000});
        
        // pro_det
        jQuery(".pro_image").slide({mainCell:".bd ul",autoPlay:true, effect:"leftLoop",delayTime:300, trigger:"click",interTime:2500});

        //
        //$(".pro_card ul li img").addClass('animated bounceIn')

    	//面包屑导航
        $(".here a:last-child").addClass('in');

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

        $(".wx a").click(function(event) {
            $(this).siblings('.erweima').slideToggle("fast")
        });
        // $(".wx").click(function(event) {
        //     $(this).find(".erweima").stop(false,true).slideToggle("fast");
        // });

        //pro:hover
        $(".pro_card ul li a").hover(function() {
            $(this).find('.pro_hover').stop(true, true).slideDown(400);
        }, function() {
            $(this).find('.pro_hover').stop(true, true).slideUp(400);
        });
        
        //case:hover
        $(".case_card li a").hover(function() {
            $(this).find('.case_hover').stop(true, true).slideDown(400);
        }, function() {
            $(this).find('.case_hover').stop(true, true).slideUp(400);
        });

        //about_pic:hover
        // $(".about_pic").hover(function() {
        //     $(this).find('.about_hover').stop(true, true).slideDown(400);
        //     $(this).find('.enlarge').stop(true, true).slideDown(400);
        // }, function() {
        //     $(this).find('.about_hover').stop(true, true).slideUp(400);
        //     $(this).find('.enlarge').stop(true, true).slideUp(400);
        // });

        // //erweima
        // $(".follow li.wx").hover(function() {
        //     $(this).find('.erweima').stop(true, true).slideDown(250);
        // }, function() {
        //     $(this).find('.erweima').stop(true, true).slideUp(250);
        // });

	    // //产品详情页 多图轮播      
     //    //大图切换
     //    jQuery(".case_image").slide({ titCell:".smallimg li", mainCell:".bigimg", effect:"fold", autoPlay:true,delayTime:200,trigger:"mouseover"});
     //    //小图左滚动切换
     //    jQuery(".case_image .smallscroll").slide({ mainCell:"ul",delayTime:100,vis:4,effect:"top",autoPlay:true,autoPage:true,prevCell:".prev_case",nextCell:".next_case" });

})