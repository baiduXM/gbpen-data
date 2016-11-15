$(document).ready(function(){
	$(window).load(function(){
		var img=new Image();
	});
	$(window).resize(function() {
			

	});

	// ---字体大小---
	$(".font").click(function(){
		$(".fontbox").slideToggle();
		$(".nytop .font i").toggleClass("down");
        $(this).find('b').toggleClass('show')
		$(".hide-class").slideUp()
	})
	// $(".nyheader .font").toggle(function(){
	// 	$(this).find('b').text('-')
	// },function(){
	// 	$(this).find('b').text('+')
	// })
	// 字体大号
	$(".fontbox ul li:nth-child(1)").click(function(){
		$(".edit").attr('class',"edit font-big")
		$(".fontbox").hide()
	})
    // 字体中号
	$(".fontbox ul li:nth-child(2)").click(function(){
		$(".edit").attr('class',"edit font-normal")
		$(".fontbox").hide()
	})
    // 字体小号
	$(".fontbox ul li:nth-child(3)").click(function(){
		$(".edit").attr('class',"edit font-small")
		$(".fontbox").hide()

	})	
	// ----分类----
	$(".more2").click(function(){
		$(".hide-class").slideToggle()	
		$(".more2 i").toggleClass("down");
		$(".fontbox").slideUp()	
	})
    // 分类
	$(".first li i").click(function(){
		$(this).parent().siblings().find(".second").slideUp()
		$(this).siblings(".second").slideToggle()
	})
	$(".second li i").click(function(){
		$(this).parent().siblings().find(".third").slideUp()
		$(this).siblings(".third").slideToggle()
	})
	$(".first li i").toggle(function(){
		$(this).text('-')
	},function(){
		$(this).text('+')
	})

	// ---返回顶部--- 
	$(".backtop").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})



	//Init Navigation
	// var holdPosition = 0;
	var nav = $('.swiper-nav').swiper({
		slidesPerView:4,
		onTouchMove:function(){
			slide_state();
		}
	})
	$('.menu .arrow-left').on('click', function(e){
	    e.preventDefault()
	    nav.swipePrev()
		slide_state();
  	})
	 $('.menu .arrow-right').on('click', function(e){
	    e.preventDefault()
	    nav.swipeNext()
		slide_state();
	})
	if($('.menu .swiper-slide').last().hasClass('swiper-slide-visible')){
		$('.menu .arrow-right').addClass("current1");
	}
	function slide_state(){
		if($('.menu .swiper-slide').first().hasClass('swiper-slide-visible')){
			$('.menu .arrow-left').removeClass("current").addClass("current1");	
		}else{
			$('.menu .arrow-left').removeClass("current1").addClass("current");
		}
		if($('.menu .swiper-slide').last().hasClass('swiper-slide-visible')){
			$('.menu .arrow-right').removeClass("current").addClass("current1");
		}else{
			$('.menu .arrow-right').removeClass("current1").addClass("current");
		}
	}

	// ---banner-js---
	 var mySwiper = new Swiper('#banner',{
	 loop:true,
		autoplay:5000,
		calculateHeight : true,
		pagination : '.pagination',
		
	    //其他设置
	  });  


});
  
