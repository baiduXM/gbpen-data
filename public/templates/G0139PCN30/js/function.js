$(document).ready(function(){
	
  
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


  jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});


 $("#products .inner").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
 
  //多图时轮播
    jQuery(".slideBox3").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
    mouseOverStop:false,/* 鼠标移到容器层继续播放*/
    /* 控制进度条 */
      startFun:function(){
        var timer = jQuery(".slideBox3 .timer");
        timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
      }
    });

	
    $('.firstul li a').click(function() {
        $(this).parent().siblings().find('.secondul').stop(true,true).slideUp();
        $(this).siblings(".secondul").stop(true,true).slideToggle();
        $(this).siblings(".secondul").children('li').children('a').click(function() {
              $(this).parent().siblings().find('.three').stop(true,true).slideUp();
              $(this).siblings(".three").stop(true,true).slideToggle();
        });
      });

	
//限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });

    if($(".focus img").length<2){
        $(".focus").find("a").css("display","none");
    }
});
  

