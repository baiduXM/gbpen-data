$(document).ready(function($) {

	//二级分类
	$(".aboutNav>li>a").click(function(){		
		$(this).parent().siblings().find(".second").slideUp()
	    $(this).siblings(".second").slideToggle()
		// return false;
	})	
	$(".second>dd>a").click(function () {
	    $(this).parent().siblings().find(".third").slideUp()
	    $(this).siblings(".third").slideToggle()
	})

});

	$(function() {
	    if (window.PIE) {
	        $('.rounded').each(function() {
	            PIE.attach(this);
	        });
	    }
	});
		
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
		$.focusblur(".searchkey");
	//搜索结束

//限制个数
$(".xz").each(function(){   
	var maxwidth=parseInt($(this).attr("data-limit"));
	if($(this).text().length>maxwidth){   
		$(this).text($(this).text().substring(0,maxwidth));    
		$(this).html($(this).html()+'...');   
		}    
	});  


	// 导航
	(function(){
			var ind = 2; //初始位置
			var nav= jQuery(".nav");
			var init = jQuery(".nav .m").eq(ind);
			var block = jQuery(".nav .block"); //滑块
			block.css({"left":init.position().left-3}); //初始化滑块位置
			nav.hover(function(){},function(){ block.animate({"left":init.position().left-3},100); }); //移出导航滑块返回

			jQuery(".nav").slide({ 
					type:"menu", //效果类型
					titCell:".m", // 鼠标触发对象
					targetCell:".sub", // 效果对象，必须被titCell包含
					delayTime:300, // 效果时间
					triggerTime:0, //鼠标延迟触发时间
					returnDefault:true,//on返回初始位置
					defaultIndex:ind,//初始位置
					startFun:function(i,c,s,tit){ //控制当前滑块位置
						block.animate({"left":tit.eq(i).position().left-3},100);
					}
				});
	})()



	// banner切换 
	var slider = new osSlider({ //开始创建效果
			pNode:'.slider', //容器的选择器 必填
			cNode:'.slider-main li', //轮播体的选择器 必填
			speed:3000, //速度 默认3000 可不填写
			autoPlay:true //是否自动播放 默认true 可不填写
		});



	// 图片滚动
	jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftMarquee", vis:3, autoPlay:true, interTime:50, switchLoad:"_src" });
	
	//产品详细页大图切换
	$(function(){
		if ($(".pictureSlider").length>0) {
			Carousel.init($(".pictureSlider"));
		}
	});