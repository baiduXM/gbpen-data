$(document).ready(function(){
    
   
  	// 焦点图片切换
    jQuery("#banner").slide({ mainCell:".picture", effect:"left",interTime:"3500",autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    // 导航
    $("#nav_btn").click(function(){
      $(".navbox").addClass("navbox_h");
      $(".opacity2").show()
      // pageSlideOver();
    })
    $(".opacity2,.close_nav").on('click touchstart',function(){
      $(".navbox").removeClass("navbox_h")
      $(".opacity2").hide()
      // pageSlideOver();
      return false;
    });
    /******滚回头部******/
    $(window).scroll(function () {
        var sT = $(window).scrollTop();
        if (sT >100) {
            $(".back_top").addClass("on");
        } else {
            $(".back_top").removeClass("on");
        }

    });
    $(".back_top").click(function(){
        $("html,body").animate({scrollTop:'0px'},800);
    });
    
    // 产品图片切换
    jQuery(".pros1").slide({ mainCell:".prodt1", effect:"left",vis:1, autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    jQuery(".pros").slide({ titCell:".dot", mainCell:".prodt", effect:"left",vis:3, autoPlay:true, autoPage:true, trigger:"mouseover"});
    $(".detil .dot").css("transform", "translateX(-50%)");
    
    if($('ul.prodt').children("li").length <= 3){
        $(".dot").hide();
    }

   // 鼠标滚动渐入
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
    
   
});
	
    


	