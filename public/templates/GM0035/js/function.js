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
	img.src=$(".about_img img").attr("src");
	img.src=$(".fenleishowr img").attr("src");	
	img.src=$(".nimg1 img").attr("src");
	img.src=$(".nimg2 img").attr("src");			
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
/*	$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-46)*/
	$(".mlist").height($(".mimg").height())
	$(".mlist_null").height($(".mimg").height())
	if($(window).width()>320&&$(window).width()<500){
		$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-46)
	}else{
		$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()+20)
		}		 		
	});
	
	$(window).resize(function(){	
	$(".mlist").height($(".mimg").height())
	$(".mlist_null").height($(".mimg").height())
/*	$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-46)*/
	if($(window).width()>320&&$(window).width()<500){
		$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-46)
	}else{
		$(".box_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()+20)
		}					
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
