$(document).ready(function(){
	
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight());
	$('.side-nav ul li').height($('.side-nav ul li').width());
	$(window).resize(function(){

		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$('.side-nav ul li').height($('.side-nav ul li').width());

	})									
							

  	
	// $("#font").click(function(){
	// 	$("#up").hide()
	// 	$("#down").show()
	// 	$(".hide-class").removeClass("hide-class1")
	// 	$(".font").slideToggle()
	// 	$(".hide-class").slideUp()	
	// })
	$(".fontbox span.big,.tit-det span.big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".fontbox span.normal,.tit-det span.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".fontbox span.small,.tit-det span.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	$(".sort").click(function(){
		$(".hide-class").slideToggle()
	})
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
   //  $('#more').click(function () {
   //      x= (x+4 <= size_li) ? x+4 : size_li;
   //      $('.ny-news-list li:lt('+x+'),ul.picture2 li:lt('+x+'),.case_list li:lt('+x+'),.news_list .news_d:lt('+x+')').fadeIn();
   //      if(x == size_li){
   //          $('#more').hide();
			// $('#less_more').show();
   //      }
   //  });		
	// $(".share-cance").click(function(){
	// 	$(".newsclass").removeClass("show")
	// 	$(".opacity2").hide()
	// })
	TouchSlide({
		slideCell:"#slideBox",
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

	$(".more2").click(function(){

		$(".hide-class").slideToggle()	
		$(".more2 i").toggleClass("down");
	})    
	TouchSlide({ 
		slideCell:"#picScroll",
		titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		autoPage:true, //自动分页
		pnLoop:"false", // 前后按钮不循环
		switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	});

	//下拉菜单 
    $(".hide-class li a").click(function(){
      $(this).parent().siblings().find(".second").slideUp()
      $(this).siblings(".second").slideToggle()



    })
    $(".second li a").click(function(){
      $(this).parent().siblings().find(".third").slideUp()
      $(this).siblings(".third").slideToggle()
     
    }) 

	$('.hide-class li a,.second li a').toggle(
	  function(){
	  $(this).find('i').text('-');},
	  function(){
	  $(this).find('i').text('+');}
	);

  });
  
