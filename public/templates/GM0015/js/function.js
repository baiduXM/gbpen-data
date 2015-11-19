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
                    slideCell:"#big_img",
                    mainCell:"#big_img ul", 
                    effect:"leftLoop", 
                    autoPlay:true,
                    interTime:6000 //自动播放
                });
	$(window).load(function(){
	var img=new Image();
	img.src=$("ul.nav li img").attr("src");	
	
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
	$(".about,.news").height($("ul.nav li").height())
	});
	$(window).resize(function(){			
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(".wrap").height()-$(".fixed").height()-$(".tell-icon").height())
		$(".about,.news").height($("ul.nav li").height())
		
	})
	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }
      function foulpage(){
  	var scope = ($(".scope").height() < ($(".wrap").height()-$(".fixed_top").height()-$(".foot").height()) ? ($(".wrap").height()-$(".fixed_top").height()-$(".foot").height()) : $(".scope").height());
  	if ($(".scope").height() != scope) {$(".scope").height(scope);}
  }
  foulpage();
  //隐藏导航跟wrap的切换
	$("#class,#header_menu,#fixed_menu").click('touchstart',function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		pageSlideOver();
		
	})
	$(".class-close,.opacity2").click('touchstart',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass(" page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
		
	})
	
	$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
		return false
	})
	
	
  	
	$("#font").click(function(){
		$("#up").hide()
		$("#down").show()
		$(".hide-class").removeClass("hide-class1")
		$(".font").slideToggle()
		$(".hide-class").slideUp()	
	})
	$(".big").click(function(){
		$(".edite").attr('class',"edite font-big")
		$(".news-ins").attr('class',"news-ins font-big")
		$(".font").hide()
	})
	$(".normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()
	})
	$(".small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".font").hide()

	})	
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
		$(".index-wrap").animate({scrollTop :0}, 800)
	})
	
	
	$("nav.nav li").hide();	
    size_li = $("nav.nav li").size();
    x=6;
    $('nav.nav li:lt('+x+')').show();
    $('.menu_has').click(function () {
        x= (x+3 <= size_li) ? x+3 : size_li;
        $('nav.nav li:lt('+x+')').slideDown();
        if(x == size_li){
            $('.menu_has').hide();
			$('.menu_none').show();
			
        }
	$(".menu_none").click(function(){
		$("nav.nav li").hide();	
		$('nav.nav li:lt('+6+')').show();
		$('.menu_has').show();
			$('.menu_none').hide();
		})
    });
	
	$(".class_list").bind('click',function(){
		$(this).parent().siblings().find(".class_edite").hide()
		$(this).siblings().show()
	})
	
  });
