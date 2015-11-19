$(document).ready(function(){
	TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:1000,
					interTime:6000 //自动播放
				});
	$(".index-wrap").height($(window).height()-$(".fixed").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(window).resize(function(){
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(window).height()-$(".fixed").height())
	})
	
	$("#share_btn").click(function(){
	 $(".share-con").slideToggle(100)
	});
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
	
  //幻灯片元素与类"menu_body"段与类"menu_head"时点击
	$(".menu_head .icon").click(function(){
		$(this).parent().toggleClass("cur").next(".menu_body").slideToggle(300).siblings(".menu_body").slideUp("slow");
	$(this).parent().siblings().removeClass("cur");
	});
	//返回定都
	$('.back-top').click(function(){
		$(".index-wrap").animate({scrollTop :0}, 800)

	})
	
    var w= $(".menu1 ul li").width();
	$(".menu1 ul li").css({"height":w*0.7,"padding-top":w*0.3+"px"});
	
	window.onload=function(){
	var t_h1 = $('.box-id1').height();
    var t_h = $('.box-id').height()*0.2;
	$(".box-id .triangle").css({"border-width":t_h+"px","top":-t_h+"px"});
	$(".box-id .triangle1").css({"border-width":t_h+"px","bottom":-t_h+"px"});
	$(".box-id1 .triangle3").css({"border-width":t_h1+"px","top":-t_h1+"px"});
}

  });