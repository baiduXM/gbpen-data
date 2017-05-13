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
	var img=new Image();
	img.src=$(".indextop img,.prolistb img").attr("src");
	$("ul.caselist li .list").width($("ul.caselist li .list img").outerWidth())
	$("ul.prolist li .prolistb .title").height($("ul.prolist li img").outerHeight()/3);
	$("ul.prolist li .prolistb .title").css({
		"line-height":$("ul.prolist li .prolistb .title").height()+5+"px"
		})
	$(".newsn h2, .fg h2").css({
		"line-height":$(".newsn h2 img").height()+"px"
		})	

	$(".prolistb .by").css({
	"border-bottom-width":$(".prolistb").height()*0.25+"px","border-left-width":$(".prolistb").height()*0.1+"px"
        })		
		
	$(".next2 dl .nextright").width($(".next2 dl").width()-$(".next2 dl .nextleft").width()-2)
	$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	var myswiper=$('.indexmenu .scroll-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			onTouchStart : function() {		 
			 }
		})
	$(".prolistmore").height($(".prolist").height()-2);
	$(".proclass li .prolistmore dl").css({
		"height":$(".proclass li .prolistmore dl").width()+"px","line-height":$(".proclass li .prolistmore dl").width()+"px"
		})
    $(".top-title").css({"margin-left":$(".top-title").innerWidth()/-2})
	$("ul.newslist li .list").width($("ul.newslist li").width()-$("ul.newslist li .date").innerWidth()*2)
	$(".pc .swiper-container").height($(".pc img").outerHeight()+30+"px")
	var h = $(".left-title .en").height()+$(".left-title .cn").height()+$(".left-title .img").height()+$(".left-title .arrow").height();
	var h1 = $(".pc").height()-h-30;
	$(".left-title .xxx").height(h1);
	$(".left-title .nxxx").height($(".newxbox .inner").outerHeight()-h);
	});
	$(window).resize(function(){
		$(".pc .swiper-container").height($(".pc img").outerHeight()+30+"px")
		$("ul.newslist li .list").width($("ul.newslist li").width()-$("ul.newslist li .date").innerWidth()*2)
		$(".next2 dl .nextright").width($(".next2 dl").width()-$(".next2 dl .nextleft").width()-2)
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
		$(".newsn h2, .fg h2").css({
		"line-height":$(".newsn h2 img").height()+"px"
		})	
		
		$(".prolistmore").height($(".prolist").height()-2);
		$(".proclass li .prolistmore dl").css({
		"height":$(".proclass li .prolistmore dl").width()+"px","line-height":$(".proclass li .prolistmore dl").width()+"px"
		})
		$("ul.prolist li .prolistb .title").height($("ul.prolist li img").outerHeight()/3);
		$("ul.prolist li .prolistb .title").css({
		"line-height":$("ul.prolist li .prolistb .title").height()+5+"px"
		})
		$("ul.caselist li .list").width($("ul.caselist li .list img").outerWidth());
		var h = $(".left-title .en").height()+$(".left-title .cn").height()+$(".left-title .img").height()+$(".left-title .arrow").height();
	    var h1 = $(".pc").height()-h-30;
	    $(".left-title .xxx").height(h1);
		$(".left-title .nxxx").height($(".newxbox .inner").outerHeight()-h);
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
	$("#class,#class1").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in")
		$(".opacity2").show()
		pageSlideOver();
	})
	$(".class-close,.opacity2").bind('click',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass(" page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
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
		$(".tell-icon .close").click(function(){
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height()-$(".fixed").height())
	})	
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
	$('.top-y').height($('.indexlogo').height()*3/4)
    $('.top-by').height($('.top-by').width())
  });
  
  function a(obj){
  	alert($(obj).parent(".swiper-main").next().attr("class"));
  }

   $(function () {
				
            	pcmySwiper1 = new Swiper('.indextype1', {
				mode: "horizontal"	,
                loop: true,
                grabCursor: true,
				updateOnImagesReady : true,
				cssWidthAndHeight : true,
				slidesPerView : 2,
                slidesPerGroup : 2,
				preventLinks:false,
            })
			$(".indexl1").click(function(e){
                e.preventDefault()
                pcmySwiper1.swipePrev()
            })
		   $(".indexr1").click(function(e){
                e.preventDefault()
                pcmySwiper1.swipeNext()
            })
        })

   $(function () {
            pcmySwiper2 = new Swiper('.indextype2', {
				mode: "horizontal"	,
                loop: true,
                grabCursor: true,
				updateOnImagesReady : true,
				cssWidthAndHeight : true,
				slidesPerView : 2,
                slidesPerGroup : 2,
				preventLinks:false,
            })
			$(".indexl2").click(function(e){
                e.preventDefault()
                pcmySwiper2.swipePrev()
            })
		   $(".indexr2").click(function(e){
                e.preventDefault()
                pcmySwiper2.swipeNext()
            })
        })

   $(function () {
            pcmySwiper3 = new Swiper('.indextype3', {
				mode: "horizontal"	,
                loop: true,
                grabCursor: true,
				updateOnImagesReady : true,
				cssWidthAndHeight : true,
				slidesPerView : 2,
                slidesPerGroup : 2,
				preventLinks:false,
            })
			$(".indexl3").click(function(e){
                e.preventDefault()
                pcmySwiper3.swipePrev()
            })
		   $(".indexr3").click(function(e){
                e.preventDefault()
                pcmySwiper3.swipeNext()
            })
        })

   $(function () {
            pcmySwiper4 = new Swiper('.indextype4', {
				mode: "horizontal"	,
                loop: true,
                grabCursor: true,
				updateOnImagesReady : true,
				cssWidthAndHeight : true,
				slidesPerView : 2,
                slidesPerGroup : 2,
				preventLinks:false,
            })
			$(".indexl4").click(function(e){
                e.preventDefault()
                pcmySwiper4.swipePrev()
            })
		   $(".indexr4").click(function(e){
                e.preventDefault()
                pcmySwiper4.swipeNext()
            })
        })

   $(function () {
            pcmySwiper5 = new Swiper('.indextype5', {
				mode: "horizontal"	,
                loop: true,
                grabCursor: true,
				updateOnImagesReady : true,
				cssWidthAndHeight : true,
				slidesPerView : 2,
                slidesPerGroup : 2,
				preventLinks:false,
            })
			$(".indexl5").click(function(e){
                e.preventDefault()
                pcmySwiper5.swipePrev()
            })
		   $(".indexr5").click(function(e){
                e.preventDefault()
                pcmySwiper5.swipeNext()
            })
        })

   
			