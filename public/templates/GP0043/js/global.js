$(document).ready(function(){
		jQuery(".txtMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:2,interTime:50});

	
		jQuery(".nav").slide({ 
			type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
			titCell:".nLi", //鼠标触发对象
			targetCell:".subnav", //titCell里面包含的要显示/消失的对象
			effect:"slideDown", //targetCell下拉效果
			delayTime:300 , //效果时间
			triggerTime:0, //鼠标延迟触发时间（默认150）
			returnDefault:true //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
		});	
			
		$('.first li a').click(function() {
	        $(this).parent().siblings().find('.second').slideUp()
	        $(this).siblings(".second").slideToggle()
	        $(this).siblings(".second").children('li').children('a').click(function() {
	              $(this).parent().siblings().find('.three').slideUp()
	              $(this).siblings(".three").slideToggle()
	        });
	      });
		// $('.side-right h1 .locate a').first().css('marginLeft',20)
		$('.ny-prolist li:nth-child(3n)').css('marginRight',0)
	    jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:300});
 		jQuery(".txtMarquee-top").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:1,interTime:50});
 		$('.ny-prolist .list-item:nth-child(4n)').css('marginRight', 0);
 		$('.list-item .photo span').hover(function() {
 			$(this).next().next().hide();
 		}, function() {
 			$(this).next().next().show();
 		});
 		$('.multipleColumn .bd ul').find('li:nth-child(2n)').css('marginRight',0);
});