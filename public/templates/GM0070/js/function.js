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
var w=$(".menulist .swiper-nav span").width()
var w1=$(".menulist .swiper-nav span i").height()
$(".swiper-wrapper,.swiper-slide ").height(w+30)
$(".menulist .swiper-nav span").height(w)
$(".menulist .swiper-nav span b").height($(".menulist .swiper-nav span b").width()).css("margin-top",(w- $(".menulist .swiper-nav span b").width())*0.5+"px")
var n=$(".menulist .swiper-nav span b").height()+"px"
$(".menulist .swiper-nav span b").css({"line-height":n})
$(".menulist .swiper-nav span b .iconfont").css({"font-size":25})

  $(".menulist .arrow-left,.menulist .arrow-right").css("line-height",w+30+"px")
  $(".in_page,.in_pagebg2").height($(".in_pagebg").height())
  $(".in_pagebg2").css("top",$(".in_page").width()*0.05+"px")
 $(".in_imagetext").css("margin-top",$(".in_page").width()*0.05+40+"px")
 $(".in_image .inner").height($(".in_image ul li").height())
 $(".searchresult ul li:odd").addClass("bg22")

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
	$(".index-wrap").height($(".wrap").height())
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
	 $(".index-wrap").height($(".wrap").height()+$(".quickbar-tips").height()) 
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
								

  function setHeighti() {
                                  // $('.slimgs2').each(function () {
        var self5 = $(".aboutimgs");
        var heights5 = $(self5).height()-'20'+'px';;
        var alimat5 = $(".a_text");
       alimat5.height(heights5);										
                                  //  })

                                };
          setHeighti();								
 $(window).resize(function(){
	setTimeout(setHeighti);
	 })		
	
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
		$(".font,.font_1").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".font dl.big,.font_1 dl.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".list_page").attr('class',"list_page font-big")
		$(".font,.font_1").hide()
	})
	$(".font dl.normal,.font_1 dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".list_page").attr('class',"list_page font-normal")
		$(".font,.font_1").hide()
	})
	
	$(".font dl.smal,.font_1 dl.smal").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-small")
		$(".list_page").attr('class',"list_page font-small")
		$(".font,.font_1").hide()

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

	