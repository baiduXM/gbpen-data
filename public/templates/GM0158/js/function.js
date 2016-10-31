$(document).ready(function(){
	$(window).load(function(){
		var img=new Image();

		img.src=$("ul.newslist li img").attr("src");

		$("ul.newslist li .editbox .nr").height($("ul.newslist li img").height()-$("ul.newslist li .editbox .title").height()-10)
		if($(window).width()<400){
			$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/2+"px"})
		}else{
			if($(window).width()<540)
				{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/3+"px"})}
			else{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/4+"px"})}
			}
	
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
	
	});

	$(window).resize(function(){
		$("ul.newslist li .editbox .nr").height($("ul.newslist li img").height()-$("ul.newslist li .editbox .title").height()-10)
		if($(window).width()<400){
			$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/2+"px"})
		}else{
			if($(window).width()<540)
				{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/3+"px"})}
			else{$("ul.newslist li .editbox .nr").css({'line-height':$("ul.newslist li .editbox .nr").height()/4+"px"})}
			}
	
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
		$('.devicebox-item1,.back').height($('.devicebox-item1,.back').width());

	})


										
								
	// function pageSlideOver(){
	//     $('.page-out').live('transitionend', function(){
	//       $(this).removeClass('page-out');
	//     });
	//     $('.page-in').live('transitionend', function(){
	//       $(this).removeClass('page-in');
	//     });
 //    }

   //隐藏导航跟wrap的切换
	$("#class,.hicon2").click(function(){
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


	$("#classa").click(function(){
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
	
	$(".headersearch").on('touchstart',function(){
		$(".searchbox").toggleClass("searchbox-block")
		return false
	})	
  	
	$(".fontbox").click(function(){
		// $("#up").hide()
		// $("#down").show()
		// $(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		// $(".hide-class").slideUp()	
	})

	// 字体大号
	$(".fontbox span.font-big").click(function(){
		$(".edit").attr('class',"edit font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})

    // 字体中号
	$(".fontbox span.font-normal").click(function(){
		$(".edit").attr('class',"edit font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})

    // 字体小号
	$(".fontbox span.font-small").click(function(){
		$(".edit").attr('class',"edit font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	

    // 分类
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})

	//返回顶部 
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
	


	$(".more2").click(function(){
		if ($(".sidebar ul.first li").length > 1) {
			$(".sidebar").show()
			$('.index-wrap').hide()	
		}
	});
	$('.back').click(function() {
		$(".sidebar").hide()
		$('.index-wrap').show()	
	})



	$(window).resize(function() {

	});

	$("#search").click(function(){
		$(".search").show();
		$('.index-wrap').hide();
		
	})
	$('.backhis').click(function(){
		$('.search').hide();
		$('.index-wrap').show();
	})
  
	// $("#search-back").click(function(){
	// 	$(".search-wrap").addClass("page-up");
		
	// })

//banner
        TouchSlide(         
        {slideCell:"#slideBox",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul", 
        effect:"leftLoop", 
        prevCell:".slide_left",
        nextCell:".slide_right",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:10000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

        });
        TouchSlide(         
        {slideCell:"#proBox",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul", 
        effect:"leftLoop", 
        prevCell:".slide_left",
        nextCell:".slide_right",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:10000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

        });
		TouchSlide({ 
			slideCell:"#aboutPic",
			titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell:".bd ul", 
			effect:"leftLoop", 
			autoPage:true //自动分页
		});
		TouchSlide({ slideCell:"#leftTabBox" });
	

	$('.devicebox-item1').height($('.devicebox-item1').width());

	$(".first li a").click(function(){
		$(this).parent().siblings().find(".second").slideUp()
		$(this).siblings(".second").slideToggle()

	})
	$(".second li a").click(function(){
		$(this).parent().siblings().find(".third").slideUp()
		$(this).siblings(".third").slideToggle()

	})
	


});
  
