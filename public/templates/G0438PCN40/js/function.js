 $(document).ready(function(){
	jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub", delayTime:300, triggerTime:0,returnDefault:false  });
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		new WOW().init();
	};
 		jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:false, autoPage:true, trigger:"click",
		mouseOverStop:true,
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});
		$(".banner1").slide({ titCell:".dot ol", mainCell:"ul.picture1", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

 	$(".kz").each(function(){
		    var maxwidth=parseInt($(this).attr("data-limit"));
		    if($(this).text().length>maxwidth){
		    $(this).text($(this).text().substring(0,maxwidth));
		    $(this).html($(this).html()+'...');
		    }
	    });

 	(function(){
		    $("ul.first>li>a").click(function(){
		    	$(this).addClass('active');
		    	$(this).parents('li').siblings('li').find('a').removeClass('active')
				 $(this).parents('li').siblings().find(".second").hide(300);
				 $(this).siblings(".second").toggle(300);
				 $(this).parents('li').siblings().find("li").hide().parents().siblings().find(".third").hide();
				
			})
			
		    $(".second> li > a").click(function(){
		        $(this).addClass('active');
		    	$(this).parents('li').siblings('li').find('a').removeClass('active')
		        $(this).parents().siblings().find(".third").hide(300);	
			    $(this).siblings(".third").toggle(300);	
			})

		    $(".third> li > a").click(function(){
			     $(this).addClass('active');
		    	$(this).parents('li').siblings('li').find('a').removeClass('active')	
			     $(this).siblings(".third").toggle();
			})
		})();

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











	jQuery(".slideBoxs").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox2 .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});






 });