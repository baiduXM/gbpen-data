window.onload=function(){
	 var wid3=$("#about .in_aboutimg img").width();
	 var wid4=$("#about .inner").width();
	 $("#about .in_text").width(wid4-wid3-30)
	 
$(".list_imagetext ul li").each(
 function(){
	 var wid1=$(this).find(".img_box img").width();
	 var wid2=$(this).width();
	 $(this).find(".text_box").width(wid2-wid1-10)
	 }
 )
	var w=0;
	var n=$("#sw .inner ul").children().length;
	for(var i=0;i<n-1;i++){
	  var w1=$("#sw .inner ul li").eq(i).find("img").height()
	  var w2=$("#sw .inner ul li").eq(i+1).find("img").height()
	
		 if(w1>w2){
			 w=w1;
			 }
			 else{w=w2}
				
		}	 
		$("#sw .inner ul li .inpro_img").height(w+16)
		$("#sw .inner ul li").each(function(i){
			if($("#sw .inner ul li img").eq(i).height()<w){
				$(this).find("img").css("margin-top",w-$(this).find("img").height())
				}
			})
	$("#container .bg").each(function(n){

			if((n+1)%4==0){
			$(this).addClass("bg1");
			   }
			
		  if((n+1)%2==0&&(n+1)%4!=0){
			$(this).addClass("bg2");
			   }
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
            height: 560,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
		$("#kinMaxShow1").kinMaxShow({
            height: 380,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
		
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});

});
