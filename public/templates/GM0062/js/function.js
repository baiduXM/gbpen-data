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
	img.src=$(".prolist img").attr("src");
		
	var img=new Image();
	$(".banerd").height($(".banerd").width())
	$(".datu").height($(".banerd").height())
	$(".banerd .datu img").height($(".banerd").height())

	});
	$(window).resize(function(){
	$(".banerd").height($(".banerd").width())
	$(".datu").height($(".banerd").height())
	$(".banerd .datu img").height($(".banerd").height())

	});
	
	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }

  //隐藏导航跟wrap的切换
	$(".class-close").click(function(){
		$(this).parents(".class").animate({"right":-100+"%"})
		 $(".class").css('display','none')
		 $(".opacity2").hide()
		})		
	$("#daohang").click(function(){
		$(".class").animate({
			"right":0+"%"
			}) 
	   $(".class").css('display','block')
		})											

	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	
	//字体上下拉开始
  	
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
	//字体上下拉结束
	//分类上下拉开始
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})
	//分类上下拉结束
	
	$(".title2 span.bigd").click(function(){
		$(".edite").attr('class',"edite font-big")
	})
	$(".title2 span.middled").click(function(){
		$(".edite").attr('class',"edite font-normal")
	})
	$(".title2 span.smalld").click(function(){
		$(".edite").attr('class',"edite font-small")

	})	
  $("#search").click(function(){
		$(".windows").show()
		
	})		
	
	//返回顶部开始
	$(".back-top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})
	$("#share_btn").click(function(){
		$(".newsclass").addClass("show")
		$(".opacity2").show()
		return false
	})
	//返回顶部结束
//分享取消按钮开始
	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
    $(".hide-class li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 
	
 	
  	});
	//分享取消按钮结束
	
	

$(function(){
    $("input").click(function () {
      $(this).focus();
    }) 
}); 	