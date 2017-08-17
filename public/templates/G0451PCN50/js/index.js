$(document).ready(function () {

    $(".section3_r").css("height",$(".footer").height()+"px");



    var $banner = $(".banner"); //轮播
    var $sec1 = $(".section1"); //sec1
    var $sec2 = $(".section2"); //sec2
    // 关于我们栏目看不全时：
    var windowHeight = $(window).height();
    var windowGap = 0;
    var infoTop = 156;
    if (windowHeight < 754) {
        windowGap = 754 - windowHeight;
        infoTop = 156 - windowGap
    }
    var sec1ScrollTop = $sec1.offset().top - 156 + windowGap;
    var sec2ScrollTop = $sec2.offset().top - 156;
    /*  var cc = d.offset().top - 110;
    var dd = d.offset().top - 110;*/
    $(window).scroll(function (event) {
        var scrollTop = $(this).scrollTop();
        if (scrollTop > sec1ScrollTop+(1093-754)) {
            $banner.css({filter: "Alpha(opacity=0)", opacity: "0"});
            // $picture.css({display:"none"});
            $sec1.css({position: "fixed", top: infoTop-(1093-754)})
        } else {
            $banner.css({filter: "Alpha(opacity=100)", opacity: "100"});
            // $picture.css({display:"block"});
            $sec1.css({position: "relative", top: "0px"})
        }
         if (scrollTop > sec2ScrollTop+(1000-754)) {
             $sec1.css({filter:"Alpha(opacity=0)",opacity:"0"});
             // $infomation.css({display:"none"});
             $sec2.css({position:"fixed",top: infoTop-(1000-754)})
             } else{
             $sec1.css({filter:"Alpha(opacity=100)",opacity:"100"});
             // $infomation.css({display:"block"});
             $sec2.css({position:"relative",top:"0px"});
         }
    });



});