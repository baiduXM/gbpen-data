
$(document).ready(function(){
    $(".category li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })   	
	$(".section ul li .rsp").hide();	
	$(".section	 ul li").hover(function(){
		$(this).find(".rsp").stop().fadeTo(500,0.5)
		$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
	},
	function(){
		$(this).find(".rsp").stop().fadeTo(500,0)
		$(this).find(".text").stop().animate({left:'270'}, {duration: "fast"})
		$(this).find(".text").animate({left:'-270'}, {duration: 0})
	});
	
		jQuery(".focusBoxa").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
			//下面startFun代码用于控制文字上下切换
			startFun:function(i){
				 jQuery(".focusBoxa .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
			}
		});			
		jQuery(".focusBoxb").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
			//下面startFun代码用于控制文字上下切换
			startFun:function(i){
				 jQuery(".focusBoxb .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
			}
		});		
		jQuery(".focusBoxc").slide({ titCell:".num li", mainCell:".pic",effect:"fold", autoPlay:true,trigger:"click",
			//下面startFun代码用于控制文字上下切换
			startFun:function(i){
				 jQuery(".focusBoxc .txt li").eq(i).animate({"bottom":0}).siblings().animate({"bottom":-36});
			}
		});						
			jQuery("#nav").slide({ 
				type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
				titCell:".nLi", //鼠标触发对象
				targetCell:".sub", //titCell里面包含的要显示/消失的对象
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:0, //鼠标延迟触发时间（默认150）
				returnDefault:false //鼠标移走后返回默认状态，例如默认频道是"预告片"，鼠标移走后会返回"预告片"（默认false）
			});		
		jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.9) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});		
		jQuery(".slideBoxc").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});
		jQuery(".m-slide").slide({ titCell:".tab li", mainCell:".img",effect:"fold", autoPlay:true});
jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftLoop", vis:3, scroll:1,  autoPage:true, switchLoad:"_src" });
	
		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 3,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});					
     
		
});

$(function() {
    if (window.PIE) {
        $('.rounded').each(function() {
            PIE.attach(this);
        });
    }
});			


//回到顶部
function goTop(){
	$('html,body').animate({'scrollTop':0},600);
}

