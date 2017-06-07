$(document).ready(function () {

    /* 云（一） */
    byun_o();
    setInterval(function () { byun_o(); }, 1200);
    function byun_o(){
        $(".byun1").animate({left:"1920px"}, 40000,"linear",function(){
            $(this).css({left:"-162px"});
        });
    }

    /* 云（二） */
    byun_t();
    setInterval(function () { byun_t(); }, 1200);
    function byun_t(){
        $(".byun2").animate({left:"1920px"}, 80000,"linear",function(){
            $(this).css({left:"-118px"});
        });
    }


    /* 鸟 */
    var birdnum = 0;
    setInterval(function () {
        birdnum++;
        birdnum%=4;
       $(".lamp").children().eq(birdnum).addClass("den").siblings().removeClass("den");
    },1000);

    bird();
    var timer = setInterval(function () { bird(); }, 10000);
    function bird(){
        $(".bird").animate({top:"70px","left":"1000px"}, 2000,"linear",function(){
            $(this).animate({top:"60px","left":"983px"}, 2000,"linear",function(){
                $(this).animate({top:"50px","left":"1000px"}, 2000,"linear",function(){
                    $(this).animate({top:"40px","left":"983px"}, 2000,"linear", function () {
                        $(this).animate({top:"30px","left":"1000px"}, 2000,"linear");
                    });
                });
            });
        });
    }




    /* 飞船(一) */
    airship_o();
    setInterval(function () { airship_o(); }, 80000);
    function airship_o() {
        $(".airship1").animate({left: "1260px"}, 40000, "linear", function () {
            $(this).animate({left: "783px"}, 40000, "linear");
        });
    }


    /* 飞船(二) */
    airship_t();
    setInterval(function () { airship_t(); }, 80000);
    function airship_t() {
        $(".airship2").animate({right: "50%",top:"700px"}, 40000, "linear", function () {
            $(this).animate({right: "90%",top:"460px"}, 40000, "linear", function () {
                $(this).animate({right: "50%",top:"50px"}, 40000, "linear", function () {
                    $(this).animate({right: "232px",top:"350px"}, 40000, "linear");
                });
            });
        });
    }


    /* 问号 */
    wenhao();
    setInterval(function () { wenhao(); }, 1200);
    function wenhao() {
        if($(".byun1").offset().left >= 180 && $(".byun1").offset().left<=360 ){
            $(".wh").addClass("shake");
            setTimeout(function () {
                $(".wh").removeClass("shake");
            },10000);
        }
    }
    $(".wh").hover(function () {
        $(".wh").addClass("shake");
        setTimeout(function () {
            $(".wh").removeClass("shake");
        },1000);
    });




    /* 感叹号 */
    gth();
    setInterval(function () { gth(); }, 1200);
    function gth() {
        if($(".byun1").offset().left >= 250 && $(".byun1").offset().left<=450 ){
            $(".gth").addClass("shake1");
            setTimeout(function () {
                $(".gth").removeClass("shake1");
            },10000);
        }
    }
    $(".gth").hover(function () {
        $(".gth").addClass("shake1");
        setTimeout(function () {
            $(".gth").removeClass("shake1");
        },1000);
    });



    /* pro */
    pro();
    function pro() {
        $(".pro_list").children("li").eq(1).find(".pro_sjx").css("left","200px");
        $(".pro_list").children("li").eq(2).find(".pro_sjx").css("left","350px");

        $(".pro .content ul").children("li").eq(0).addClass("po");

         $(".pro .title ul").children("li").eq(0).hover(function () {
         $(".pro .content ul").children("li").eq(0).addClass("po").siblings().removeClass("po");
         });
         $(".pro .title ul").children("li").eq(1).hover(function () {
         $(".pro .content ul").children("li").eq(1).addClass("po").siblings().removeClass("po");
         });
         $(".pro .title ul").children("li").eq(2).hover(function () {
         $(".pro .content ul").children("li").eq(2).addClass("po").siblings().removeClass("po");
         });
    }

    /* more的hover */
    mouseover();
    function mouseover() {
        $(".mouse").on("mouseenter", function () {
            var ani =  $(this).children('.animated');
            ani.addClass('rubberBand');
            ani.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                ani.removeClass('rubberBand');
            });
        });
    }


    /* news */
    news();
    function news() {
        var mySwiper = new Swiper('.swiper-container1',{
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 4000,
            slidesPerView: 2,
            spaceBetween: 0,
            mode: 'vertical'
        })
    }


    /* link */
    link();
    function link() {
        $(".link>li").mouseenter(function () {
            $(this).siblings().find(".m1").stop();
            $(this).siblings().find(".m2").stop();
            $(this).find(".m1").animate({"top":"-100px"},200, function () {
                $(this).css({"top":"0"});
            });
            $(this).find(".m2").animate({"top":"0"},200, function () {
                $(this).css({"top":"156px"});
            });
        }).mouseleave(function () {
            $(this).find(".m1").animate({"top":"-100px"},200, function () {
                $(this).css({"top":"0"});
            }).stop(true,true);
            $(this).find(".m2").animate({"top":"0"},200, function () {
                $(this).css({"top":"100px"});
            }).stop(true,true);
        })
    }




     /* 轮播 */
    $('#featured-area ul').roundabout({
        duration: 600, // 运动速度
        btnPrev: ".ban_r_btn", // 右按钮
        btnNext: ".ban_l_btn", // 左按钮
        autoplay: true,        // 自动播放
        autoplayDuration: 5000,// 自动播放的时间
        minOpacity: 0,         //最小的透明度
        maxOpacity: 1,         //最大的透明度
        reflect: true,         // 为true时是从左向右移动，为false从右向左移动
        startingChild: 3,      // 默认的显示第几张图片
        autoplayInitialDelay: 5000, // 从第几秒时，开始自动播放（默认毫秒）开始的第一次管用
        autoplayPauseOnHover: true, // 鼠标移入元素内是否自动播放，为true不播放，false还自动播放
        enableDrag: true       // 在移动端可以拖拽播放
    });




    /*var $sec1 = $(".sec1_m"); //sec1
    var $sec2 = $(".section2"); //sec2
    // 关于我们栏目看不全时：
    var windowHeight = $(window).height();
    var windowGap = 0;
    var infoTop = 130;
    if (windowHeight < 780) {
        windowGap = 780 - windowHeight;
        infoTop = 130 - windowGap
    }
    var sec1ScrollTop = $sec1.offset().top - 130 + windowGap;
    var sec2ScrollTop = $sec2.offset().top - 130;

    $(window).scroll(function (event) {
        var scrollTop = $(this).scrollTop();
        if (scrollTop > sec1ScrollTop) {
            $sec1.css({position: "fixed", top: infoTop});
        }
    });*/

    var btrun= true;
    $(window).scroll(function (event) {
        var scrollTop = $(this).scrollTop();
     /* if (scrollTop > 300) {
            $(".banner").animate({"opacity":"0","filter":"alpha(opacity=0)"},300);
        }else{
            $(".banner").animate({"opacity":"1","filter":"alpha(opacity=100)"},300);
        }*/

        if(scrollTop >= 500 && btrun ){
            btrun=false;
            $(".link").children("li").eq(0).css("zIndex",5).animate({"left":"0","opacity":1,"filter":"alpha(opacity=100)"},500);
            $(".link").children("li").eq(1).css("zIndex",4).animate({"left":"307px","opacity":1,"filter":"alpha(opacity=100)"},700);
            $(".link").children("li").eq(2).css("zIndex",3).animate({"left":"614px","opacity":1,"filter":"alpha(opacity=100)"},900);
            $(".link").children("li").eq(3).css("zIndex",2).animate({"left":"918px","opacity":1,"filter":"alpha(opacity=100)"},1100);
        }

    });





});