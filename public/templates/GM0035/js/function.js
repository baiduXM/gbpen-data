$(document).ready(function(){


	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
    //	$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-46)
	$(".mlist").height($(".mimg").height())
	$(".mlist_null").height($(".mimg").height())	
	
	$(window).resize(function(){	
		$(".mlist").height($(".mimg").height())
		$(".mlist_null").height($(".mimg").height())
				
	})
	

  //隐藏导航跟wrap的切换
  $("#daohang").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		
	})
	$("#class,#header_menu,#fixed_menu").bind('touchstart',function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		
	})
	$(".class-close,.opacity2").on('touchstart',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass("page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		
	})
	


	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	$(".title2 span.bigd").click(function(){
		$(".edite").attr('class',"edite font-big")
	})
	$(".title2 span.middled").click(function(){
		$(".edite").attr('class',"edite font-normal")
	})
	$(".title2 span.smalld").click(function(){
		$(".edite").attr('class',"edite font-small")

	})		
	
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})
	

			 
			 					                            		
	
  });
