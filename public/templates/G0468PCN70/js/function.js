$(document).ready(function() {

        //获取地址，以及滑块定位
        var initial = $(".nav>ul>li.cu").position().left;

        $(".slideline").css({left:initial});
        $(".nav>ul>li").mouseover(function(){
            var leftPosition = $(this).position().left;
            $(".slideline").stop(true,false).animate({left:leftPosition}, 400);
        });
        $(".nav>ul").mouseleave(function(event) {
            $(".slideline").stop(true, true).animate({left:initial},400);
        });

        
		// banner轮播
        jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true, effect:"fold",delayTime:2000, trigger:"click",interTime:5500});

        // banner轮播
        jQuery(".case_slide").slide({mainCell:".bd ul",autoPlay:true, effect:"fold",delayTime:1000, trigger:"click",interTime:3500});

        //case_hover
        $(".case_eg a").hover(function() {
            $(this).parent().addClass('se_hover');
            //$(this).parent().addClass('se_hover hoverup');
        }, function() {
            $(this).parent().removeClass('se_hover');
            //$(this).parent().removeClass('se_hover hoverup');
        });

        //pro:hover
        $(".pro_list li a").hover(function() {
            //$(this).find('.pro_pic').addClass('pic_oopacity');
            $(this).find('.pro_opacity').stop(true, true).slideDown(400);
            $(this).find('.pro_info').stop(true, true).slideDown(400);
        }, function() {
            //$(this).find('.pro_pic').removeClass('pic_oopacity');
            $(this).find('.pro_opacity').stop(true, true).slideUp(400);
            $(this).find('.pro_info').stop(true, true).slideUp(400);
        });
        
        //产品详情页 多图轮播      
        //大图切换
        jQuery(".pro_image").slide({ titCell:".smallimg li", mainCell:".bigimg", effect:"fold", autoPlay:true,delayTime:200,trigger:"mouseover"});
        //小图左滚动切换
        jQuery(".pro_image .smallscroll").slide({ mainCell:"ul",delayTime:100,vis:3,effect:"leftLoop",autoPage:true,prevCell:".prev_det",nextCell:".next_det" });

        

    	//面包屑导航
        $(".here a:last-child").addClass('in');

        //侧边菜单栏 展开        
        $(".left_list .first li a").click(function() {
            $(this).addClass('cu1')
            $(this).parent().siblings().find('a').removeClass('cu1')
            $(this).parent().siblings().find('.second a').removeClass('cu2')
            $(this).parent().siblings().find('.erceng').slideUp();
            $(this).siblings('.erceng').slideToggle();
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

        $(".x_list li:odd").addClass(' animated fadeInLeft');
        $(".x_list li:even").addClass(' animated fadeInRight');

})