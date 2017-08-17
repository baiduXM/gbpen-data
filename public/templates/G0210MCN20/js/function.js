$(document).ready(function(){
	$(window).load(function(){
		var img=new Image();
	});


	$(".font").click(function(){
		$(".fontbox").slideToggle();
		$(".nytop .font i").toggleClass("down");
	})

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


	//返回顶部 
	$(".backtop").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})


	$(".more2").click(function(){
		$(".hide-class").slideToggle()	
		$(".more2 i").toggleClass("down");
		$(".fontbox").slideUp()	
	})
    // 分类
	$(".first li i").click(function(){
		$(this).parent().parent().siblings().find(".second").slideUp()
		$(this).parent().siblings(".second").slideToggle()
		// $(this)
	})
	$(".second li i").click(function(){
		$(this).parent().parent().siblings().find(".third").slideUp()
		$(this).parent().siblings(".third").slideToggle()
	})	


	$(".first li i").toggle(function(){
		$(this).text('-')
	},function(){
		$(this).text('+')
	})

	$(".nyheader .font").toggle(function(){
		$(this).find('i').text('-')
	},function(){
		$(this).find('i').text('+')
	})	
	// $(".more2").toggle(function(){
	// 	$(this).find('i').text('↑')
	// },function(){
	// 	$(this).find('i').text('↓')
	// })	
	$('.back').click(function() {
		$(".sidebar").hide()
	})


	$(window).resize(function() {
			

	});
	
    var bannerswiper = new Swiper('#banner',{
    	autoplay : 5000,
    	loop:true,
        pagination: '#banner .swiper-pagination',
        paginationClickable: true
    });
 

});
  
