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
	img.src=$(".datu img").attr("src");		
	$(".index-wrap").height($(".wrap").height())
	$(".baner_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-16)	
	$(".menu_list ul li a").height($(".menu_list").height()/6-1);
	$(".menu_list ul li a").css({
		"line-height":$(".menu_list ul li a").height()+"px"
		})
	var myswiper=$('.menu_list .scroll-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			onTouchStart : function() {		 
			 }			

		})		
 var mySwipera = new Swiper('.baner .swiper-container',{
    pagination: '.pagination',
    paginationClickable: true
  })	
	});
	$(window).resize(function(){	
	$(".index-wrap").height($(".wrap").height()+$(".quickbar-tips").height())
	$(".baner_menu").height($(".index-wrap").height()-$(".header").height()-$(".foot").height()-16)	
	$(".menu_list ul li a").height($(".menu_list").height()/6-2);
	$(".menu_list ul li a").css({
		"line-height":$(".menu_list ul li a").height()+"px"
		})
	
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
