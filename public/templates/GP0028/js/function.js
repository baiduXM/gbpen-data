
// 导航下拉
jQuery("#nav").slide({ 
        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell:".nLi", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
        effect:"slideDown", //targetCell下拉效果
        delayTime:300 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
      });
jQuery(document).ready(function($) {
	$(".nLi").hover(function() {
		$(this).find('h3').find('a').addClass('bounceIn')
	}, function() {
		$(this).find('h3').find('a').removeClass('bounceIn')
	});

});
//banner
jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
//banner
jQuery("#slide").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
//pic
 jQuery(".pic").slide({mainCell:".slide ul",autoPage:true,effect:"leftLoop",autoPlay:true,scroll:4,vis:4,trigger:"click"});
 /*鼠标移过，左右按钮显示*/
jQuery(".pic").hover(function(){ jQuery(this).find(".prev,.next") });
// 左侧导航
 $(document).ready(function($) {
    $(".list li a").click(function(){       
        $(this).next(".second").slideToggle(300).siblings(".second").slideUp("slow");
        })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })

   


$(".new_two li").each(function() {
    var str=$(this).find('.nlist_word em').text();
    var str1=str.substring(0,70);
    $(this).find('.nlist_word em').text(str1+"...")
});



 });