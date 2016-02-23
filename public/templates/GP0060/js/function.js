$(document).ready(function() {
    $(".list li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })    	
	jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});	
		/*SuperSlide图片切换*/
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});	
	jQuery(".focusBoxb").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});			
	jQuery("#nav").slide({ 
		type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
		titCell:".nLi", //鼠标触发对象
		targetCell:".sub", //titCell里面包含的要显示/消失的对象
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:0, //鼠标延迟触发时间（默认150）
		returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
	});	
	jQuery("#nav").slide({ 
		type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
		titCell:".nLir", //鼠标触发对象
		targetCell:".sub", //titCell里面包含的要显示/消失的对象
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:0, //鼠标延迟触发时间（默认150）
		returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
	});				
	jQuery(".focusBoxa").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
		//下面startFun代码用于控制文字上下切换
		startFun:function(i){
			 jQuery(".focusBoxa .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
		}
	});	
	jQuery(".slideTxtBox").slide();		
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});		
		
	});

