$(document).ready(function(){
    $(".listbg li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
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
		/*鼠标移过，左右按钮显示*/
		jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
		/*SuperSlide图片切换*/
		jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});			
jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});	

		$('#prizes .photos-content.enable').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 3,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});


//搜索开始
	//focusblur
	$.focusblur = function(focusid) {
		var focusblurid = $(focusid);
		var defval = focusblurid.val();
		focusblurid.focus(function(){
			var thisval = $(this).val();
			if(thisval==defval){
				$(this).val("");
			}
		});
		focusblurid.blur(function(){
			var thisval = $(this).val();
			if(thisval==""){
				$(this).val(defval);
			}
		});
		
	};
	/*下面是调用方法*/
	$.focusblur("#searchkey");
//搜索结束


//返回顶部
$('#xtop').on('click',function(){
		$('html,body').animate({'scrollTop':0},500);
	});

//限制个数
$(".xz").each(function(){   
	var maxwidth=parseInt($(this).attr("data-limit"));
	if($(this).text().length>maxwidth){   
		$(this).text($(this).text().substring(0,maxwidth));    
		$(this).html($(this).html()+'...');   
		}    
	});   
});