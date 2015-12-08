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
		TouchSlide({ 
					slideCell:"#bigimg",
					mainCell:"#bigimg ul", 
					effect:"leftLoop", 
					autoPlay:true,
					interTime:6000 //自动播放
				});
	function floattop(){
		var menuoff=$(".menu").offset().top;
		$(".index-wrap").scroll(function(){
			$(".listleft").height($(".listright").height())
			var scroH = $(this).scrollTop();
			if(scroH>menuoff){
				$(".menu").addClass("menu2")
				$(".index-wrap").before($(".menu"))
				
			}
			else{
			$(".menu").removeClass("menu2")
			$(".baner").before($(".menu"))

			}
		})
		}
	

	$(window).load(function(){
	floattop();
	
	var img=new Image();
	img.src=$(".relatebox img").attr("src");
	$(".listleft").height($(".listright").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height())
	$(".relatepro_m").height($(".relatebox").height()+45)
	//赖加载
/* 		$("img.lazy").lazyload({
		   placeholder : "images/loading.gif",
		   container:$(".index-wrap"),
		   effect: "show",
		   threshold:40
		}); */
		
	});
	$(window).resize(function(){	
	floattop();
		$(".listleft").height($(".listright").height())
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(".wrap").height()+$(".quickbar-tips").height())
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
  	});
	//分享取消按钮结束