$(document).ready(function() {
	 jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});
    $(".menua ul.nav a").hover(
    function(){
    $(this).find(".animate").stop().animate({top:-10,opacity:1},200);
            },
    function(){
    $(this).find(".animate").stop().animate({top:0,opacity:1},100)
            }   
        
        )		
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});	
		/*SuperSlide图片切换*/
		jQuery(".ny_focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});	
		jQuery(".ny_focusBoxb").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});	
		
			jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});	
jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
$(function(){
	$('.sw_left').hover(function(){
		$('.sw_text',this).stop().animate({
			height:'387px'
		});
		$(this).find(".p_title").hide();
	},function(){
		$('.sw_text',this).stop().animate({
			height:'0px'
		});
		$(this).find(".p_title").show();
	})
	$('.sw_atera').hover(function(){
		$('.sw_texta',this).stop().animate({
			height:'191px'
		});
	},function(){
		$('.sw_texta',this).stop().animate({
			height:'0px'
		});
	})	
	$('.sw_middle .zolistw').hover(function(){
		$('.text',this).stop().animate({
			height:'191px'
		});
		$(this).find(".p_title").hide();
	},function(){
		$('.text',this).stop().animate({
			height:'0px'
		});
		$(this).find(".p_title").show();
	})	
	$('.sw_bottom .zolistw').hover(function(){
		$('.text',this).stop().animate({
			height:'191px'
		});
		$(this).find(".p_title").hide();
	},function(){
		$('.text',this).stop().animate({
			height:'0px'
		});
		$(this).find(".p_title").show();
	})		
	
	$('.patdog .zolistw').hover(function(){
		$('.text',this).stop().animate({
			height:'197px'
		});
		$(this).find(".p_title").hide();
	},function(){
		$('.text',this).stop().animate({
			height:'0px'
		});
		$(this).find(".p_title").show();
	})
	$('.inner_prob .zolistw').hover(function(){
		$('.text',this).stop().animate({
			height:'235px'
		});
		$(this).find(".p_title").hide();
	},function(){
		$('.text',this).stop().animate({
			height:'0px'
		});
		$(this).find(".p_title").show();
	})	
});		
});

