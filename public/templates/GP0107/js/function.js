
$(document).ready(function(){

//下拉菜单
    jQuery(".navbar").slide({ 
        type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
        titCell:".nav_li", //鼠标触发对象
        targetCell:".sub", //titCell里面包含的要显示/消失的对象
        effect:"slideDown", //targetCell下拉效果
        delayTime:100 , //效果时间
        triggerTime:0, //鼠标延迟触发时间（默认150）
        returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
      });

 /*鼠标移过，左右按钮显示*/
jQuery(".focusBoxa").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",1) },function(){ jQuery(this).find(".prev,.next").fadeOut() });

/*SuperSlide图片切换*/
jQuery(".focusBoxa").slide({ mainCell:".pic",titCell:".hd li",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});

//产品展示轮播
jQuery(".slideBox1").slide({ mainCell:" .ulWrap",autoPage:true,interTime:50,effect:"leftMarquee",autoPlay:true,trigger:"click",vis:4});


jQuery(".slideBox2").slide({ mainCell:" .ulWrap",autoPage:true,interTime:50,effect:"leftMarquee",autoPlay:true,trigger:"click",vis:6});


/*内页三级菜单下拉*/
    jQuery(".secondul").slide({
      titCell:".sub2", //鼠标触发对象
      targetCell:".sub2 ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
      effect:"slideDown", //targetCell下拉效果
      delayTime:300 , //效果时间
      triggerTime:0, //鼠标延迟触发时间（默认150）
      defaultPlay:true,//默认是否执行效果（默认true）
      returnDefault:true 
      });
    jQuery(".firstul").slide({
      titCell:".sub1", //鼠标触发对象
      targetCell:".secondul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
      effect:"slideDown", //targetCell下拉效果
      delayTime:300 , //效果时间
      triggerTime:0, //鼠标延迟触发时间（默认150）
      defaultPlay:true,//默认是否执行效果（默认true）
      returnDefault:true 
      });

//多图时轮播
    jQuery(".slideBox3").slide({  mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
    mouseOverStop:false,/* 鼠标移到容器层继续播放*/
    /* 控制进度条 */
      startFun:function(){
        var timer = jQuery(".slideBox3 .timer");
        timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
      }
    });

//限制字符个数
    $(".h3_l").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });

      if($(".focusBox img").length<2){
        $(".focusBox").find("a").css("display","none");
    }


        
});