
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

//banner
jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
//banner
jQuery("#slide").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
jQuery("#slide").hover(function(){ jQuery(this).find(".prev,.next") });
//pic
 jQuery(".pic").slide({mainCell:".slide ul",autoPage:true,effect:"leftLoop",autoPlay:true,scroll:4,vis:4,trigger:"click"});
 /*鼠标移过，左右按钮显示*/
jQuery(".pic").hover(function(){ jQuery(this).find(".prev,.next") });

jQuery(".txtScroll-left").slide({mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,scroll:2,vis:2,trigger:"click"});


 $(document).ready(function($) {
    //产品分类
    $(".pic_list").find('li:last-child').css("marginRight","0")
    $(".pic_list").find('li:odd ').addClass('odd')
    
    // 左侧导航
    $(".list li a").click(function(){       
        $(this).next(".second").slideToggle(300).siblings(".second").slideUp("slow");
        })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })
 });
