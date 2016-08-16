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
			$('.about-desc').height($('#aboutPic').height());
			$('.about-desc').css('line-height',lHeight+'px');
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
		$(".hide-class").slideToggle()	
		$(".more2 i").toggleClass("down");
	})

	// index menu

	$('.about-desc').height($('.aboutPic').height());
	lHeight =Math.round($('.aboutPic').height()/5) ;
	$('.about-desc').css('lineHeight',$('.aboutPic').height())
	$('.about-desc').css('line-height',lHeight+'px');
	$(window).resize(function() {
				
		$('.about-desc').height($('.aboutPic').height());
		lHeight =Math.round($('.aboutPic').height()/5) ;
		$('.about-desc').css('lineHeight',$('.aboutPic').height())
		$('.about-desc').css('line-height',lHeight+'px');
	});


//banner



    // var myswiper = new Swiper('.proimg .swiper-container', {
    //     nextButton: '.proimg .swiper-button-next',
    //     prevButton: '.proimg .swiper-button-prev',
    //     paginationClickable: true,
    //     spaceBetween: 30,
    //     centeredSlides: true,
    //     autoplay: 2500,
    //     autoplayDisableOnInteraction: true
    // });

// // 内页header
// $('.nyheader h2').height($('.nyheadbg img').height())
	$('.news-desc').height($('.list-imgtxt ul li a img').height());

	$('.devicebox-item1').height($('.devicebox-item1').width());

	$(".hide-class li a").click(function(){
		$(this).parent().siblings().find(".second").slideUp()
		$(this).siblings(".second").slideToggle()

	})
	$(".second li a").click(function(){
		$(this).parent().siblings().find(".third").slideUp()
		$(this).siblings(".third").slideToggle()

	})

});
  
