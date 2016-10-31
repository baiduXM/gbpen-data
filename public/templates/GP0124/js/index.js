$(document).ready(function() {

// 页面开始动画,执行light()函数
	light();

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot ol", mainCell:".picture ul", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

// 首页图片列表
	var latestHd = (240 - $(".side-hd h2 span").width())/2 -35;
	$(".side-hd h2 i").css({paddingLeft:latestHd})
	var latestAboutHd = (176 - $(".side-hd h2 span").width())/2 -10;
	$(".side-bottom .side-hd h2 i").css({paddingLeft:latestAboutHd})

	$(window).scroll(function(){
		var scrollHeight = $(window).scrollTop()
		if ($(".latest").hasClass('spread')) {
		 	if ($(".side-hd").hasClass('in')) {
				if (scrollHeight <= 200 || scrollHeight >= 1102) {
		 			$(".side-hd").removeClass('in');
					$(".stick-left").animate({left:"0px"}, 500);
		 			$(".stick-right").animate({right:"0px"},500);
				}
			} else if (scrollHeight>302 && scrollHeight<1100) {
		 		$(".side-hd").addClass('in');
				$(".stick-left").animate({left:"-120px"}, 500);
		 		$(".stick-right").animate({right:"-120px"},500);
			} else if (scrollHeight>1000) {
				$(".jag").animate({width:"100%"}, 5000)
			};
		} else if(scrollHeight>302 && scrollHeight<1100){
			$(".side-hd").addClass('in');
	 		$(".latest").addClass('spread');
			$(".stick-left").animate({left:"-120px"}, 500);
	 		$(".stick-right").animate({right:"-120px"},500,function(){
	 			$(".latest li.latest-05").addClass("mylatest").animate({left: "690px",top: "234px"}, 500,function(){
	 				$(".latest li.latest-04").addClass("mylatest").animate({left: "369px",top: "234px"}, 500,function(){
	 					$(".latest li.latest-03").addClass("mylatest").animate({left: "690px",top: "0px"}, 500,function(){
	 						$(".latest li.latest-02").addClass("mylatest").animate({left: "369px",top: "0px"}, 500,function(){
	 							$(".latest li.latest-01").css({filter:"Alpha(Opacity=100)"}).animate({opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1",left: "0px",top: "0px"}, 1000);
	 						});
	 					});
	 				});
	 			});
	 			
	 		});
		} else if (scrollHeight>1000) {
			$(".jag").animate({width:"1284px"}, 5000)
		};
	});


// 图片列表滚动
	jQuery(".active").slide({mainCell:".activities ul",autoPage:true,effect:"left",autoPlay:true,scroll:3,vis:3,delayTime:1000,interTime:3000});
	
	$(window).scroll(function(){
		if ($(window).scrollTop()>965) {
			$(".activities").animate({marginTop:"0px"}, 800)
		}
	});



});

function light(){
	var light = $(".light .lamplet");
	var nav = $("#nav");
	light.animate({left:"0px"}, 500)
	.queue(function(){
		light.css({filter:"Alpha(Opacity=40)",opacity:"0.4",webkitOpacity:"0.4",mozOpacity:"0.4",msOpacity:"0.4"});
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=40)",opacity:"0.4",webkitOpacity:"0.4",mozOpacity:"0.4",msOpacity:"0.4"});
		light.dequeue();
	})//加入队列
	.animate({left:"0px"}, 500)//延时500ms，无其他作用
	.queue(function(){
		light.css({filter:"Alpha(Opacity=0)",opacity:"0",webkitOpacity:"0",mozOpacity:"0",msOpacity:"0"});
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=0)",opacity:"0",webkitOpacity:"0",mozOpacity:"0",msOpacity:"0"});
		light.dequeue();
	})
	.animate({left:"0px"}, 500)
	.queue(function(){
		light.css({filter:"Alpha(Opacity=40)",opacity:"0.4",webkitOpacity:"0.4",mozOpacity:"0.4",msOpacity:"0.4"});
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=40)",opacity:"0.4",webkitOpacity:"0.4",mozOpacity:"0.4",msOpacity:"0.4"});
		light.dequeue();
	})
	.animate({left:"0px"}, 500)
	.queue(function(){
		light.css({filter:"Alpha(Opacity=0)",opacity:"0",webkitOpacity:"0",mozOpacity:"0",msOpacity:"0"});
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=0)",opacity:"0",webkitOpacity:"0",mozOpacity:"0",msOpacity:"0"});
		light.dequeue();
	})
	.animate({left:"0px"}, 500)
	.queue(function(){
		light.css({filter:"Alpha(Opacity=20)",opacity:"0.2",webkitOpacity:"0.2",mozOpacity:"0.2",msOpacity:"0.2"});
		light.next(".biglight").css({filter:"Alpha(Opacity=20)",opacity:"0.2",webkitOpacity:"0.2",mozOpacity:"0.2",msOpacity:"0.2"})
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=100)",opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1"});
		light.dequeue();
	})
	.animate({left:"0px"}, 50,function(){
		$(".rainbow").animate({width:"260px"}, 800,function(){
			$(this).css({width:"835px"}).animate({height:"1300px"}, 5000);
			$(".trapezoid").css({filter:"Alpha(Opacity=100)"}).animate({left:"0%",opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1"}, 1000,function(){
				$(".triangle").css({filter:"Alpha(Opacity=100)"}).animate({top:"47px",opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1"}, 500,function(){
					$(".focus").css({filter:"Alpha(Opacity=100)"}).animate({opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1"}, 1000,function(){
						$(".cloud-02").animate({left:"0px"},1000);
					});
				});
			});
		})
	});

};