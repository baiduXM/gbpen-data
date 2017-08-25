$(document).ready(function(){
	/*大图js效果*/
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


  //隐藏导航跟wrap的切换
    $("#quickbar #quickbar-navs-btn,.home").on('click',function(){
        $("#quickbar-navs").removeClass("page-prev").addClass("page-in");
        $("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
        $(".quickbar-opacity2").show()
        pageSlideOver();
    });
    $("#quickbar-navs .quickbar-navs-close,.quickbar-opacity2").on('click',function(){ 
        $("#quickbar-navs").removeClass("page-in").addClass("page-prev page-out")
        $("#quickbar-wrap").removeClass("page-next page-in").addClass("page-out")
        $(".quickbar-opacity2").hide()
        $(".quickbar-sharebox").removeClass("show_share")
        pageSlideOver();
        if ($('.quickbar_search').hasClass('search_show')) {
            $('.quickbar_search').removeClass('search_show');
        }
        $('.follow_img').css('display', 'none');
    });
    function pageSlideOver(){
        $('.page-out').on('transitionend', function(){
                $(this).removeClass('page-out');
        });
        $('.page-in').on('transitionend', function(){
                $(this).removeClass('page-in');
        });
    }
	//字体上下拉开始
  	
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
		$(".list_page").attr('class',"list_page font-big")
		$(".font").hide()
	})
	$(".font dl.normal").click(function(){
		$(".edite").attr('class',"edite font-normal")
		$(".news-ins").attr('class',"news-ins font-normal")
		$(".list_page").attr('class',"list_page font-normal")
		$(".font").hide()
	})
	$(".font dl.small").click(function(){
		$(".edite").attr('class',"edite font-small")
		$(".news-ins").attr('class',"news-ins font-small")
		$(".list_page").attr('class',"list_page font-small")
		$(".font").hide()

	});	
	//字体上下拉结束
	//分类上下拉开始
	$("#first").click(function(){
		$("#up").toggle()
		$("#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()	
	});
	//分类上下拉结束
	
	$(".title2 span.bigd").click(function(){
		$(".edite").attr('class',"edite font-big")
	})
	$(".title2 span.middled").click(function(){
		$(".edite").attr('class',"edite font-normal")
	})
	$(".title2 span.smalld").click(function(){
		$(".edite").attr('class',"edite font-small")

	});	
	//返回顶部开始
	$(".back-top").click(function(){$("#quickbar-wrap-body,body").animate({scrollTop :0}, 800)})
	//返回顶部结束
	
 });
});
	