$(document).ready(function () {


    search();
    function search() {
        var onOff = false;
        $(".zzc").click(function () {
            onOff = !onOff;
            if(onOff){
                $(this).css("display","none");
                $(".search").animate({"width":"200px"}, function () {
                    $(".test").animate({"opacity":1,"filter":"alpha(opacity=100)"});
                });
            }
        });
        $(".sub").click(function () {
            onOff = !onOff;
            if($(".test").val() == ""){
                $(".search").animate({"width":"30px"}, function () {
                    $(".test").animate({"opacity":0,"filter":"alpha(opacity=0)"});
                    $(".zzc").css("display","block");
                });
                return false;
            }
        })
    }



    nav();
    /* 导航 */
    function nav() {
        $(".nav_li").hover(function () {
            $(this).children("ul").slideToggle();
        });
    }


    banner();
    /* 轮播图 */
    function banner() {
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 6000
        })
    }


    news();
    /* 新闻列表 */
    function news() {
        var mySwiper1 = new Swiper('.swiper-container1',{
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            slidesPerView: 2,
            spaceBetween: 30,
            autoplay: 8000
        });
        $('.arrow-left').on('click', function(e){
            e.preventDefault();
            mySwiper1.swipePrev()
        });
        $('.arrow-right').on('click', function(e){
            e.preventDefault();
            mySwiper1.swipeNext()
        });
    }


    limit();
    /* 文字限制 */
    function limit() {
        $(".limit").each(function () {
            var maxwidth = parseInt($(this).attr("data-limit"));
            if($(this).text().length>maxwidth){
                $(this).text($(this).text().substring(0,maxwidth));
                $(this).html($(this).html()+"...<a href='{$news.link}'>[详情]</a>");
            }
        });

    }


    foot_two();
    /* foot底部导航 */
    function foot_two() {
        var arr = 0;
        var num = 0;

        $(".foot_nc").children().each(function (i) {
            if( $(this).height()>arr ){
                arr = $(this).height();
                num = i;
            }
        }).css("height", arr);
    }


    aside_banner();
    /* 内页大图轮播图 */
    function aside_banner() {
        var mySwiper = new Swiper('.swiper-container2',{
            pagination: '.pagination',
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 6000
        })
    }

    /* asideNav */
    asideNav();
    function asideNav() {
        var er = $(".er");
        var thr = $(".thr");

        if( er.next().length>0 ){
            er.next().prev().append("<span>+</span>");
        }
        if( thr.next().length>0 ){
            thr.next().prev().append("<span>+</span>");
        }
        er.click(function () {
            er.next().slideToggle();

            if( $(this).find("span").html() == "+" ){
                er.next().prev().find("span").html("-");
                er.next().prev().addClass("choose");
            }else{
                er.next().prev().find("span").html("+");
                er.next().prev().removeClass("choose");
            }
        });
        thr.click(function () {
            thr.next().slideToggle();

            if(  $(this).find("span").html() == "+" ){
                thr.next().prev().find("span").html("-");
                thr.next().prev().addClass("choo");
            }else{
                thr.next().prev().find("span").html("+");
                thr.next().prev().removeClass("choo");
            }
        });
    }


    content_banner();
    /* 内页大图轮播图 */
    function content_banner() {
        var mySwiper1 = new Swiper('.swiper-container3',{
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 5000
        });
        $('.arrow-left1').on('click', function(e){
            e.preventDefault();
            mySwiper1.swipePrev()
        });
        $('.arrow-right1').on('click', function(e){
            e.preventDefault();
            mySwiper1.swipeNext()
        });
    }


    top();
    /* 返回顶部 */
    function top() {
        $(".scrolltop").click(function(){$("body").animate({scrollTop :0}, 800)})

        /*var oTop = document.getElementById('scrolltop');
        if( oTop ){
            alert(1)
            oTop.onclick = function () {
                document.documentElement.scrollTop = document.body.scrollTop = 0;
            }
        }*/
    }


});

function startMove( obj, json, fn ) {
    clearInterval( obj.timer );
    obj.timer = setInterval(function () {
        var bStop = true;
        for( var attr in json ){
            // 1.取当前的值
            var iCur = 0;
            if( attr == 'opacity' ){
                iCur = parseInt(parseFloat(getStyle( obj, attr ))*100);
            }else{
                iCur = parseInt(getStyle( obj, attr ));
            }

            // 2.算速度
            var iSpeed = ( json[attr] - iCur )/8;
            iSpeed = iSpeed > 0 ? Math.ceil( iSpeed ):Math.floor( iSpeed );

            // 3.检测停止与运行动作
            if( iCur != json[attr] ){
                bStop = false;
            }
            if( attr == 'opacity' ){
                obj.style.filter = 'alpha(opacity='+( iCur + iSpeed )+')';
                obj.style.opacity = ( iCur+iSpeed )/100;
            }else{
                obj.style[attr] = iCur + iSpeed + 'px';
            }
        }
        if( bStop ){
            clearInterval( obj.timer );
            fn && fn();
        }
    },10 )
}

function getStyle( obj, attr ) {
    return obj.currentStyle ? obj.currentStyle[attr]:getComputedStyle(obj)[attr];
}
