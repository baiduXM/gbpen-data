$(document).ready(function($) {
    var a = $("nav li").children('a')
    a.click(function() {
        $(this).next().slideToggle(400,function(){
        	$(this).is(':hidden') ? $(this).parent().removeClass('on') : $(this).parent().addClass('on');
        })
    });


    jQuery('.gd').slide({mainCell:"ul.picList",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
     // 导航下拉
       jQuery("#nav").slide({ 
         type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
         titCell:".nLi", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
         effect:"slideDown", //targetCell下拉效果
         delayTime:300 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
       });
   jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
	//banner
	jQuery("#slide").slide({mainCell:"ul",autoPlay:true,effect:"left"});
	jQuery("#slide").hover(function(){ jQuery(this).find(".prev,.next") });
});
