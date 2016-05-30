

window.onload=function(){
	
<!--美工-->
	


 $("#seach_icon").toggle(function(){
									
			      $("#nav").stop().fadeOut()
			      $("#seach_box").stop().fadeIn();
			     },
		function(){
	              $("#seach_box").stop().fadeOut();
	              $("#nav").stop().fadeIn();
   })
			





$(".bj").each(function(n){
     if(n%3==0){$(this).addClass("bg1")}
     if(n%3==1){$(this).addClass("bg2")}
     if(n%3==2){$(this).addClass("bg3")}
	 
   })






 $("#about").each(
 function(){
	 $(this).find(".about_text").width($(this).width()-$(this).find(".about_img img").width()-35)
	 }
 )




$(".n1").each(
 function(){
	 $(this).find(".news_text").width($(this).width()-$(this).find(".news_img img").width()-25)
	 }
 )


   
   $("#news").find(".inner ul li:odd .n1").addClass("nr")
  $("#news").find(".inner ul li:odd .news_img").addClass("news_img1")
 $("#news").find(".inner ul li:odd .news_xx").addClass("news_xx1")

   $("#news").find(".inner ul li:odd .news_lt").addClass("news_lt1")
   
 $("#news").find(".inner ul li:even").addClass("even wow bounceInLeft")
   $("#news").find(".inner ul li:odd").addClass("odd wow bounceInRight")
	
	



$("#pro .inner ul li").hover(
									   function(){
										  $(this).find(".bg").stop().animate({"opacity":1})
								
									$(this).find("a").stop().animate({"opacity":1,"top":"48%"})
										   },
										   
										   function(){
							
											   $(this).find(".bg").stop().animate({"opacity":0}) 
											    $(this).find("a").stop().animate({"opacity":0,"top":"10%"})
											   })







	
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
	new WOW().init();
};


	
	

	


	
	

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
 adaption("#pro .inner  ul li .pic",310,310)
 
 

 
/*首页关于我们图片自适应*/	
var wid3=$("#about .about_img img").width();
var wid4=$("#about .inner").width();
$("#about .about_wz").width(wid4-wid3-60)


	 
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
	
/*美工js*/
	$(".title").each(function(n){
     if(n%2==0){$(this).addClass("bj0")}
     if(n%2==1){$(this).addClass("bj1")}
     

	})
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
            height: 450,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
/*产品滚动js*/		
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 6,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});

});
