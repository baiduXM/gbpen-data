$(document).ready(function() {	

        var galleryTop = new Swiper('.gallery-top', {
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    spaceBetween: 10,
                });
                var galleryThumbs = new Swiper('.gallery-thumbs', {
                    spaceBetween: 10,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    touchRatio: 0.2,
                    slideToClickedSlide: true
                });
                galleryTop.params.control = galleryThumbs;
                galleryThumbs.params.control = galleryTop;

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
        //搜索按钮事件
            $('#sr_box').click(function(event) {
                $('.quickbar_search').addClass('search_show');
                $(".quickbar-opacity2").show()
            }); 
        

        //头部导航
        $('.swiper-container-nav').swiper({slidesPerView: 4,freeMode: true,nextButton: '.swiper-button-next-nav',prevButton: '.swiper-button-prev-nav'});
        
        //banner
        $('.swiper-container-banner').swiper({pagination: '.swiper-pagination-banner li',slidesPerView: 1,paginationClickable: true,spaceBetween: 30,autoplay:3500,autoplayDisableOnInteraction:false,nextButton: '.swiper-button-next-banner',prevButton: '.swiper-button-prev-banner'});
        
        //case
        $('.swiper-container-case').swiper({pagination: '.swiper-pagination-case li',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
                   
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
            $(this).toggleClass('close');
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
        // $(".size_a").click(function() {
        //     $(this).find('.font_list').slideToggle(300);
        //     $(this).toggleClass('close');
        // });

        $(".size").click(function() {
            $(this).find('.font_list').slideToggle(300);
        });
        
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

        
        $(".pro_list li:even").addClass('li_odd')

});