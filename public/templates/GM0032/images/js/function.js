$(document).ready(function(){
	$(window).load(function(){
	var img=new Image();
	$(".lilist").addClass('transforma');
	img.src=$(".about_img img").attr("src");
	img.src=$(".fenleishowr img").attr("src");	
	img.src=$(".nimg1 img").attr("src");
	img.src=$(".nimg2 img").attr("src");			
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
	$(".yuan").height($(".yuan").width())
	$(".yuaters").height($(".yuan").height()-40)
	$(".yuaters").width($(".yuan").width()-40)
	$(".y_edns").width($(".yuan").height()-40)
	$(".y_edns").height($(".yuan").height()-40)
	$(".img_logo").width($(".y_edns").width()-20)
	$(".img_logo").height($(".y_edns").height()-20)		
	$(".mlist").height($(".mimg").height())
	$(".mlist_null").height($(".mimg").height())
    if($(window).width()>320&&$(window).width()<500){
	   $(".topmenu").height($(".index-wrap").height()-$(".foot").height()-56)		
	}else{
		$(".topmenu").height($(".index-wrap").height()-$(".foot").height()-26)
		}	 		
	});
	
	$(window).resize(function(){	
	$(".yuan").height($(".yuan").width())
	$(".yuaters").height($(".yuan").height()-80)
	$(".yuaters").width($(".yuan").width()-80)
	$(".y_edns").width($(".yuan").height()-80)
	$(".y_edns").height($(".yuan").height()-80)
	$(".img_logo").width($(".y_edns").width()-20)
	$(".img_logo").height($(".y_edns").height()-20)		
	$(".mlist").height($(".mimg").height())
	$(".mlist_null").height($(".mimg").height())	
	})
	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }
  //隐藏导航跟wrap的切换
  $("#daohang").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		pageSlideOver();
		
	})
	$("#class,#header_menu,#fixed_menu").bind('touchstart',function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		pageSlideOver();
		
	})
	$(".class-close,.opacity2").on('touchstart',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass(" page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
		
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
