$(document).ready(function() {

// menuhover
     jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});


	// banner js
    
	jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
	/*SuperSlide图片切换*/
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});


		// 下拉菜单
	  // sidebar class
      $(".first li a").click(function () {
          $(this).parent().siblings().find(".second").slideUp()
          $(this).siblings(".second").slideToggle()
      });
      $(".second li a").click(function () {
          $(this).parent().siblings().find(".third").slideUp()
          $(this).siblings(".third").slideToggle()
      });
      // $('.nextpaging li').first().css('text-align','right')
     jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:"false",effect:"leftLoop"});
    
		// $('#prizes .photos-content.enable').jCarouselLite({
		// 	btnPrev: '#prizes a.photos-prev',
		// 	btnNext: '#prizes a.photos-next',
		// 	visible: 4,
		// 	auto: 3000,
		// 	speed: 1000
		// }).css({visibility:"visible"});

			
})