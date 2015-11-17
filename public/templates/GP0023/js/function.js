$(document).ready(function() {
						   jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});				

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
        targetCell: "span", //titCell里面包含的要显示/消失的对象
        effect: "slideDown", //targetCell下拉效果
        delayTime: 300, //效果时间
        triggerTime: 0, //鼠标延迟触发时间（默认150）
        returnDefault: false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
    });
   	$(".nav ul li.nav1").eq(0).addClass("nav_1");
	$(".nav ul li.nav1").eq(1).addClass("nav_2");
    $(".nav ul li.nav1").eq(2).addClass("nav_3");
	$(".nav ul li.nav1").eq(3).addClass("nav_4");
    $(".nav ul li.nav1").eq(4).addClass("nav_5");
	$(".nav ul li.nav1").eq(5).addClass("nav_6");
  	$(".nav ul li.nav1").eq(6).addClass("nav_7");

	
	
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
            height: 377,
            button: {
                showIndex: false,
                normal: { background: 'url(../web/images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', left: '80%', bottom: '20px' },
                focus: { background: 'url(../web/images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	
/*滚动js*/	

var MarqueeDiv1Control=new Marquee("MarqueeDiv2");		//箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv1Control.Direction="left";
MarqueeDiv1Control.Step=1;
MarqueeDiv1Control.Width=850;
//MarqueeDiv1Control.Height=167;
MarqueeDiv1Control.Timer=20;
MarqueeDiv1Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
MarqueeDiv1Control.Start();
MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;


});
