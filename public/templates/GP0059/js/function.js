window.onload=function(){
		 $(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });


$("#pro .inner ul li").each(function(){
  var hh1=280-$(this).find("img").height();
  	$(this).find("img").css("margin-top",hh1*0.5+"px")

})


$("#case .inner .slideBox .bd ul li").each(function(i){
	var xx=$("#case .inner .slideBox .bd ul li").eq(i).height()												
  var hh1=(200-xx)*0.5;
  	$(this).find("img").css("margin-top",hh1+"px")

})
}

$(document).ready(function() {

	$(".bd li").each(function(i){
	if($(".bd li").eq(i).find("img").width() > 640){
        $(this).find("img").width("99%");
}

		})

	
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
            height: 420,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});


});
