$(document).ready(function() {

// 大图切换
    jQuery("#banner").slide({mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"click",mouseOverStop:false,interTime:7500});

// 新闻列表
    $("a.unfold").click(function(event) {
        if ($(this).hasClass('shrink')) {
            $(this).removeClass('shrink');
            $(".press").animate({right:"-308px"}, 300);
        } else{
            $(this).addClass('shrink');
            $(".press").stop(true, true).animate({right:"0px"}, 300);
        };
    });
    jQuery(".roll").slide({mainCell:"ul",autoPage:true,effect:"top",autoPlay:true});

// 产品菜单
    $(".menu").hover(function() {
        $(this).stop(true, true).animate({left:"-30px"}, 500);
    }, function() {
        $(this).animate({left:"-80px"}, 400);
        $(".menu li").removeClass('largen').animate({width: "100px",height: "30px",marginTop:"0px"}, 300);
        $(".menu li .menuinfo").animate({top:"30px"}, 300);
        $(".menu li p").animate({marginTop:"0px"}, 300);
    });
    
    $(".menu li").hover(function() {
        $(this).stop(true, true).animate({width: "186px",height: "154px",marginTop:"-50px"}, 400);
        $(this).find('.menuinfo').stop(true, true).animate({top:"0px"}, 300);
        $(this).find('p').stop(true, true).animate({marginTop:"-30px"}, 300);
    }, function() {
        $(this).stop(true, true).animate({width: "100px",height: "30px",marginTop:"0px"}, 300);
        $(this).find('.menuinfo').animate({top:"30px"}, 300);
        $(this).find('p').animate({marginTop:"0px"}, 300);
    });

});
