$(document).ready(function() {

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
		$.focusblur(".searchkey0");
		$.focusblur(".searchkey1");
		$.focusblur(".searchkey2");
		$.focusblur(".searchkey3");
		$.focusblur(".searchkey4");
	//搜索结束

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

	//限制个数
	$(".xz").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html()+'...');   
		}    
	});  

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
	
	// 内页图文列表滚动
	jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftMarquee", vis:3, autoPlay:true, interTime:50, switchLoad:"_src" });


	//内页pro_det大图切换
	jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
		startFun:function(i,p){
			//控制小图自动翻页
			if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%6==0 ){ jQuery(".game163 .sNext").click()}
		}
	});

	//小图左滚动切换
	jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:6,scroll:1,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

	$(".smallImg li").hover(function () {

        $(this).find(".imgtop").stop().animate({ "top": "-73px" })
        $(this).find(".bottom").stop().animate({ "bottom": "0px" })
        $(this).find(".bg").stop().animate({ "height": "73px" })
      },
		function () {

		    $(this).find(".imgtop").stop().animate({ "top": "0px" })
		    $(this).find(".bottom").stop().animate({ "bottom": "-73px" })
		    $(this).find(".bg").stop().animate({ "height": "0px" })
		});

});