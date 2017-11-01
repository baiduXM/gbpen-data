 $(document).ready(function(){
 	jQuery(".new-actives").slide({ mainCell:".tab-bd-in", effect:"top", delayTime:400,pnLoop:false,easing:"easeOutCubic" });
	jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});
 	jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", delayTime:300, triggerTime:0,returnDefault:false  });
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		new WOW().init();
	};
		jQuery(".focusBox2").slide({ mainCell:".pic2",effect:"fold", autoPlay:true, delayTime:300});
jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
		//焦点图功能，用到SuperSlide插件
	jQuery(".w3cFocus").slide({ mainCell:".bd ul", effect:"fold", delayTime:300, autoPlay:true });

	//按钮位移函数
	function moveBtn(){
				var prev=jQuery(".w3cFocus .prev");
				var next=jQuery(".w3cFocus .next");

				var body_w = document.body.clientWidth;
				var side_w = (body_w - 960) / 2 -50;

				if(body_w < 1080)
				{
					prev.animate({"left":30, "opacity":0.5});
					next.animate({"right":30, "opacity":0.5});
				}
				else
				{
					prev.animate({"left":side_w, "opacity":0.5});
					next.animate({"right":side_w, "opacity":0.5});
				}
	}
	moveBtn();

	//拉伸浏览器时触发，为了适应不同浏览设备
	jQuery(window).resize(function(){moveBtn();});

 		
		(function(){
			$(".firstul > li > a").click(function(){
				if(!$(this).hasClass('xz')){
					$(this).addClass("xz").parents().siblings().find("a").removeClass("xz");
					$(this).find('span').addClass('activeem').removeClass('normalem');
				} else{
					$(this).removeClass("xz");
					$(this).find('span').addClass('normalem').removeClass('activeem');
				}
			     
				 $(this).parents().siblings().find(".secondul").hide(300);
				 $(this).siblings(".secondul").toggle(300);
				 $(this).parents().siblings().find(".secondul > li > .secondli").hide().parents().siblings().find(".thr_nr").hide();
				
			})
			
		    $(".secondul > li > a").click(function(){
		    	if(!$(this).hasClass('sen_x')){
					$(this).addClass("sen_x").parents().siblings().find("a").removeClass("sen_x");
					$(this).find('span').addClass('actsec')
				} else{
					$(this).removeClass("sen_x");
					$(this).find('span').removeClass('actsec')
				}
		        $(this).parents().siblings().find(".thrul").hide(300);	
			    $(this).siblings(".thrul").toggle(300);	
			})

		    $(".thrul > li > a").click(function(){
			     $(this).addClass("xuan").parents().siblings().find("a").removeClass("xuan");
				 $(this).parents().siblings().find(".thr_nr").hide();	
			     $(this).siblings(".thr_nr").toggle();
			})
		})();

		$('.infoList li a').each(function(index) {
			$(this).hover(function(){
				$(this).find('.mart').stop().animate({ top:"0" },600);
			},function(){
				$(this).find('.mart').stop().animate({top:"-500px" },600)
			});
        });
		$(".kz").each(function(){
		    var maxwidth=parseInt($(this).attr("data-limit"));
		    if($(this).text().length>maxwidth){
		    $(this).text($(this).text().substring(0,maxwidth));
		    $(this).html($(this).html()+'...');
		    }
	    });
	    //创建和初始化地图函数
	
 });