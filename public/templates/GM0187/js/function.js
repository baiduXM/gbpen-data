$(document).ready(function(){
	$(window).load(function(){
		var img=new Image();
	});


	$(".font").click(function(){
		$(".fontbox").slideToggle()
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
	$(".back-top").click(function(){$(".index-wrap").animate({scrollTop :0}, 800)})


	$(".more2").click(function(){
		$(".hide-class").slideToggle()	
		// $(".more2 i").toggleClass("down");
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
	$(".font").toggle(function(){
		$(this).find('i').text('-')
	},function(){
		$(this).find('i').text('+')
	})	
	$(".more2").toggle(function(){
		$(this).find('i').text('↑')
	},function(){
		$(this).find('i').text('↓')
	})	
	$('.back').click(function() {
		$(".sidebar").hide()
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



});
  
