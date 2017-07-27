$(document).ready(function(){
    
  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    // $("#banner .dot").css("transform", "translateX(-50%)");
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen-1})
        
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }
    // 内页导航
    $(".ce > .celi").hover(function(){
        $(this).find("ul.er").stop(true, true).slideDown(500);
    },function(){
        $(this).find("ul.er").slideUp(500);
    })

    $(".er > .e_li").hover(function(){
        $(this).find("ul.thr").stop(true, true).slideDown(500);
    },function(){
        $(this).find("ul.thr").slideUp(500);
    })
    
    // 案例展示
    jQuery(".new_det").slide({mainCell:".picture", effect:"left", autoPlay:true,autoPage:true,vis:"1",trigger:"mouseover"});
    jQuery(".pro_det").slide({mainCell:".picture2", effect:"left", autoPlay:true,autoPage:true,vis:"1",trigger:"mouseover"});
   
    // 样式
    
    $(".newsbox ul li:nth-child(2n)").css("margin", "8px 0 8px 0");
    $(".cont_dec .newlist2 ul li:nth-child(2n)").css("margin", "8px 0 8px 0");
    $(".cont_dec .newlist2 ul li:nth-child(2n+1)").css("width", "258px");
    // 首字
    if($(".navbox ul li:nth-child(1) .nav,.posnav .nav").size()>0){
      var str=$(".navbox ul li:nth-child(1) .nav,.posnav .nav").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".navbox ul li:nth-child(1) .nav,.posnav .nav").html(target+str.substr(1));
    }
    if($(".navbox ul li:nth-child(2) .nav").size()>0){
      var str=$(".navbox ul li:nth-child(2) .nav").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".navbox ul li:nth-child(2) .nav").html(target+str.substr(1));
    }
    if($(".navbox ul li:nth-child(3) .nav").size()>0){
      var str=$(".navbox ul li:nth-child(3) .nav").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".navbox ul li:nth-child(3) .nav").html(target+str.substr(1));
    }
    if($(".navbox ul li:nth-child(4) .nav").size()>0){
      var str=$(".navbox ul li:nth-child(4) .nav").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".navbox ul li:nth-child(4) .nav").html(target+str.substr(1));
    }
    if($(".navbox ul li:nth-child(5) .nav").size()>0){
      var str=$(".navbox ul li:nth-child(5) .nav").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".navbox ul li:nth-child(5) .nav").html(target+str.substr(1));
    }
    // 鼠标滚动渐入
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
});



    


	