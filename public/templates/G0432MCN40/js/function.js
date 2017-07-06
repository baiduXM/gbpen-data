$(document).ready(function() {	

        //缩放
        function recalc(){
            var clientWidth = document.body.clientWidth;
            if(!clientWidth) {var clientWidth = $(window).width()};
            if (clientWidth > 640){clientWidth = 640;}
            document.documentElement.style.fontSize = 20 * (clientWidth / 320) + 'px';
        }
        recalc();
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ;
        window.addEventListener(resizeEvt,recalc,false);
        document.addEventListener('DOMContentLoaded',recalc,false);
        
        //index 背景轮播
        $('.swiper-container-banner').swiper({pagination: '.swiper-pagination-banner li',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
        //index 背景轮播
        //jQuery(".banner").slide({mainCell:".bd ul",autoPlay:true, effect:"left",delayTime:500, trigger:"click",interTime:4000});

        //头部导航
        $('.swiper-container-nav').swiper({slidesPerView: 4,freeMode: true,nextButton: '.swiper-button-next-nav',prevButton: '.swiper-button-prev-nav'});

        //回到顶部
        $(".totop a").click(function(){
            $("#quickbar-wrap-body").animate({scrollTop:0},600);
            //console.log($("#quickbar-wrap-body").scrollTop())
            return false;
        });

        //展开分类
        $(".classify").click(function() {
            $(this).parents().find('.class_list').slideToggle(300);
        });

        $(".class_list .first li a").click(function() {
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

        //字号
        $(".fontsize").click(function() {
            $(this).siblings('.font_list').slideToggle(300);
        });
        
        var multiple = (document.body.clientWidth/320)*20;
        var initial = parseFloat($(".det").css("fontSize"))/multiple;
        $(".font_list li").click(function() {
            var num = parseFloat($(".det").css("fontSize"))/multiple;
            var id = $(this).attr('id');
            switch (id) {
                case "bigger":
                    num += 0.05;
                    if (num>1.4) {num=1.4}
                    break;
                case "smaller":
                    num -= 0.05;
                    if (num<0.4) {num=0.4}
                    break;
                default:
                    num =initial
                    break;
            }
            $(".det").css({fontSize:num + "rem"})
            console.log($(".det").css("fontSize"))
        });

        // $(".bigger").click(function() {
        //     $(".det").css({
        //         fontSize: 0.75+"rem"
        //     });
        //     $(".font_list").slideToggle(300);
        // });
        // $(".medium").click(function() {
        //     $(".det").css({
        //         fontSize: 0.65+"rem"
        //     });
        //     $(".font_list").slideToggle(300);
        // });
        // $(".smaller").click(function() {
        //     $(".det").css({
        //         fontSize: 0.55+"rem"
        //     });
        //     $(".font_list").slideToggle(300);
        // });

        //产品详情页 多图轮播
        jQuery(".pro_pic").slide({mainCell:".bd ul",autoPlay:true, effect:"left", trigger:"click",delayTime:500,interTime:4000});
        

        //字数控制
        $(".kz").each(function(){
          var maxwidth=parseInt($(this).attr("data-limit"));
          if($(this).text().length>maxwidth){
          $(this).text($(this).text().substring(0,maxwidth));
          $(this).html($(this).html()+'...');
          }
        });



});