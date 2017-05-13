$(document).ready(function() {

// 首页标题
for (var i = 0; i < $(".side-hd").length; i++) {

	var h2Width = $(".side-hd:eq("+i+") h2.hd-name span").width()+40;
	var h3Width = $(".side-hd:eq("+i+") h3.hd-name span").width()+40;
	var spanWidth = h2Width
	if (h2Width<h3Width) {
		spanWidth = h3Width
	}
	var stickPosition = ($(".side-hd:eq("+i+")").width()-spanWidth)/2-85;
	$(".side-hd:eq("+i+")").find(".stick-left").css({left:stickPosition});
	$(".side-hd:eq("+i+")").find(".stick-right").css({right:stickPosition});
}
	
// 图片展示
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop()
		if ($(".latest").hasClass('spread') ==false) {
			if (scrollTop>900) {
				$(".latest li.latest-04").addClass("mylatest").animate({left: "0px",top: "280px"}, 600,function(){
					$(".latest li.latest-05").addClass("mylatest").animate({left: "340px",top: "280px"}, 600,function(){
						$(".latest li.latest-06").addClass("mylatest").animate({left: "680px",top: "280px"}, 600,function(){
							$(".latest li.latest-01").addClass("mylatest").animate({left: "0px",top: "0px"}, 400,function(){
								$(".latest li.latest-02").addClass("mylatest").animate({left: "340px",top: "0px"}, 400,function(){
									$(".latest li.latest-03").addClass("mylatest").animate({left: "680px",top: "0px"}, 400);
								});
							});
						});
					});
				});
			};
		};
	});

// 书签效果
	jQuery(".side-case").slide({titCell:".bookmark ol li",mainCell:".focus ul", effect:"top", autoPlay:true, delayTime:300,interTime:"5000", triggerTime:50,trigger:"click", startFun:function(i){
			$(".bookmark ol li:eq("+i+") a").find('.mark-left').animate({left:"-50%"}, 500,function(){
				$(this).css({left:"50%"});
			});
			$(".bookmark ol li:eq("+i+") a").find('.mark-right').animate({left:"0px"}, 500);
			$(".bookmark ol li:eq("+i+")").siblings('li').find('.mark-left').animate({left:"0px"}, 500);
			$(".bookmark ol li:eq("+i+")").siblings('li').find('.mark-right').animate({left:"50%"}, 500);
		}
	});

// 底部标题
for (var j = 0; j < $(".bottom-hd").length; j++){
	var hWidth = $(".bottom-hd:eq("+j+")").width() - $(".bottom-hd:eq("+j+") h2").width() - 185;
	$(".bottom-hd:eq("+j+") .stick-02").width(hWidth)
}

});
