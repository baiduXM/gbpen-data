window.onload=function(){
	$("#product ul li").each(function(){
  var hh1=117-$(this).find("img").height();
  	$(this).find("img").css("margin-top",hh1*0.5+"px")

})
	 $(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });
$(".bg2").wrapInner('<div class="bg2_1"></div>')
$(".bg2_1").wrapInner('<div class="bg2_2"></div>')
$(".bg1").wrapInner('<div class="bg1_1"></div>')
$(".bg1_1").wrapInner('<div class="bg1_2"></div>')

$("#pro .inner ul li").each(function(){
  var hh1=280-$(this).find("img").height();
  	$(this).find("img").css("margin-top",hh1*0.5+"px")

})
$("#case .inner ul li").each(function(){
  var hh1=200-$(this).find("img").height();
  	$(this).find("img").css("margin-top",hh1*0.5+"px")

})
}

$(document).ready(function() {



	
/*侧边栏*/
		$(".listbg li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 
	
/*导航*/
   jQuery("#nav").slide({
        type: "menu", // 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell: ".aa", //鼠标触发对象
        targetCell: ".cc", //titCell里面包含的要显示/消失的对象
        effect: "slideDown", //targetCell下拉效果
        delayTime: 300, //效果时间
        triggerTime: 0, //鼠标延迟触发时间（默认150）
        returnDefault: false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
    });


	
	
/*产品详细页*/
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

/*大图 100%*/	
	$("#kinMaxShow").kinMaxShow({
            height: 260,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
		
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 5,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});

});
