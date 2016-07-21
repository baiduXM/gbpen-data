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
		// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height());
		
		$('.nav li').each(function(){
			$(this).find('.nav-tit').height($(this).find('.nav-img').height());
		});

		$('.side-right').height($('.banner').height());
		$('.side-right a').height(($('.banner').height()-10)/2);
		$('.pclass').height($('.side-right a').height())

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

		$(".font").slideToggle()
		$('.fontbox span').toggleClass('fontdown');
	})

	// 字体大号
	$(".font dl.big,.font1 dl.big").click(function(){
		$(".edit").attr('class',"edit font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})

    // 字体中号
	$(".font dl.normal,.font1 dl.normal").click(function(){
		$(".edit").attr('class',"edit font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})

    // 字体小号
	$(".font dl.small,.font1 dl.small").click(function(){
		$(".edit").attr('class',"edit font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	

    // 分类
	// $("#first").click(function(){
	// 	$("#up").toggle()
	// 	$("#down").toggle()
	// 	$(".hide-class").slideToggle()
	// 	$(".font").slideUp()	
	// })

	//返回顶部 
	$(".back-top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})
		$("#share_btn").click(function(){
			$(".newsclass").addClass("show")
			$(".opacity2").show()
			return false
	})

	// $(".ny-news-list li,#picture li,ul.picture2 li,.news_list .news_d").hide();	
	//     size_li = $(".ny-news-list li,ul.picture2 li,.case_list li,.news_list .news_d").size();
	//     x=4;
	//     $('.ny-news-list li:lt('+x+'),ul.picture2 li:lt('+x+'),.case_list li:lt('+x+'),.news_list .news_d:lt('+x+')').show();
	//     $('#more').click(function () {
	//         x= (x+4 <= size_li) ? x+4 : size_li;
	//         $('.ny-news-list li:lt('+x+'),ul.picture2 li:lt('+x+'),.case_list li:lt('+x+'),.news_list .news_d:lt('+x+')').fadeIn();
	//         if(x == size_li){
	//             $('#more').hide();
	// 			$('#less_more').show();
	//         }
	// });		

	$(".share-cance").click(function(){
		$(".newsclass").removeClass("show")
		$(".opacity2").hide()
	})
	


	$(".more2,.more3").click(function(){

		$(".hide-class").slideToggle()	
		$(".more2 i,.more3 i").toggleClass("arw-rotate");
	})



	$("#search").click(function(){
		$(".search").toggle();
		
	})
	$('.opacity3').click(function(){
		$('.search').hide();
	})


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
// 内页header

	// $('.news-desc').height($('.list-imgtxt ul li a img').height());

	$('.devicebox-item1').height($('.devicebox-item1').width());
	$('.nav li').each(function(){
		$(this).find('.nav-tit').height($(this).find('.nav-img').height());
	});

	$('.side-right').height($('.banner').height());
	$('.side-right a').height(($('.banner').height()-10)/2);
	$('.pclass').height($('.side-right a').height());
	$(".hide-class>li>a").click(function(){
		$(this).parent().siblings(".second").slideUp()
		$(this).siblings(".second").slideToggle()

	})
	$(".second li a").click(function(){

		$(this).parent().siblings().find(".third").slideUp()
		$(this).siblings(".third").slideToggle()

	})

});
  
