$(document).ready(function() {
jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});				

	/*侧边栏*/
	 		$(".listbg li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 
	
	$(".bd li").each(function(){
	if($(this).find("img").width() > 600){
        $(this).find("img").width("99%");
}

		})

	
    jQuery("#nav").slide({
        type: "menu", // 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell: ".aa", //鼠标触发对象
        targetCell: ".cc", //titCell里面包含的要显示/消失的对象
        effect: "slideDown", //targetCell下拉效果
        delayTime: 300, //效果时间
        triggerTime: 0, //鼠标延迟触发时间（默认150）
        returnDefault: false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
    });

$("#list ul li:last-child").css({"background":"none"})


						 


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
	/*大图 100%*/	
	$("#kinMaxShow").kinMaxShow({
            height: 484,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '80px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });

});
