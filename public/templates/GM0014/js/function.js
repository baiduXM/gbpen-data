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
					slideCell:"#picScroll",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					autoPage:true, //自动分页
					pnLoop:"false", // 前后按钮不循环
					switchLoad:"_src", //切换加载，真实图片路径为"_src"
					autoPlay:true,
					effect:"leftLoop",
					interTime:5000
				});
		
	$(window).load(function(){
	var img=new Image();
		var self5 = $(".aboutimgs");
                                        var heights5 = $(self5).height()-'20'+'px';;
                                        var alimat5 = $(".a_text");
                                        alimat5.height(heights5);		
		var self6 = $(".nimg1");
                                        var heights6 = $(self6).height();;
                                        var alimat6 = $(".decurlits");
                                        alimat6.height(heights6);	
									
	$(".box-about .text").height($(".box-about .a_text").height()-10)
	if($(window).width()<400){
		$(".box-about .text").css({'line-height':$(".box-about .text").height()/3+"px"})
		}else{
			if($(window).width()<540)
			{$(".box-about .text").css({'line-height':$(".box-about .text").height()/5+"px"})}
			else{$(".box-about .text").css({'line-height':$(".box-about .text").height()/6+"px"})}
			}
																		
										
	 img.src=$(".prolist img").attr("src");
	$(".index-wrap").height($(".wrap").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".menulist dl").height($(".menulist dl").width())
	$(".menu").height($(".menulist dl").outerHeight())
	$(".prolist .tielbox").height($(".prolist img").height())
	}); 
	$(window).resize(function(){
		/* $(".index-wrap").height($(window).height()) */
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".menulist dl").height($(".menulist dl").width())
		$(".menu").height($(".menulist dl").outerHeight())
		$(".prolist .tielbox").height($(".prolist img").height())
		
			
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
  $("#daohang").click(function(){
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

	