/**
 * Created by Administrator on 2017/4/1.
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

/************改变字体大小*************************/
 function changeFontSize2(fontSize){
    $("div").children("*").css("fontSize",fontSize+"rem");
 }


$(function(){
    /************内容区nav显示***********/
    $(".ab-class").click('touchstart',function(e){
        e.preventDefault();
        $(".class-list-bg").slideToggle();
    });

    /************内容区nav下拉***********/
    var h3 = $(".tree_box").find("h3 a");
    h3.click(function(e){
        if($(this).parent().parent().find(".tree_one").length > 0){
            $(this).parent().siblings().find(".tree_one").slideUp();
            $(this).parent().parent().find(".tree_one").slideToggle();
            e.preventDefault();
        }
    });
    var h4 = $(".tree_box").find("h4 a");
    h4.click(function(e){
        if($(this).parent().parent().find(".tree_two").length > 0){
            $(this).parent().siblings().find(".tree_two").slideUp();
            $(this).parent().parent().find(".tree_two").slideToggle();
            e.preventDefault();
        }
    })
    /***********字体下拉显示***************/
    $(".ab-font,.det-fonts").click('touchstart',function(e){
        e.preventDefault();
        $(".det-font,.addShow,.j-hide").slideToggle();
    });

    /*******首页轮播**********/
    var swiper = new Swiper('.swiper-banner', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerColumnFill:'column',
        paginationClickable: true
    });

    /****滚回头部*****/
    $(".scroll_top").click('touchstart',function () {
        $("#quickbar-wrap-body").animate({scrollTop:"0px"},500);
    });

    /******文字********/
    $(".list-dl").each(function(index){
        var num=$(".list-dl").eq(index).find(".txt").html();
        if (num.length > 18) {
            $(".list-dl").eq(index).find(".txt").html(num.substr(0, 18) + "...")
        }
    });

    // jQuery("#product").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });

    //大图切换
    jQuery(".proSlide").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
        startFun:function(i,p){
            //控制小图自动翻页
            if(i==0){ jQuery(".proSlide .sPrev").click() } else if( i%3==0 ){ jQuery(".proSlide .sNext").click()}
        }
    });

    //小图左滚动切换
    jQuery(".proSlide .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:3,scroll:1,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });


});

