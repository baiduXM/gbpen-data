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
	})

	
	$(".headersearch").on('touchstart',function(){
		$(".searchbox").toggleClass("searchbox-block")
		return false
	})	
  	
	// $("#font").click(function(){
	// 	$("#up").hide()
	// 	$("#down").show()
	// 	$(".hide-class").removeClass("hide-class1")
	// 	$(".font").slideToggle()
	// 	$(".hide-class").slideUp()	
	// })

	// 字体大号
	$(".font dl.big").click(function(){
		$(".edit").attr('class',"edit font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		// $(".font").hide()
	})

    // 字体中号
	$(".font dl.normal").click(function(){
		$(".edit").attr('class',"edit font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		// $(".font").hide()
	})

    // 字体小号
	$(".font dl.small").click(function(){
		$(".edit").attr('class',"edit font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		// $(".font").hide()

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
	})

	// index menu
	// $('.menu ul li').height($('.menu ul li:nth-child(2)').width());
	// $('.banner').height(($('.banner').width()*2));
	// // $('.hicon1').css('top',($('.header').height()-$('.hicon1').height())/2);
	// // $('.hicon2').css('top',($('.header').height()-$('.hicon2').height())/2);
	// $(window).resize(function() {
	// 	$('.menu ul li').height($('.menu ul li:nth-child(2)').width());
	// 	$('.banner').height(($('.banner').width()*2));
	// });
	$('.nav li').width(($('.menu').width()/3)-1);
	$('.nav li:nth-child(2),.nav li:nth-child(4)').width(($('.menu').width()/3*2)-1);
	$('.nav li:nth-child(2) a,.nav li:nth-child(4) a').width(($('.nav li:nth-child(2)').width()/2));
	$('.menu ul li').height($('.menu ul li:nth-child(1)').width());
	$('.nav li:nth-child(6)').width(($('.menu').width()/3)-2);
	$('.banner').height(($('.menu').width()/3*2));
	$('.banner').width(Math.floor(($('.menu').width()/3)-1));
	$('.banner').css("margin-left",(-$('.banner').width()/2)-3+'px');
	$(window).resize(function() {
		$('.nav li').width(($('.menu').width()/3)-1);
		$('.nav li:nth-child(2),.nav li:nth-child(4)').width(($('.menu').width()/3*2)-1);
		$('.nav li:nth-child(2) a,.nav li:nth-child(4) a').width(($('.nav li:nth-child(2)').width()/2));
		$('.menu ul li').height($('.menu ul li:nth-child(1)').width());
		$('.nav li:nth-child(6)').width(($('.menu').width()/3)-2);
		$('.banner').width(Math.floor(($('.menu').width()/3)-1));
		$('.banner').height(($('.menu').width()/3*2));
		$('.banner').css("margin-left",(-$('.banner').width()/2)-3+'px');
	});

	$('#search').click(function(){
		$('.search-wrap').show();
		$('.index-wrap').hide();
	})

	$("#search-back").click(function(){
		$(".search-wrap").hide();
		$('.index-wrap').show();
		
	})

// // 内页header
// $('.nyheader h2').height($('.nyheadbg img').height())
	    TouchSlide(         
	    {slideCell:"#slideBox",
	    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	    mainCell:".bd ul", 
	    effect:"leftLoop", 
	    autoPage:true,//自动分页
	    autoPlay:true,
	    interTime:10000,//自动播放)
	    pnLoop:"ture" // 前后按钮不循环

	    });

      $(".hide-class li a").click(function () {
          $(this).parent().siblings().find(".second").slideUp()
          $(this).siblings(".second").slideToggle()
      })  
      $(".second li a").click(function () {
          $(this).parent().siblings().find(".third").slideUp()
          $(this).siblings(".third").slideToggle()
      }) 

});
  
