$(document).ready(function(){
    
  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    $("#banner .dot").css("transform", "translateX(-50%)");
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen})
        
        $(".menu>li").hover(function(){
            $(this).find("ul.nav_list").stop(true, true).slideDown(500);
        },function(){
            $(this).find("ul.nav_list").slideUp(500);
        })
        
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }
   
    // 选项卡1
      $(function(){
           $(".slideTxtBox .hd ul li").click(function(){
           $(this).addClass("on").siblings().removeClass("on");
           var index=$(this).index(); 
           $(".bd > .detil").eq(index).show().siblings().hide(); 
           });
      });
    // 选项卡里焦点图片切换
    jQuery(".newss").slide({mainCell:".picture", effect:"fold", autoPlay:true,autoPage:true,vis:"1",trigger:"mouseover"});
    jQuery(".pro_left").slide({mainCell:".picture",effect:"left",vis:1,autoPlay:true,autoPage:true,trigger:"mouseover"});
    
    // 样式
    $(".newlist ul li:nth-child(2n+1)").css("margin-right", "35px");
    $(".pro .prolist li:nth-child(3n)").css("margin", "10px 0 0 0");
    $(".imgtext li:nth-child(2n)").css("margin", "12px 0 12px 0");
    
   
});
	
    


	