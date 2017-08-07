$(document).ready(function(){
	$(window).load(function(){
	var img=new Image();
	img.src=$("#about img").attr("src");		
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	});
	$(window).resize(function(){
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
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
	$("#class,#header_menu").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
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
		return false
	})
	
	
  	
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
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})
$(".back-top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})
	$("#share_btn").click(function(){
		$(".newsclass").addClass("show")
		$(".opacity2").show()
		return false
	})
	
	
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
		TouchSlide({
		slideCell: "#slideBox",
		titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".bd ul",
		effect: "leftLoop",
		autoPage: true, //自动分页
		autoPlay: true,
		interTime: 6000 //自动播放
	});
	TouchSlide({
		slideCell: "#picScroll",
		titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		autoPage: true, //自动分页
		pnLoop: "false", // 前后按钮不循环
		switchLoad: "_src" //切换加载，真实图片路径为"_src" 
	});
  });
