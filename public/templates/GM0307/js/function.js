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
	
	
	$(window).resize(function(){
		$(".next2 dl .nextright").width($(".next2 dl").width()-$(".next2 dl .nextleft").width()-2)
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		$(".proimgbox1 .title2").height($(".proimgbox").height()-$(".proimgbox1 .proimg").height()-17);
		$(".proimgbox1 .title2").css({
		"line-height":$(".proimgbox1 .title2").height()+"px"
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
	
	$(".back-top").click(function(){
		$(".index-wrap").animate({scrollTop :0}, 800)
	})
	
  });
  
