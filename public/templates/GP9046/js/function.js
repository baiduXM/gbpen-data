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
	//搜索结束

	//导航
	// $(".nav .m").hover(function() {
	// 	$(this).find(".sub").stop(true, true).slideDown();
	// }, function() {
	// 	$(this).find(".sub").slideUp();
	// });

	// var navsub;
	// if($(".nav li.active").length>0){
	// 	var navid = $(".nav li.active").index();
	// }else{
	// 	var navid = 100;
	// }
	// $(".nav li").mouseover(function(){
	// 	var obj = $(this);
	// 	$(".nav li").removeClass("active");
	// 	obj.addClass("active");
	// 	clearInterval(navsub);
	// 	if(obj.find(".sub a").length>0){
	// 		function thisstart(){
	// 			$(".topbg .subbg").slideDown(300);
	// 			obj.find(".sub").slideDown(300);
	// 		}
	// 		navsub = setTimeout(thisstart, 200);
	// 	}else{
	// 		$(".topbg .subbg").stop().slideUp(300);
	// 	}
	// });
	// $(".nav li").mouseleave(function() {
	// 	$(".nav li").removeClass("active");
	// 	$(".nav li").eq(navid).addClass("active");
	// 	clearInterval(navsub);
	// 	function thisend(){
	// 		// if($(".homePage").length<=0){
	// 		// 	$(".header .subbg,.header li.active .sub").slideDown();
	// 		// }else{
	// 		// 	$(".header .subbg").stop().slideUp(300);
	// 		// }
	// 		$(".topbg .subbg").slideUp();
	// 		$(".sub").slideUp();
	// 	}
	// 	$(".topbg .subbg").stop().slideUp(300);
	// 	navsub = setTimeout(thisend, 200);
	// 	$(this).find(".sub").slideUp(300);
	// });

	// var navsub;
	// if($(".nav li.active").length>0){
	// 	var navid = $(".nav li.active").index();
	// }else{
	// 	var navid = 100;
	// }

	$(".nav li").hover(function(){
		var obj = $(this);
		$(".nav li").removeClass("active");
		obj.addClass("active");	
		if(obj.find(".sub a").length>0){		
			$(".topbg .subbg").stop(true, true).slideDown();
			obj.find(".sub").stop(true, true).slideDown(300);		
		}else{
			$(".topbg .subbg").slideUp();
		}
	}, function() {
		$(this).find(".sub").slideUp(100);
		$(".topbg .subbg").slideUp(100);
	});
	
	// banner切换 
	jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/	
	});	

	// 首页图片列表滚动
	jQuery(".prod").slide({ mainCell:"ul", effect:"leftMarquee", vis:4, autoPlay:true, interTime:50, switchLoad:"_src" });


	$(function(){
		function Zoom(a){
			$(a).mouseover(function() {
				$(this).css({zIndex: 9999}).transition({ scale: 1.1 }, 200, 'linear');
			});
			$(a).mouseleave(function() {
				$(this).transition({ scale: 1 }, 100, 'linear',function(){
					if ($(this).hasClass('pics')) {
						$(this).css({zIndex:9});
					} else{
						$(this).css({zIndex: 1});
					};				
				});
			});
		}
		Zoom(".pics");
		Zoom(".video");
		Zoom(".educt");
		// Zoom(".indexnews");
	})

	jQuery(".edu-scroll").slide({ mainCell:"ul", effect:"leftLoop", vis:4, autoPlay:true, interTime:3000, switchLoad:"_src" });


	//限制个数
	$(".xz").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html()+'...');   
		}
	});  

	//限制导航字数
	$(".menu").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html());   
		}    
	});

	//限制内页大标题字数
	$(".bigtitle").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html());   
		}    
	});

	//内页三级水平导航
	$(".aboutNav>li>a").click(function(){
	    if($(this).parent().find(".dl1").size()){
	      if($(this).parent().hasClass("on")==false){
	      	$(".navigation").css("padding-bottom","45px");
	        $(".navigation .dl1").slideUp();
	        $(".navigation .dl1 dl").slideUp();
	        $(this).parent().find(".dl1").stop(true, true).slideDown();
	        $(this).parent().addClass("on").siblings().removeClass("on");         
	      }else{
	        $(".navigation .dl1").slideUp();
	        $(".navigation .dl1 dl").slideUp();
	        $(this).parent().removeClass("on"); 
	        $(".navigation").css("padding-bottom","0px");
	      }

	      return false;
	    }else{
	        return true;
	    }
	});
	$(".aboutNav>li>dl>dd>a").click(function(){
	    if($(this).parent().find("dl").size()){
	      $(".navigation").css("padding-bottom","83px");
	      $(".navigation .dl1 dl").slideUp(); 
	      $(this).parent().find("dl").stop(true, true).slideDown();
	      $(this).parent().addClass("on").siblings().removeClass("on"); 
	      return false;
	    }else{
	        return true;
	      }
	});
 
	$(".pro ul li>a").hover(function() {
		// $(".pro .shadow").show();
		$(this).find(".shadow").stop().animate({left: 50+"%", marginLeft: "-"+180+"px"}, "slow");
		$(this).find(".hover").addClass('animated bounceInLeft');
		
	}, function() {
		// $(".pro .shadow").hide();
		$(this).find(".shadow").stop().animate({left: -360}, "slow");
		$(this).find(".hover").removeClass('animated bounceInLeft');
		
	});

	//内页pro_det大图切换
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:800});

});