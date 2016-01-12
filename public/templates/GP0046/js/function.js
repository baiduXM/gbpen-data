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
	$(".bd li").each(function(){
	if($(this).find("img").width() > 580){
        $(this).find("img").width("99%");
}

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
            height: 440,
            button: {
                showIndex: false,
                normal: { background: 'url(images/button.png) no-repeat -14px 0', marginRight: '8px', border: '0', right: '48%', bottom: '20px' },
                focus: { background: 'url(images/button.png) no-repeat 0 0', border: '0' }
            }
        });
	
/*滚动js*/	

/*********箭头控制滚动方向、加速及鼠标拖动***************/
/*********箭头控制滚动方向、加速及鼠标拖动***************/
var MarqueeDiv2Control=new Marquee("MarqueeDiv2");		//箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv2Control.Direction= 0 ;
MarqueeDiv2Control.Step=1;
MarqueeDiv2Control.Width=231;
MarqueeDiv2Control.Height=256;
MarqueeDiv2Control.Timer=20;
MarqueeDiv2Control.ScrollStep=1;				//若为-1则禁止鼠标控制实例
MarqueeDiv2Control.Start();
MarqueeDiv2Control.BakStep=MarqueeDiv2Control.Step;
$("LeftButton2").onmouseover=function(){MarqueeDiv2Control.Direction= 0 };
$("LeftButton2").onmouseout=$("LeftButton2").onmouseup=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep};
$("LeftButton2").onmousedown=$("RightButton2").onmousedown=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep+3};
$("RightButton2").onmouseover=function(){MarqueeDiv2Control.Direction= 1 };
$("RightButton2").onmouseout=$("RightButton2").onmouseup=function(){MarqueeDiv2Control.Step=MarqueeDiv2Control.BakStep};


});
