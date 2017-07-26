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
 	$(window).resize(function(){
 		var iW=0.97*($('#slideBox').width())
		$('.slideBox .bd img').width(iW)
	});
 	$(".kz").each(function(){
		    var maxwidth=parseInt($(this).attr("data-limit"));
		    if($(this).text().length>maxwidth){
		    $(this).text($(this).text().substring(0,maxwidth));
		    $(this).html($(this).html()+'...');
		    }
	    });
 	$('.checkin').each(function(){
 		$(this).click(function(){
 			$(this).children('.news_list').toggle(600);
 		});
 	});

 	(function(){
		    $("a.c").click(function(){
				 $(this).parents('li').siblings().find(".secondul").hide(300);
				 $(this).siblings(".secondul").toggle(300);
				 $(this).parents('li').siblings().find(".secondul > li > .secondli").hide().parents().siblings().find(".thr_nr").hide();
				
			})
			
		    $(".secondul > li > a").click(function(){
		        $(this).addClass("sen_x").parents().siblings().find("a").removeClass("sen_x");
		        $(this).parents().siblings().find(".thrul").hide(300);	
			    $(this).siblings(".thrul").toggle(300);	
			})

		    $(".thrul > li > a").click(function(){
			     $(this).addClass("xuan").parents().siblings().find("a").removeClass("xuan");
				 $(this).parents().siblings().find(".thr_nr").hide();	
			     $(this).siblings(".thr_nr").toggle();
			})
		})();
	jQuery(".slideBoxs").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox2 .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});






 });