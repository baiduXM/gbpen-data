window.onload=function(){
	 $(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });

$("#product ul li").each(function(){
  var hh=170-$(this).find("img").height();

  	$(this).find("img").css("margin-top",hh*0.5+"px")

})

$("#case ul li").each(function(){
  var hh1=92-$(this).find("img").height();
  	$(this).find("img").css("margin-top",hh1*0.5+"px")

})



		$(".bd li").each(function(){
	if($(this).find("img").width() > 500){
        $(this).find("img").width("99%");
}

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
        titCell: ".nav1", //鼠标触发对象
        targetCell: ".nav2", //titCell里面包含的要显示/消失的对象
        effect: "slideDown", //targetCell下拉效果
        delayTime: 300, //效果时间
        triggerTime:400, //鼠标延迟触发时间（默认150）
        returnDefault: false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
    });
    $("#nav ul li.nav1:last-child").css({
        "background": "none"
    })
	$("#nav ul li.nav2:first-child").css({
        "padding-top": "5px"
    })
	$("#nav ul li.nav2:last-child").css({
        "padding-bottom": "5px"
    })
	$("#nav ul.sub").mouseenter (
	function(){
		 $(this).prev().removeClass("ho1").addClass("ho2")
		})
		$("#nav ul.sub").mouseleave (
	function(){
		$(this).prev().removeClass("ho2").addClass("ho1")
		}	
		)


	
	
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

	/*案例*/
 $("#case ul li").hover(
  function(){
		 $(this).find("div.text").stop().animate({width:"100%",left:"0"})
		 $(this).find("p").stop().delay(400).fadeIn()
	     },
	 function(){
		 $(this).find("p").stop().fadeOut()
		 $(this).find("div.text").stop().delay(400).animate({width:"0%",left:"50%"})
		 
		 }
 
 )	

/*新闻*/	
 $("#news ul li").hover(
     function(){
		 $(this).find("h3 a").addClass("hover")
	     $(this).find(".rightinner .more").stop().animate({marginLeft:"140"}).addClass("hover1")
	     $(this).find(".rightinner .text").addClass("hover2")
	     },
	 function(){
		 $(this).find("h3 a").removeClass("hover")
		 $(this).find(".rightinner .more").stop().animate({marginLeft:"0"}).removeClass("hover1")
		 $(this).find(".rightinner .text").removeClass("hover2")
		 }
	 )

/*大图 100%*/	
$("#header").slideDown("slow")
$("#banner").slideDown("slow")
	$("#kinMaxShow").kinMaxShow({
            height: 450,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	
/*图片*/
$("#product ul li:even").addClass("left_bg");
var hh=170-$("#product ul li img").height();
var hh1=92-$("#case ul li img").height();
	$("#product ul li img").css("margin-top",hh*0.5+"px")
	$("#case ul li img").css("margin-top",hh1*0.5+"px")

	
	


});
