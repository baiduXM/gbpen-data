$(document).ready(function(){
	$(".nextbaner").find("img").attr("src",$(".bd li").eq(1).find("img").attr('src'))
				TouchSlide({ 
					slideCell:"#slideBox",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"leftLoop", 
					autoPage:true,//自动分页
					autoPlay:true,
					delayTime:500,
					interTime:6000,
					endFun:function(){
						var yulan=$(".pageState").find("span").text()?$(".pageState").find("span").text():1;
						yulan=parseInt(yulan)+1;
						$(".nextbaner").find("img").attr("src",$(".bd li").eq(yulan).find("img").attr('src'))
						} //自动播放
				});
	$(window).load(function(){
		var img=new Image();
		img.src=$(".logo img").attr("src");
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(window).height()-$(".fixed").height())
	
	$(".menu .menulist dd").height($(".menu .menulist dd").width())
	$(".menu .menulist dd a").css({
		"line-height":$(".menu .menulist dd").height()+"px"
		})
	});
	
	
	$(window).resize(function(){
		
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".menu .menulist dd").height($(".menu .menulist dd").width())
		$(".menu .menulist dd a").css({
		"line-height":$(".menu .menulist dd").height()+"px"
		})
		$(".index-wrap").height($(window).height()-$(".fixed").height())

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
	$("#class").click(function(){
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
		return false;
	})
	
	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
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
  });
