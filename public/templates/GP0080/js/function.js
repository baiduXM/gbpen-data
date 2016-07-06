jQuery(document).ready(function($) {
	
jQuery(".slideBoxb").slide({mainCell:".bd ul",autoPlay:false,effect:"leftLoop"});

// <!-- banner切换 -->

/*鼠标移过，左右按钮显示*/
jQuery(".focusBox").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",1) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
/*SuperSlide图片切换*/
jQuery(".focusBox").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});

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
			// var init = jQuery(".nav .m").eq(ind);
			var block = jQuery(".nav .block"); //滑块
			// block.css({"left":init.position().left-3}); //初始化滑块位置
			// nav.hover(function(){},function(){ block.animate({"left":init.position().left-3},100); }); //移出导航滑块返回

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



	

	// <!-- 滚动 -->

		jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});

	// <!-- news滚动 -->

		/* 使用js分组，每4个li放到一个ul里面 */
		jQuery(" .bfd li").each(function(i){ jQuery(" .bfd li").slice(i*4,i*4+4).wrapAll("<ul></ul>");});

		 
		/* 调用SuperSlide，每次滚动一个ul，相当于每次滚动4个li */
		jQuery(".index_news").slide({titCell:".hd ul",mainCell:".bfd .picList",autoPage:true,effect:"leftLoop",autoPlay:true});
		    
// <!-- pro_det页面滚动 -->
	/*SuperSlide图片切换*/
	// jQuery(".focus").slide({ mainCell:".pic",effect:"fold", autoPlay:false, delayTime:600, trigger:"click"});
	// var hdul = 	document.getElementById("hdul");
	// hdul.style.width = (13*hdul.getElementsByTagName("li").length)+"px";

// <!-- 返回顶部 -->
function pageScroll(){
    //把内容滚动指定的像素数（第一个参数是向右滚动的像素数，第二个参数是向下滚动的像素数）
    window.scrollBy(0,-100);
    //延时递归调用，模拟滚动向上效果
    scrolldelay = setTimeout('pageScroll()',100);
    //获取scrollTop值，声明了DTD的标准网页取document.documentElement.scrollTop，否则取document.body.scrollTop；因为二者只有一个会生效，另一个就恒为0，所以取和值可以得到网页的真正的scrollTop值
    var sTop=document.documentElement.scrollTop+document.body.scrollTop;
    //判断当页面到达顶部，取消延时代码（否则页面滚动到顶部会无法再向下正常浏览页面）
    if(sTop==0) clearTimeout(scrolldelay);
}


