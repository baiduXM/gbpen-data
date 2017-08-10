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

        //隐藏导航跟wrap的切换
        $(".head_menu").click(function(){
            $("#quickbar-navs").removeClass("page-prev").addClass("page-in");
            $("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
            $(".quickbar-opacity2").show();
            return false;
        });

        
        //banner
        $('.swiper-container-banner').swiper({pagination: '.swiper-pagination-banner li',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
        

        //产品详情页
        $('.swiper-container-det').swiper({slidesPerView: 1,nextButton: '.swiper-button-next-det',prevButton: '.swiper-button-prev-det',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
        
        //头部导航
        $('.swiper-container-nav').swiper({slidesPerView: 4,freeMode: true,nextButton: '.swiper-button-next-nav',prevButton: '.swiper-button-prev-nav'});

        //回到顶部
        $(".totop a").click(function(){
            //$("body").animate({scrollTop:0},600);
            $("#quickbar-wrap-body").animate({scrollTop:0},600);
            //console.log($("body").scrollTop())
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
        $(".bigger").click(function() {
            $(".det").css({
                fontSize: 1.2+"rem"
            });
            //$(".font_list").slideToggle(300);
        });
        $(".medium").click(function() {
            $(".det").css({
                fontSize: 0.9+"rem"
            });
            //$(".font_list").slideToggle(300);
        });
        $(".smaller").click(function() {
            $(".det").css({
                fontSize: 0.6+"rem"
            });
            //$(".font_list").slideToggle(300);
        });


        //字数控制
        $(".kz").each(function(){
          var maxwidth=parseInt($(this).attr("data-limit"));
          if($(this).text().length>maxwidth){
          $(this).text($(this).text().substring(0,maxwidth));
          $(this).html($(this).html()+'...');
          }
        });

});