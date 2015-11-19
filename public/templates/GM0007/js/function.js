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
	img.src=$("ul.stylelist li div img,.bigimg .slideBox .bd li img").attr("src");
	$(".bigimgbox .imgbg").height($(".bigimg").height());
	$(".bigimgbox .imgbg").width($(".bigimg").width());
	$("ul.stylelist li div .imgbg").height($("ul.stylelist li div img").height());
	$("ul.stylelist li div .imgbg").width($("ul.stylelist li div img").width());
	$("ul.stylelist1 li div .imgbg").height($("ul.stylelist1 li div img").height());
	$("ul.stylelist1 li div .imgbg").width($("ul.stylelist1 li div img").width());
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

	});
	$(window).resize(function(){
		$(".index-wrap").height($(window).height()-$(".fixed").height()-$(".tell-icon").height())
		$(".bigimgbox .imgbg").height($(".bigimg").height());
		$(".bigimgbox .imgbg").width($(".bigimg").width());
		$("ul.stylelist1 li div .imgbg").height($("ul.stylelist1 li div img").height());
		$("ul.stylelist1 li div .imgbg").width($("ul.stylelist1 li div img").width());
		$("ul.stylelist li div .imgbg").height($("ul.stylelist li div img").height());
		$("ul.stylelist li div .imgbg").width($("ul.stylelist li div img").width());
		$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
		

	})
	
	
	$("#share_btn").click(function(){
		$(".share-con").addClass("share-transform")
		$(".opacity2").show()
		
	})
	$("#search").click(function(){
		$(".search").addClass("share-transform")
		$(".opacity2").show()
	})
	//隐藏导航跟wrap的切换
	$("#class").click(function(){
		$(".class").addClass("hover")
		$(".wrap").addClass("wrap-transform")
		$(".opacity2").show()
		$(".index-wrap").off('touchmove', disableScroll);
	})
	$(".class-close,.opacity2").click(function(){
		$(".wrap").removeClass("wrap-transform")
		$(".class").removeClass("hover")
		$(".share-con").removeClass("share-transform")
		$(".search").removeClass("share-transform")
		$(".opacity2").hide()
		$(".index-wrap").on('touchmove', disableScroll);
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
	$(".class-close,.opacity2").on('touchstart',function(){
		$(".class").addClass("page-prev page-out")
		$(".wrap").removeClass("page-next").addClass(" page-out")
		$(".opacity2").hide()
		$(".newsclass").removeClass("show")
		pageSlideOver();
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
$(".back-top").click(function(){
		$(".index-wrap").animate({scrollTop :0}, 800)
	})


    // 无限加载按钮
    if($('.news_list #more').data('nexturl') == 'javascript:;'){
    	$('.news_list #more').hide();
    	$('.news_list #less_more').show();
    }
	var ajaxlist = function(selector) {
		var _this = this, thisTEXT = $(this).text();
		var _loading = buttonLoading(this, {bgcolor:'transparent'});
		$(this).text('');
		smartyAJAX($(this).data('nexturl'), selector, function(data) {
			var _data = $('<div>' + data);
			$('#more').before(_data.find('.news_d'));
			$(selector + ' #more').data('nexturl', _data.find('#more').data('nexturl'));
			_loading.remove();
			$(_this).html(thisTEXT);
			if (!$(_this).data('nexturl')) {
	            $(selector + ' #more').hide();
				$(selector + ' #less_more').show();
			}
		});
		return false;
	}
	$('.news_list #more').click(function() {
		ajaxlist.call(this, ".news_list");
	});
	// $('.prod #more').click(function() {
	// 	ajaxlist.call(this, ".prod");
	// });
	function smartyAJAX (url, selector, callback) {
		var callback = typeof callback === 'function' ? callback : function(){};
		$.get(url, function(data) {
			var body = /<body[^>]*>([\s\S]*?)<\/body>/gi.exec(data),
				_bodyContent = $('<div>' + body[1]);
			var listContent = _bodyContent.find(selector).html();
			var listData = typeof jSmart === 'undefined' ? listContent : (new jSmart(listContent)).fetch(PREVIEW_CONFIG);
			callback(listData);
		}, 'html');
	}
  });
  
