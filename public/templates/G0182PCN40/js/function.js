

window.onload=function(){
	<!--美工-->

<!--导航-->
       $(".nav ul li").hover(
	  function(){
		  $(this).children(".bg").stop().animate({top:"-5px"})
	  },
	   function(){
		  $(this).children(".bg").stop().animate({top:"-42px"})
	  }
	  )
 
 

 
<!--产品-->

$(".product .inner").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
	
	<!--大图-->
$(".slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:3000});



function adaption(selector,li_w,li_h){
		$(selector).each(function(i){
		img_i=$(selector).eq(i).find("img")
	    if(img_i.width() >= li_w&&img_i.width()>=img_i.height()){
          img_i.width("100%");}
        else if(img_i.height() > li_h){
         img_i.height("100%");}
	   var img_h=img_i.height()	
       var img_w=img_i.width()												
       var mar_t=Math.floor((li_h-img_h)*0.5);
       var mar_l=Math.floor((li_w-img_w)*0.5);
  	   $(this).css({"padding-top":mar_t+"px","padding-left":mar_l+"px"})
	   $(this).width($(this).width()-mar_l);
	   $(this).height($(this).height()-mar_t);
		})
	}
/*首页产品列表图片自适应*/
adaption(".container .product .inner ul li .imgbg",114,114)




	 
/*图文内页图片自适应*/	 
 $(".list_imagetext ul li").each(
 function(){
	 var wid1=$(this).find(".img_box img").width();
	 var wid2=$(this).width();
	 $(this).find(".text_box").width(wid2-wid1-10)
	 }
 )
 

  
/*	 $(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });*/
  
}

$(document).ready(function() {
	

/*产品详细页图片自适应*/
	$(".bd li").each(function(i){
	if($(".bd li").eq(i).find("img").width() > 640){
       $(".bd li").eq(i).find("img").width("99%");
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
   jQuery(".nav").slide({
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
            height: 520,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', 

right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	

});




$(function () {
    $(".container .hover").hover(
	function(){
		$(".hover").stop().animate({"margin-top":"0px"})
	    $(".hover").children("h2").stop().animate({"padding-right":"0%","padding-left":"0",marginBottom:0,marginLeft:0,marginRight:0,marginTop:0})
	    $(".hover").children(".inner").stop().animate({"width":"100%","marginLeft":"0","marginLeft":"0","marginTop":"0",height:126},100).removeClass("color")
	    $(".hover").children(".bg").stop().fadeOut()
	
		over($(this));
		

	},
	function(){
		/*leave($(this))*/
		}			
		);
	over(jQuery(".container .hover").eq(1));
})
function over(obj){
	$(obj).stop().animate({"margin-top":"-40px"})		
	$(obj).children("h2").stop().animate({"padding-right":"5%","padding-left":"5%",marginBottom:1,marginLeft:1,marginRight:1,marginTop:1})
	$(obj).children(".inner").stop().animate({"width":"90%","marginLeft":"5%","marginLeft":"5%","marginTop":"0",height:165}).addClass("color")
	$(obj).children(".bg").stop().fadeIn()
    leave(jQuery(obj).siblings());
	}
	function leave(obj)
	{
		$(obj).stop().animate({"margin-top":"0px"})
	    $(obj).children("h2").stop().animate({"padding-right":"0%","padding-left":"0",marginBottom:0,marginLeft:0,marginRight:0,marginTop:0})
	    $(obj).children(".inner").stop().animate({"width":"100%","marginLeft":"0","marginLeft":"0","marginTop":"0",height:127},100).removeClass("color")
	    $(obj).children(".bg").stop().fadeOut()
	}