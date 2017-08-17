$(document).ready(function() {		

		// banner轮播
  	 	jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:1000, trigger:"click",interTime:4000});        
        
        //left_class 单击向上展开
        $(".classify").click(function(event) {
            $(this).find('ul.classify_list').slideToggle();
        });
        
        //nav横向下拉菜单栏
        $("ul.one li").hover(function(){
             $(this).addClass("cu")
             $(this).find("ul.two").stop(false,true).slideDown("fast")
             },function(){
             $(this).removeClass("cu")
             $(this).find("ul.two").stop(false,true).slideUp("fast")
             })

        //侧边菜单栏 展开
        // $(".left_list .first li a").click(function() {
        //     $(this).addClass('cu1')
        //     $(this).parent().siblings().find('a').removeClass('cu1')
        //     $(this).parent().siblings().find('.second a').removeClass('cu2')
        //     $(this).parent().siblings().find('.second').slideUp();
        //     $(this).siblings('.second').slideToggle();
        // });

        //点击二级展开三级
        $(".second li a").click(function() {
            $(this).addClass('cu2')
            $(this).parent().siblings().find('a').removeClass('cu2')
            $(this).parent().siblings().find('.third').slideUp();
            $(this).siblings('.third').slideToggle();
        });
        //经过一级下拉二级
        $(".left_list .first li").hover(function() {            
             $(this).find('a').first().addClass("cu1")
             $(this).find("ul.second").stop(false,true).slideDown("fast")
         }, function() {
             $(this).find('a').first().removeClass("cu1")
             $(this).find("ul.second").stop(false,true).slideUp("fast")
         });


        //教师团队
        jQuery(".picFocus").slide({mainCell:".bd_jd ul",autoPlay:true,effect:"left",vis:3});
        jQuery(".teamslider").slide({mainCell:".bd ul",autoPlay:true, effect:"fold",delayTime:1500, trigger:"click",interTime:5500});        
                  
        // 产品详情页 轮播
        jQuery(".pro_image").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:1000, trigger:"click",interTime:3500});

        //面包屑导航
        $(".here a:last-child").addClass('in');


        //字数控制
        $(".kz").each(function(){
          var maxwidth=parseInt($(this).attr("data-limit"));
          if($(this).text().length>maxwidth){
          $(this).text($(this).text().substring(0,maxwidth));
          $(this).html($(this).html()+'...');
          }
        });

});