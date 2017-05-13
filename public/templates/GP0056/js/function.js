window.onload=function(){
	 $(".list_imagetext ul li").each(
 function(){
	 var wid1=$(this).find(".img_box img").width();
	 var wid2=$(this).width();
	 $(this).find(".text_box").width(wid2-wid1-10)
	 }
 )
	var w=0;
	var n=$("#team .inner ul").children().length;
	for(var i=0;i<n-1;i++){
	  var w1=$("#team .inner ul li").eq(i).find("img").height()
	  var w2=$("#team .inner ul li").eq(i+1).find("img").height()
	
		 if(w1>w2){
			 w=w1;
			 }
			 else{w=w2}
				
		}	 
		$("#team .inner ul li .inpro_img").height(w)
		$("#team .inner ul li").each(function(i){
			if($("#team .inner ul li img").eq(i).height()<w){
				$(this).find("img").css("margin-top",w-$(this).find("img").height())
				}
			})
	$(".bg").each(function(n){
     if(n%3==0){$(this).addClass("bj1")}
     if(n%3==1){$(this).addClass("bj2")}
     if(n%3==2){$(this).addClass("bj3")}
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
	$(".bd li").each(function(i){
	if($(".bd li").eq(i).find("img").width() > 640){
       $(".bd li").eq(i).find("img").width("99%");
}

		})
function apartNav(selector,middle){
    var navs = $(selector).children().length; 
    var rightNav = Math.ceil(navs/2),
        sideNavWidth = ($(selector).width()-middle)/2;
		$(selector).children().eq(rightNav).css('padding-left',middle+'px');
    $(selector).children().each(function() {
        $(this).css({'width':Math.floor(sideNavWidth/rightNav)});
    });
}
apartNav('.menu1',220);

	
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
            height: 500,
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
