/**
 * Created by Administrator on 2017/4/1.
 */
/********判断头部搜索框*******/
$(".input").click(function(){
    $(".had-search").slideToggle();
});
function input()
{
    if (document.getElementById('airline').value=='')
    {
        alert('null');
        document.getElementById('airline').focus();
    }else{
        window.location.href = "../searchresult.html" ;
    }
}

/************内容区nav显示***********/
$(function(){
    $(".ab-class").click(function(e){
        e.preventDefault();
        $(".class-list-bg").slideToggle();
    });
});
/************内容区nav下拉***********/
$(function(){
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
});
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

/***********字体下拉显示***************/
$(function(){
    $(".ab-font,.det-fonts").click(function(e){
        e.preventDefault();
        $(".det-font,.add-show,.j-hide").slideToggle();
    });
});

$(function(){
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        // 如果需要分页器
        pagination: '.swiper-pagination',
        autoplay : 1000,
        paginationClickable :true,
        paginationElement : 'span',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
});

