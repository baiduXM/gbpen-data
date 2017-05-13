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
				
$(window).load(function(){
/*美工专属区域*/


var b=($("header").height()-$(".header_menu").height())*0.5
$(".header_menu").css({"top":b})


$(".menulist,.menulist .navlist").height($(".menulist .swiper-nav span").height())
$(".wrapper").css({"margin-top":20,"margin-bottom":20})

$(".back-top").height($(".back-top img").height())






$(".list_imagetext ul li").each(function(){
if($(this).find(".img_box img").height()<$(this).find(".text_box").height()){
	var z=($(this).find(".text_box").height()-$(this).find(".img_box img").height())*0.5
	$(this).find(" .img_box img").css({"margin-top":z})
	}
	else{	
	$(this).find(" .img_box img").css({"margin-top":0})
}
	})








/*美工专属区域*/
	
	
/*标题自适应宽度*/		
	$(".yc ul li").each(function(){
		 var ww=$(this).find("img").width();
   $(this).find("p").width(ww);
  });
 /*标题自适应宽度*/
 
 
 
  var img=new Image();
		var self5 = $(".cpszs_show");
                                        var heights5 = $(self5).height();;
                                        var alimat5 = $(".listpp");
                                        alimat5.height(heights5);		
		var self6 = $(".nimg1");
                                        var heights6 = $(self6).height();;
                                        var alimat6 = $(".decurlits");
                                        alimat6.height(heights6);
	img.src=$(".prolist img").attr("src");
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".menulist dl").height($(".menulist dl").width())
	$(".menu").height($(".menulist dl").outerHeight())
	$(".prolist .tielbox").height($(".prolist img").height())
	});
	$(window).resize(function(){
		/* $(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height()) */
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".menulist dl").height($(".menulist dl").width())
		$(".menu").height($(".menulist dl").outerHeight())
		$(".prolist .tielbox").height($(".prolist img").height())
		
	$("#about .nr dd").height($("#about img").height()-29)
	if($(window).width()<400){
		$("#about .nr dd").css({'line-height':$("#about .nr dd").height()/3+"px"})
		}else{
			if($(window).width()<540)
			{$("#about .nr dd").css({'line-height':$("#about .nr dd").height()/5+"px"})}
			else{$("#about .nr dd").css({'line-height':$("#about .nr dd").height()/6+"px"})}
			}
			
			
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	//赖加载
	
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
	$(".back-top").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})
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

	