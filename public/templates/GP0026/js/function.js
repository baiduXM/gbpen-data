$(document).ready(function() {

// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	 // $('.sub li').last().css('border', 'none');
	 // $('ul.nav>li').last().css('background','none');
	 // $('ul.nav>li').hover(function() {
	 // 	$(this).addClass('on')
	 // }, function() {
	 // 	$(this).removeClass('on')
	 	
	 // });

	// banner js
    
		jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});


        jQuery(".pro-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:3,trigger:"click",interTime:2500});
       
		// 下拉菜单
	  // sidebar class
      $(".first li a").click(function () {
          $(this).parent().siblings().find(".second").slideUp()
          $(this).siblings(".second").slideToggle()
      })  
      $(".second li a").click(function () {
          $(this).parent().siblings().find(".third").slideUp()
          $(this).siblings(".third").slideToggle()
      }) 
     jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});
			
})