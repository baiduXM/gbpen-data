
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

jQuery(".txtScroll-left").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,scroll:1,vis:1,trigger:"click"});


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

   

var about_r=$(".about_r").outerHeight()
var about_l=$(".about_l").outerHeight()
  if(about_r>about_l){
      $(".about_r").parent(".contant_about ").css({height:about_r+"px"});
  }else{
       $(".about_l").parent(".contant_about").css({height:about_l+"px"});
  }
var MarqueeDiv1Control=new Marquee("MarqueeDiv1");      //箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv1Control.Direction="left";
MarqueeDiv1Control.Step=1;
MarqueeDiv1Control.Width=948;
MarqueeDiv1Control.Height=174;
MarqueeDiv1Control.Timer=20;
MarqueeDiv1Control.ScrollStep=1;                //若为-1则禁止鼠标控制实例
MarqueeDiv1Control.Start();
MarqueeDiv1Control.BakStep=MarqueeDiv1Control.Step;

var MarqueeDiv2Control=new Marquee("MarqueeDiv2");      //箭头控制滚动方向、加速及鼠标拖动实例
MarqueeDiv2Control.Direction="left";
MarqueeDiv2Control.Step=1;
MarqueeDiv2Control.Width=948;
MarqueeDiv2Control.Height=174;
MarqueeDiv2Control.Timer=20;
MarqueeDiv2Control.ScrollStep=1;                //若为-1则禁止鼠标控制实例
MarqueeDiv2Control.Start();
MarqueeDiv2Control.BakStep=MarqueeDiv2Control.Step;

 });

