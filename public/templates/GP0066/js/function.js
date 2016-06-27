jQuery(document).ready(function($) {
	


nav(".aboutNav");
	function nav(stair){
		var stair=$(stair).children('li').children('a'),
		 obj=stair.next(),
		 erj=obj.children('dd').children('a'),
         sj=erj.next();
		if (obj.length>0) {
			
			obj.prev().append('<span>+</span>')
			stair.click(function(event) {
              $(this).children('span').text() == "+"?$(this).attr('href', 'javascript:void(0)')&&
                 $(this).children('span').text('-'):$(this).children('span').text('+')

              $(this).next().slideToggle(200)
			});
            if (sj.length>0) {

            	sj.prev().prepend('<span>+</span>')
            	
            	erj.click(function(event) {
            		
            		if($(this).children('span').text() == "+"){
            			$(this).attr('href', 'javascript:void(0)');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
             };

              $(this).next().slideToggle(200)
            	});
            };
		};       
    }

});




	// <!-- 导航 -->


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



// <!-- banner切换 -->

		jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",  autoPlay:true, autoPage:true, trigger:"click",
			mouseOverStop:false,/* 鼠标移到容器层继续播放*/
			
		});


// <!-- 图片滚动 -->

jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftMarquee", vis:4, autoPlay:true, interTime:20, switchLoad:"_src" });


/*鼠标移过，左右按钮显示*/
jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.2) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
/*SuperSlide图片切换*/
jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});

