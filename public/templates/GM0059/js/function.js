$(document).ready(function() {  
    // 自适应
    $(window).resize(function() { 
         $('.swiper-container').height($('.swiper-slide>div').height());   
    })

    //计算.main的最小高度，保证footer在底部
    var min_height = $('body').height() - $('header').height() - $('.foot').height();
    $('.main').css('min-height', min_height + 'px');
    $('.home_main').css('min-height', min_height + 'px');

    function pageSlideOver() {
        $('.page-out').on('transitionend', 
        function() {
            $(this).removeClass('page-out');

        });
        $('.page-in').on('transitionend', 
        function() {
            $(this).removeClass('page-in');

        });

    }
    function foulpage() {
        var scope = ($(".scope").height() < ($(".wrap").height() - $(".fixed_top").height() - $(".foot").height()) ? ($(".wrap").height() - $(".fixed_top").height() - $(".foot").height()) : $(".scope").height());
        if ($(".scope").height() != scope) {
            $(".scope").height(scope);
        }

    }
    foulpage();    

    //隐藏导航跟wrap的切换
    $("#header_menu").click('touchstart', 
    function() {
        $(".public-bg1").removeClass("page-prev").addClass("page-in");
        $("#quickbar-wrap").removeClass(".page-active").addClass("page-next page-in")
        $(".quickbar-opacity2").css('display', 'block');
        pageSlideOver();


    })

    $("#page_menu").click('touchstart', 
    function() {
        $(".page_search").addClass("page_right page-out")
        $(".wrap").removeClass("page_left").addClass("page-next page-in")
        $(".class").removeClass("page-prev").addClass("page-in");
        // $(".opacity2").show()
        pageSlideOver();


    })

    // 控制字体大小
    $(".font_btn").click(function() {
        $(".font").slideToggle();
    })
     // 字体大小控制
    $(".big").click(function() {
        $('.wrap').attr('class',"wrap page-active font_big")
    })
    $(".normal").click(function() {
        $('.wrap').attr('class',"wrap page-active font_normal")
    })
    $(".small").click(function() {
        $('.wrap').attr('class',"wrap page-active font_small")

    })

    // 返回顶部
     $("#to_top").click('touchstart', function() {
        console.log('text');
        var speed=300;//滑动的速度
        // $('html,body').animate({scrollTop: 0}, speed);
        /*
        当QuickBar非自定义时,返回顶部事件应取$('#quickbar-wrap-body')dom元素
         */
        $('#quickbar-wrap-body').animate({scrollTop: 0}, speed);
        return false;
    })

     /*
     classify_btn
      */     
     $(".classify_btn").click(function() {
            // $("#up").toggle()
            // $("#down").toggle()
            $("ul.nav").slideToggle();
            // $(".font").slideUp()
        })



     //  首页轮播图 
    if($('.swiper_container').length){
        var swiper = new Swiper('.swiper_container') ; 
    }
     //首页图片列表
     if($('body').width() >= 480){
        var swiper = new Swiper('.swiper_container_1',{        
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay : 5000
        }); 
     } 
     else{
        var swiper = new Swiper('.swiper_container_1',{        
            slidesPerView: 2,
            spaceBetween: 5,
            loop: true,
            autoplay : 5000
        }); 
     }
    //产品详情页轮播图   
    if($('.swiper-container_1').length){
        var swiper = new Swiper('.swiper-container_1',{        
            loop: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next',
            autoplay : 3000
        }); 
     } 
    
});
function loader (argument) {
    setTimeout(function(){
        $('#quickbar').addClass('loaded');
        $(".fakeloader").fadeOut();
    }, 300);
}
window.onload = function () {
    loader();
};