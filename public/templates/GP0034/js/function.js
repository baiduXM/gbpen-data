
$(document).ready(function(){
    $(".category li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 	
	$("#iconta").click(function(){
		$(".content").addClass("show")
		$(".iconta").hide()
		return false
	})
	$("#content #topicont").click(function(){
		$(".content").removeClass("show")
		$(".iconta").show()
	})					
			jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
                defaultPlay:false,
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});
			jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});

		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});	
		jQuery(".focusBoxa").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});							
		jQuery(".slideBoxc").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});
		$(".side ul li").hover(function(){
			$(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1"})	
		},function(){
			$(this).find(".sidebox").stop().animate({"width":"38px"},200).css({"opacity":"1"})	
		});
		$(".side ul li").hover(function(){
			$(this).find(".sideboxb").stop().animate({"width":"200px"},200).css({"opacity":"1"})	
		},function(){
			$(this).find(".sideboxb").stop().animate({"width":"38px"},200).css({"opacity":"1"})	
		});		
		$('#sidetopa').hover(function(){
			$(this).attr('id','code_hover');
			$('#code_img').show();
		},function(){
			$(this).attr('id','sidetopa');
			$('#code_img').hide();
		})									
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});					
     


});

//回到顶部
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

