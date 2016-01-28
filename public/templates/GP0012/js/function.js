window.onload=function(){
	 $(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });
function adaption(selector,li_w,li_h){
		$(selector).each(function(i){
		img_i=$(selector).eq(i).find("img")
	    if(img_i.width() >= li_w&&img_i.width()>=img_i.height()){
          img_i.width("99%");}
        else if(img_i.height() > li_h){
         img_i.height("99%");}
	   var img_h=img_i.height()	
       var img_w=img_i.width()												
       var mar_t=(li_h-img_h)*0.5;
       var mar_l=(li_w-img_w)*0.5;
  	   $(this).find("img").css({"margin-top":mar_t+"px","margin-left":mar_l+"px"})
		})
	}
	/*图文列表图片自适应*/
   adaption(".list_imagetext ul li",110,110)
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
        triggerTime: 0, //鼠标延迟触发时间（默认150）
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
            height: 350,
            button: {
                showIndex: false,
                normal: { background: 'url(../web/images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(../web/images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	
/*滚动js*/	
var MarqueeDiv1Control=new Marquee("MarqueeDiv1");		//箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv1Control.Direction="left";
MarqueeDiv1Control.Step=1;
MarqueeDiv1Control.Width=916;
//MarqueeDiv1Control.Height=167;
MarqueeDiv1Control.Timer=20;
MarqueeDiv1Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
MarqueeDiv1Control.Start();
MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;

var MarqueeDiv1Control=new Marquee("MarqueeDiv2");		//箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv1Control.Direction="left";
MarqueeDiv1Control.Step=1;
MarqueeDiv1Control.Width=300;
//MarqueeDiv1Control.Height=167;
MarqueeDiv1Control.Timer=20;
MarqueeDiv1Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
MarqueeDiv1Control.Start();
MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;


});
