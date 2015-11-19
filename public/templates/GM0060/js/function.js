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
	
	
	$(window).load(function(){
	// var img=new Image();
	// img.src=$(".menu img").attr("src");
	// $(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height()+2)
	// $(".indexmain").height($(".index-wrap").height()-$(".header").height()-$(".searchbox").height())
	$(".indexmain-menu").height($(".indexmain-menu").width()*532/503)
	$(".indexmain-menu-dl").addClass('transform')
	});
	$(window).resize(function(){
		
		// $(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		// $(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height()+2)
		// $(".indexmain").height($(".index-wrap").height()-$(".header").height()-$(".searchbox").height())
		$(".indexmain-menu").height($(".indexmain-menu").width()*532/503)
			$(".indexmain-menu-dl").addClass('transform')

	})
	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
	
  }
  //显示更多
  $("ul.newslist li,ul.picture2 li").hide();	
    size_li = $("ul.newslist li").size();
	size_l = $("ul.picture2 li").size();
    x=6;
	y=4;
    $('ul.newslist li:lt('+y+'),ul.picture2 li:lt('+x+')').show();
    $('#promore').click(function () {
        x= (x+3 <= size_l) ? x+3 : size_l;
        $('ul.picture2 li:lt('+x+')').fadeIn();
        if(x == size_l){
            $('.morebtn').hide();
      }
    });
	$('#newsmore').click(function () {
        y= (y+3 <= size_li) ? y+3 : size_li;
        $('ul.newslist li:lt('+y+')').fadeIn();
        if(y == size_li){
            $('.morebtn').hide();
      }
    });
  	
  
  //隐藏导航跟wrap的切换
	// $("#class").click(function(){
	// 	$(".class").removeClass("page-prev").addClass("page-in");
	// 	$(".wrap").removeClass("page-active").addClass("page-next page-in")
	// 	$(".opacity2").show()
	// 	pageSlideOver();
		
	// })
	// $(".class-close,.opacity2").on('touchstart',function(){
	// 	$(".class").addClass("page-prev page-out")
	// 	$(".wrap").removeClass("page-next").addClass(" page-out")
	// 	$(".opacity2").hide()
	// 	$(".newsclass").removeClass("show")
	// 	pageSlideOver();
	// 	return false;
	// })
	
	// $(".tell-icon .close").click(function(){
	// 	$(".tell-icon").removeClass("display-block")
	// 	$(".index-wrap").height($(window).height()-$(".fixed").height())
	// 	$(".indexmain").height($(".index-wrap").height()-$(".header").height()-$(".searchbox").height())
	// 	return false
	// })
	
	$(".headersearch").on('touchstart',function(){
		$(".searchbox").toggleClass("searchbox-block")
		return false
		})
  	
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
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	})

	
	
  });
