	
$(window).resize(function() {
	
  if($('.main').outerHeight(true) > $('.aside').outerHeight(true)){
		 $('.aside,.fixed').height($('.main').outerHeight(true));
	}else{
		 $('.fixed').height($('.aside').outerHeight(true));
	}
});
$(document).ready(function(){
jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});				
    $(".list li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })    		
    
		
    jQuery(".focusBox").slide({ mainCell:".pics",effect:"left", autoPlay:true, delayTime:300,"interTime":5000});
			jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:600 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
                defaultPlay:false,
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});		
	jQuery("#navlist").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});	

	

			
            $('#prizes .photos-content').jCarouselLite({
      btnPrev: '#prizes a.photos-prev',
      btnNext: '#prizes a.photos-next',
      visible: 5,
      auto: 3000,
      speed: 1000
}).css({visibility:"visible"});

            $('#prizesb .photos-content').jCarouselLite({
      btnPrev: '#prizesb a.photos-prev',
      btnNext: '#prizesb a.photos-next',
      visible: 5,
      auto: 3000,
      speed: 1000
}).css({visibility:"visible"});
setTimeout(function () { 
        
		if($('.main').outerHeight(true) > $('.aside').outerHeight(true)){
			 $('.aside,.fixed').height($('.main').outerHeight(true));
		}else{
			 $('.fixed').height($('.aside').outerHeight(true));
		}
    }, 500);
	
});

