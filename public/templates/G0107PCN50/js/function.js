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
		$.focusblur(".searchkey0");
		$.focusblur(".searchkey1");
		$.focusblur(".searchkey2");
		$.focusblur(".searchkey3");
		$.focusblur(".searchkey4");
	//搜索结束

	// $(".m").hover(function() {
	// 	$(this).find(".sub").stop(true, true).slideDown();
	// }, function() {
	// 	$(this).find(".sub").slideUp();
	// });
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
	jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		
	});


	// 图片滚动
	jQuery(".multipleColumn").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,effect:"leftMarquee",autoPlay:true,vis:4,interTime:30});

	// 产品详细页多图
	jQuery(".focusBox").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
		startFun:function(i,p){
			//控制小图自动翻页
			if(i==0){ jQuery(".focusBox .sPrev").click() } else if( i%3==0 ){ jQuery(".focusBox .sNext").click()}
		}
	});

	//产品详细页小图左滚动切换
	jQuery(".focusBox .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:3,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:true });
});