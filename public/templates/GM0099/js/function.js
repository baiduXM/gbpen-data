$(document).ready(function(){

	




				TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:true,
					interTime:6000 //自动播放
				});	
				TouchSlide({ 
					slideCell:"#picScroll1",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});	
				TouchSlide({ 
					slideCell:"#picScroll2",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});	
				TouchSlide({ 
					slideCell:"#picScroll3",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});													
				
				TouchSlide({ 
					slideCell:"#picScroll4",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});	
				TouchSlide({ 
					slideCell:"#picScroll5",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});	
				TouchSlide({ 
					slideCell:"#picScroll6",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});	


				







	$(window).load(function(){
	var img=new Image();		
	img.src=$(".prolist img").attr("src");
		// console.log($('div[id^=picScroll]').length);
	var img=new Image();
	$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".topxz").width($(".wrap-bg").width()-50)
	$(".header").width($(".wrap-bg").width()-10)
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".fixed-top").width($(".index-wrap").width()-10)
	$(".menu").height($(".menulist dl").outerHeight())
	$(".rbger").height($(".leftaimg").height()-5)
	$(".topxze").width($(".wrap-bg").width()-60)	
	$(".topxz").width($(".wrap-bg").width()-50)	
	$(".c_wprd").height($(".cimg").height())
	$(".prodshow dd:nth-child(2) .cimg").height($(".prodshow dd:nth-child(1) .cimg").height())
	$(".left_clorbg").height($(".right_clorbg").height())		
	});
	$(window).resize(function(){
	$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".topxz").width($(".wrap-bg").width()-50)
	$(".header").width($(".wrap-bg").width()-10)
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".menulist dl").height($(".menulist dl").width())
	$(".menu").height($(".menulist dl").outerHeight())
	$(".rbger").height($(".leftaimg").height()-5)
	$(".topxze").width($(".wrap-bg").width()-60)
	$(".c_wprd").height($(".cimg").height())
	$(".prodshow dd:nth-child(2) .cimg").height($(".prodshow dd:nth-child(1) .cimg").height())
	$(".left_clorbg").height($(".right_clorbg").height())			


	$(".i_gywm").each(function (){
		var rimgh = $(this).find("dl").find("dd").find(".right_clorbg").height();
    	$(this).find("dl").find("dd").find(".left_clorbg").find(".c_titl").height((rimgh-60));
    	$(this).find("dl").find("dd").find(".left_clorbg").find(".c_titl").css("top",0);
    });



	});
	
	
	// function pageSlideOver(){
 //    $('.page-out').live('transitionend', function(){
 //      $(this).removeClass('page-out');
 //    });
 //    $('.page-in').live('transitionend', function(){
 //      $(this).removeClass('page-in');
 //    });
 //  }
  //隐藏导航跟wrap的切换
	// $("#class").click(function(){
	// 	$(".class").removeClass("page-prev").addClass("page-in");
	// 	$(".wrap").removeClass("page-active").addClass("page-next page-in")
	// 	$(".opacity2").show()
	// 	pageSlideOver();
		
	// })
	// $(".class-close,.opacity2").on('touchstart',function(){
	// 	$(".class").addClass("page-prev page-out")
	// 	$(".wrap").removeClass("page-next").addClass(" page-out")
	// 	$(".opacity2").hide()
	// 	$(".newsclass").removeClass("show")
	// 	pageSlideOver();
	// 	return false;
	// })
	
	// $(".class-close").click(function(){
	// 	$(this).parents(".class").animate({"right":-100+"%"})
	// 	 $(".class").css('display','none')
	// 	 $(".opacity2").hide()
	// 	})		
	$("#daohang").click(function(){
		// $(".rclass").animate({"right":0+"%"}) 
	    // $(".class").css('display','block')
	    $(".rclass").slideDown(500);
	    
	})
	$('.rclass-close').click(function(){
		// $(this).parents(".rclass").animate({"right":-100+"%"})
		$(".rclass").slideUp(500);
	})											
	
  //隐藏导航跟wrap的切换
	// $(".class-close,.opacity2").on('touchstart',function(){
	// 	$(".class").addClass("page-prev page-out")
	// 	$(".wrap").removeClass("page-next").addClass(" page-out")
	// 	$(".opacity2").hide()
	// 	$(".newsclass").removeClass("show")
	// 	pageSlideOver();
	// 	return false;
	// })
		
	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	
	//字体上下拉开始
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".font dl.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".font dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".font dl.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	//字体上下拉结束
	//分类上下拉开始
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})
	//分类上下拉结束
	
	$(".title2 span.bigd").click(function(){
		$(".edite").attr('class',"edite font-big")
	})
	$(".title2 span.middled").click(function(){
		$(".edite").attr('class',"edite font-normal")
	})
	$(".title2 span.smalld").click(function(){
		$(".edite").attr('class',"edite font-small")

	})	
 //  $("#search").click(function(){
	// 	$(".windows").show()
		
	// })		
	
	//返回顶部开始
	$(".top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})
	$("#share_btn").click(function(){
		$(".newsclass").addClass("show")
		$(".opacity2").show()
		return false
	})
	//返回顶部结束
	//分享取消按钮开始
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
    $(".hide-class li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 


    
	
 	
});
	//分享取消按钮结束


	
$(function(){
    $("input").click(function () {
      $(this).focus();
    }) 
}); 	