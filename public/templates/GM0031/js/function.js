$(document).ready(function(){
	TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
			     	autoPage:true,//自动分页
					autoPlay:1000,
					interTime:6000, //自动播放
				});
	$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(window).resize(function(){
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	})
	
		$("#share_btn").click(function(){
		$(".newsclass").addClass("show")
		$(".opacity2").show()
		return false
	})
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
	//隐藏导航跟wrap的切换
	$("#class").click(function(){
		$(".class").addClass("hover")
		$(".wrap").addClass("hover1")
		$(".opacity2").show()
		$(".index-wrap").off('touchmove', disableScroll);
	})
	$(".class-close,.opacity2").click(function(){
		$(".class").removeClass("hover")
		$(".wrap").removeClass("hover1")
		$(".opacity2").hide()
		$("body,html").removeClass("overflow")
	})
  	$("#first").click(function(){
		$("#up,#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()
	})
	$("#font").click(function(){
		$(".font").slideToggle()
		$(".hide-class").slideUp()
	})
		var scrollswiper=$('.class .scroll-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			onTouchStart : function() {		 
			 }

		})
  //幻灯片元素与类"menu_body"段与类"menu_head"时点击


	$(".menu_head .icon").click(function(){
	$(this).parent().toggleClass("cur").next(".menu_body").toggleClass("cu").siblings(".menu_body").removeClass("cu");
	$(this).parent().siblings().removeClass("cur");
	$('.class .scroll-container').find('.swiper-wrapper').css({'transform':'translate3d(0px, 0px, 0px)','-webkit-transform':'translate3d(0px, 0px, 0px)','transition': '0.3s'});
	scrollswiper.reInit();
	});
	//返回定都
	$('.back-top').click(function(){
		$(".index-wrap").animate({scrollTop :0}, 800)

	})
	
	var h=$('.news_img img').height()
	h=h*0.76;
	$('.news_more').height(h).width(h)
	
	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	
	$('.swiper-wrapper .swiper-slide:last').find(".text").css("background","none");
	
	$(".heaer:after").height($(".heaer").height())
	$(".about .title").height($(".about .inner").outerHeight()+25+"px")
	$(".news .title").height($(".news .inner").outerHeight()+25+"px")
	 $(".news .inner ul li .more").height($(".news .inner ul li").outerHeight())
    $(".news .inner ul li .more a").css({"line-height":$(".news .inner ul li .more").outerHeight()+"px"})
	
	$(".product .title").height($(".product .inner").outerHeight()+25+"px")
	
	  var w = $(".about .title .bottom .circle1").width()/2;
	 $(".about .title .bottom .circle1").css({"margin-left":"-"+w+"px"});
	 
	  var n = $(".news .title .bottom .circle1").width()/2;
	 $(".news .title .bottom .circle1").css({"margin-left":"-"+w+"px"});
	 
	   var n = $(".product .title .bottom .circle1").width()/2;
	 $(".product .title .bottom .circle1").css({"margin-left":"-"+w+"px"});
	
  });
