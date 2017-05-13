$(document).ready(function(){
	/*大图js效果*/
	TouchSlide({ 
		slideCell:"#slideBox",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell:".bd ul", 
		effect:"leftLoop", 
		autoPage:true,//自动分页
		autoPlay:true,
		interTime:6000 //自动播放
	});

				
  //隐藏导航跟wrap的切换
$("#daohang,#header_menu,#fixed_menu").click(function(){
		$("#quickbar-navs").removeClass("page-prev").addClass("page-in");
		$("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
		$(".quickbar-opacity2").show()
		pageSlideOver();
	})
	$(".quickbar-navs-close,.quickbar-opacity2").on('touchstart',function(){
		$("#quickbar-navs").addClass("page-prev page-out")
		$("#quickbar-wrap").removeClass("page-next").addClass(" page-out")
		$(".quickbar-opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
		return false;
	})			

	//字体上下拉开始
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
	
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".font dl.big,.font1 dl.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".list_page").attr('class',"list_page font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	
	})
	$(".font dl.normal,.font1 dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".list_page").attr('class',"list_page font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	
	})
	$(".font dl.small,.font1 dl.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".list_page").attr('class',"list_page font-small")
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
	//返回顶部开始
	$(".back-top").click(function(){$("#quickbar-wrap-body,body").animate({scrollTop :0}, 800)})
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
	
	