
<!--美工区域-->

$(document).ready(function() {
	
	
	
	
	
	
  $(".products .inner").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
  $(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

 
	  
 
  $(".products ul li").hover(
	
	function(){
		 $(this).find("p").animate({opacity:"1"})
		 $(this).find(".bg").animate({opacity:"1"})
		 $(this).find(".more").animate({top:175,opacity:"1"})
		 },
	
	function(){
		 $(this).find("p").animate({opacity:"0"})
		 $(this).find(".bg").css("backgroundImage","none")
		$(this).find(".more").animate({top:-175,opacity:"0"})		  
  })
  
  
  
  
  
  
});













window.onload=function(){
	
	
	
	 $(".news .inner").each(
 function(){
	 $(this).find(".news_text").width($(this).width()-$(this).find(".tu_img img").width()-30)
	 }
 )
 

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
adaption(".products .inner ul li .pic",190,190)





	 
/*图文内页图片自适应*/	 
 $(".list_imagetext ul li").each(
 function(){
	 var wid1=$(this).find(".img_box img").width();
	 var wid2=$(this).width();
	 $(this).find(".text_box").width(wid2-wid1-11)
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
        autoPlay: true
        // effect: "leftLoop"
    });
    var proLi = $(".slideBoxb .bd li");
    if(proLi.length <=1){
        $(".slideBoxb .prev,.slideBoxb .next").hide();
    }
	
	
 // 兼容低版本IE
    $(function() {
        if (window.PIE) {
            $('.rounded').each(function() {
                PIE.attach(this);
            });
        }
    });



});
