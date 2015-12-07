$(document).ready(function() {
jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});				
  		$(".listbg li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 


    $("#nav ul li.aa:last-child").css({
        "background": "none"
    })

    /*鼠标移过，左右按钮显示*/
    jQuery(".focusBox").hover(function() {
        jQuery(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.2)
    }, function() {
        jQuery(this).find(".prev,.next").fadeOut()
    });
    /*SuperSlide图片切换*/
    jQuery(".focusBox").slide({
        mainCell: ".pic",
        effect: "fold",
        autoPlay: false,
        delayTime: 600,
        trigger: "click"
    });
    jQuery(".slideBox").slide({
        mainCell: ".bd ul",
        autoPlay: true,
        effect: "leftLoop"
    });

    jQuery(".slideBoxb").slide({
        mainCell: ".bd ul",
        autoPlay: false,
        effect: "leftLoop"
    });
    // 兼容低版本IE
    $(function() {
        if (window.PIE) {
            $('.rounded').each(function() {
                PIE.attach(this);
            });
        }
    });

    $('#prizes .photos-content').jCarouselLite({
        btnPrev: '#prizes a.photos-prev',
        btnNext: '#prizes a.photos-next',
        visible: 4,
        auto: 3000,
        speed: 1000
    }).css({
        visibility: "visible"
    });
});
