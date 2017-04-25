jQuery(document).ready(function($) {

        jQuery(".picScroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click",interTime:4000});
        
        jQuery(".slider").slide({mainCell:".bd ul",autoPlay:true, effect:"left", trigger:"click",interTime:4000});

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



        //面包屑导航
        $(".here a:last-child").addClass('front');


        
        /*下拉列表*/
        $(".selecter").click(function() {
                /* Act on the event */
                $(this).find('ul.options').stop(true, true).slideToggle(100);
        });


      // 产品展示
          if ($(".pic_l img").length < 2) {
              $(".pic_r").css({display:"none"});
          };
          jQuery(".pic").slide({ titCell:".pic_Scroll .bd ul li", mainCell:".pic_l ul", effect:"left",interTime:2500, autoPlay:true,delayTime:200, trigger:"click"
                , startFun:function(i){
                  $(".pic_Scroll .bd ul li:eq("+i+")").find('em').css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"}, 400);
                  $(".pic_Scroll .bd ul li:eq("+i+")").siblings().find('em').css({filter:"Alpha(opacity=50)"}).animate({opacity:"0.5"}, 400);
              }
          });
        

        //小图左滚动切换

        jQuery(".pic_Scroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:3,trigger:"click",interTime:4000});
      
    $(".kz").each(function(){
      var maxwidth=parseInt($(this).attr("data-limit"));
      if($(this).text().length>maxwidth){
      $(this).text($(this).text().substring(0,maxwidth));
      $(this).html($(this).html()+'...');
      }
    });
       
});
