/**
 * Created by Administrator on 2017/9/4.
 */
// 字体大小
(function(doc,win){

    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ,
        recalc = function()
        {
            var clientWidth = docEl.clientWidth;
            if(!clientWidth) return;
            if(clientWidth>640){
                clientWidth=640;
            }
            docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
        };
    recalc();
    if(!doc.addEventListener) return;
    win.addEventListener(resizeEvt,recalc,false);
    doc.addEventListener('DOMContentLoaded',recalc,false);
})(document,window);

//改变字体大小
function changeFontSize2(fontSize){
    $(".det-text div,.det-text h5,.det-text h2").children("*").css("fontSize",fontSize+"rem");
    $(".det-text .ser").css("fontSize",fontSize+"rem");
}

/* 文字限制 */
limit();
function limit() {
    $(".limit").each(function () {
        var maxwidth = parseInt($(this).attr("data-limit"));
        if($(this).text().length>maxwidth){
            $(this).text($(this).text().substring(0,maxwidth));
            $(this).html($(this).html()+"...<i>【查看更多】</i>");
        }
    });

}
$(function(){
    //字体下拉显示
    $(".classify").click('touchstart',function(e){
        e.preventDefault();
        // $(this).toggleClass("r");
        $(".det-nav").slideToggle();
        // if($(this).hasClass("r")){
        //     $(this).html("分类 -");
        // }else{
        //     $(this).html("分类 +");
        // }
    });
    $(".font-size").click('touchstart',function(e){
        e.preventDefault();
        $(".font").slideToggle();
        // $(this).toggleClass("r");
        // if($(this).hasClass("r")){
        //     $(this).html("字 -");
        // }else{
        //     $(this).html("字 +");
        // }
    });
    //左侧nav
    $("ul.one a").click('touchstart',function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('on');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-in");
                        a.siblings('i').addClass('on').parent().siblings().find('a').siblings('i').removeClass('on');
                        break;
                    case "two":
                        a.addClass("box-in");
                        a.siblings('i').addClass('on').parent().siblings().find('a').siblings('i').removeClass('on');
                        break;
                    case "three":
                        a.addClass("box-in");
                        break;
                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('on');
            };
            return false;
        };
    });

    //当前页没有分类，“分类”文字隐藏
    var ulL=$(".det-nav ul");
    if(ulL.length == 0){
        $(".det-title .title-rt").hide();
    }



    //首页轮播图
    var mySwiper = new Swiper ('.swiper-indexBan', {
        //loop: true,
        autoplay : 1500,
        // nextButton: '.swiper-button-next',
        // prevButton: '.swiper-button-prev',
        paginationClickable :true,
        pagination: '.swiper-pagination',
        paginationElement : 'span'
    });


    $(".up-icon img").click(function () {
        var banH = $(".index_ban").height();
        $('#quickbar-wrap-body').animate({scrollTop:banH},500);
    });
});