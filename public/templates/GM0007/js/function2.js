$(document).ready(function(){
	$(window).load(function(){
	var img=new Image();
	img.src=$(".proimg img").attr("src");
	$(".proimgbox1 .title2").height($(".proimgbox").height()-$(".proimgbox1 .proimg").height()-17);
	$(".proimgbox1 .title2").css({
		"line-height":$(".proimgbox1 .title2").height()+"px"
		})
	});
	$(".next2 dl .nextright").width($(".next2 dl").width()-$(".next2 dl .nextleft").width()-2)
	$(".index-wrap").height($(window).height()-$(".fixed").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".tu1").height($(".tu1").width()).css({
		"line-height":$(".tu1").height()+"px"
		})
	
	$(window).resize(function(){
		$(".next2 dl .nextright").width($(".next2 dl").width()-$(".next2 dl .nextleft").width()-2)
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		$(".proimgbox1 .title2").height($(".proimgbox").height()-$(".proimgbox1 .proimg").height()-17);
		$(".proimgbox1 .title2").css({
		"line-height":$(".proimgbox1 .title2").height()+"px"
		})
		$(".tu1").height($(".tu1").width()).css({
		"line-height":$(".tu1").height()+"px"
		})
	})
	
	$("#share_btn").click(function(){
		$(".share-con").addClass("share-transform")
		$(".opacity2").show()
	})
	$("#search").click(function(){
		$(".search").addClass("share-transform")
		$(".opacity2").show()
	})
	//隐藏导航跟wrap的切换
	$("#class").click(function(){
		$(".class").addClass("hover")
		$(".wrap").addClass("wrap-transform")
		$(".opacity2").show()
	})
	$(".class-close,.opacity2").click(function(){
		
		$(".class").removeClass("hover")
		$(".wrap").removeClass("wrap-transform")
		$(".share-con").removeClass("share-transform")
		$(".search").removeClass("share-transform")
		$(".opacity2").hide()
	})
	
  	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()
	})
	$("")
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").slideUp()
		$(".font").slideToggle()
		
	})
	
	//返回定都
	$('.back-top').click(function(){
		$('.index-wrap .scroll-container').find('.swiper-wrapper').css({'transform':'translate3d(0px, 0px, 0px)','-webkit-transform':'translate3d(0px, 0px, 0px)','transition': '0.3s'});

	})
	
  });
  
