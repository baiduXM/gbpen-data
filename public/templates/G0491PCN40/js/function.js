$(document).ready(function() {
<!--美工编写区域-->
	jQuery(".product .inner").slide({mainCell:".bd .picList",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
    $("#product .inner li").each(function(i){
        $("#product .inner li").slice(i*2,i*2+2).wrapAll("<ul></ul>")
    })
    jQuery("#product .inner").slide({mainCell:".bd .ulWrap",autoPlay:true,effect:"leftMarquee",vis:4,interTime: 30});

<!--美工编写区域-->
});




window.onload=function(){
	/* 首页关于我们和新闻中心的图片自适应：其中如果图片和文字内容各自站一行，则total_w为0*/	 
function adap_box(selector,img_w,img_h,total_w){
	var box_img=$(selector).find(".box_img img")
	var box_text=$(selector).find(".box_text")
	 if(box_img.width()<=img_w && total_w != "0"){
	    box_text.width(total_w-box_img.width())
	    }
	 else if(box_img.width()> img_w ){
		 box_img.width(img_w).height("auto").css("margin-top",(img_h-$(selector).find(".box_img img").height())*0.5)
		 if(total_w != "0"){
		 box_text.width(total_w-img_w)}}
	}
	/*产品图片的自适应*/
function adap_pro(selector,li_w,li_h){
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
<!--美工编写区域-->
/*首页关于我们和新闻中心的图片自适应*/	

adap_box("#news",306,280,725);
adap_box("#about",554,332,1100);

/*首页产品列表图片自适应*/
adap_pro("#product .inner ul li .pic",260,260);
    adap_pro("#case .inner .pic",390,300);

<!--美工编写区域-->

	 
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
  
};
function starColor(html,data){
    var text = html;
    var reg = text.substr(0,5);
    var reg1 = text.substr(5);
    data.empty().append("<span style='color: #505050; '>"+reg+"</span>"+reg1);
}


$(document).ready(function() {
    starColor($(".top_tel").html(),$(".top_tel"));
<!--大图-->
$("#banner .slideBox").slide({mainCell:".bd ul",autoPlay:true, effect:"fold", trigger:"click",interTime:4000});


    $(".crumb span a:first-child").css("background","none");

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
        autoPlay: true,
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



});
