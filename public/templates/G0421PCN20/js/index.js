 $(document).ready(function(){
	$("a#down b").animate({top:"10px"}, 500,function(){
   		$(this).animate({top:"0px"}, 500);
   	});
	setInterval(function(){
       	$("a#down b").animate({top:"10px"}, 500,function(){
       		$(this).animate({top:"0px"}, 500);
       	});
	}, 1000);
	$("a#down").click(function(event) {
		$.fn.fullpage.moveSectionDown();
	});
	
	$('#wrapper').fullpage({
		anchors: ['page1', 'page2', 'page3', 'page4'],
		menu: '#menu',
		'afterLoad': function(anchorLink, index){
			
			if (index == 3) { // 当前页是栏目三时
				$('.title:eq(1)').animate({top:"0px"}, 500,function(){
					$(this).find('h3,p').css({filter:"Alpha(opacity=100)"}).animate({opacity:"1",left:"0px"}, 2000);
					$("ul.capacity").animate({left:"0px"}, 1000,function(){
						$("ul.capacity li").each(function(n, el) {
							var ulLeft = 12.5 + n*240;
							$(this).animate({left:ulLeft}, 1500).find('a').css({filter:"Alpha(opacity=100)"}).animate({opacity:"1"}, 1500).prev(".mid-ring").removeClass('middle');
						});
					});
				});
			};
			
			if (index == 4) {
				$('.title:eq(2)').animate({top:"0px"}, 500,function(){ // 当前页是栏目四时
					$(this).find('h3,p').css({filter:"Alpha(opacity=100)"}).animate({opacity:"1",left:"0px"}, 2000);
				});
				$(".parent ol").each(function(p, el) {
					$(this).animate({marginTop:"0px"}, 400,"linear");
				});
			};
		},
		'onLeave': function(index, direction){

			if((index == 1 || index == 3) && direction == 2){ // 即将进入栏目二时
				$('.title:eq(0)').animate({top:"0px"}, 500,function(){
					$(this).find('h3,p').css({filter:"Alpha(opacity=100)"}).animate({opacity:"1",left:"0px"}, 2000);
					var a = 0;
					var show = setInterval(function () {	
						if (a < 4) {
							var that = $("ul.include>li:eq("+a+")");
							that.find(".ring-02 .arch").addClass('ringright');
						 	that.find(".ring-01 .arch").addClass('ringleft');
							that.find("i").animate({left:"0px"}, 1000,function(){
								$(this).addClass('rotation').animate({top:"0px"}, 500,"linear");
								that.find("p").css({filter:"Alpha(opacity=100)"}).animate({opacity:"1"}, 500);
							});
							a ++;
						} else {
							clearInterval(show);
						}
					}, 1000);
				});
			} else if (index == 2) { // 离开栏目二时
				$('.title:eq(0)').animate({top:"-300px"}, 500,function(){
					$(this).find('h3').css({filter:"Alpha(opacity=0)",opacity:"0",left:"-400px"});
					$(this).find('p').css({filter:"Alpha(opacity=0)",opacity:"0",left:"400px"});
				});
			};

			if (index == 3) { // 离开栏目三时
				$('.title:eq(1)').animate({top:"-300px"}, 500,function(){
					$(this).find('h3').css({filter:"Alpha(opacity=0)",opacity:"0",left:"-400px"});
					$(this).find('p').css({filter:"Alpha(opacity=0)",opacity:"0",left:"400px"});
				});
				$("ul.capacity li").each(function(n, el) {
					$(this).animate({left:"492.5px"}, 1500).find('a').css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"}, 1500).prev(".mid-ring").addClass('middle');
				});
			};

			if (index == 4) { // 离开栏目四时
				$('.title:eq(2)').animate({top:"-300px"}, 500,function(){
					$(this).find('h3').css({filter:"Alpha(opacity=0)",opacity:"0",left:"-400px"});
					$(this).find('p').css({filter:"Alpha(opacity=0)",opacity:"0",left:"400px"});
				});
			};

			if (index == 1 || index == 3) {
				$("#menu").addClass('black');
			} else if (index == 2 || index == 4) {
				$("#menu").removeClass('black');
			}
		}

	});



 		//大图轮播
 		jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
		mouseOverStop:false,/* 鼠标移到容器层继续播放*/
		/* 控制进度条 */
			startFun:function(){
				var timer = jQuery(".slideBox .timer");
				timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
			}
		});

 			$(".about .text").hover(function() {
				$(this).stop(true, true).animate({top:"54px"}, 400);
			}, function() {
				$(this).stop(true, true).animate({top:"64px"}, 800);
			});
			// $(".about .index_title").hover(function() {
			// 	$(this).stop(true, true).animate({top:"140px"}, 400);
			// }, function() {
			// 	$(this).stop(true, true).animate({top:"156px"}, 800);
			// });
			// $(".about .contact").hover(function() {
			// 	$(this).stop(true, true).animate({top:"250px"}, 400);
			// }, function() {
			// 	$(this).stop(true, true).animate({top:"240px"}, 800);
			// });
			$(".about .img_div").hover(function() {
				$(this).stop(true, true).animate({top:"90px"}, 400);
			}, function() {
				$(this).stop(true, true).animate({top:"100px"}, 800);
			});

			(function(){
				if($('.fp-section').height()>910){
					$('.fp-section').css('overflow','hidden')				
				} else{
					$('.fp-section').css('overflow','auto')		
				}
			})();
			 

			$(window).resize(function(){
				if($('.fp-section').height()>910){
					$('.fp-section').css('overflow','hidden')				
				} else{
					$('.fp-section').css('overflow','auto')		
				}
			});
			$(window).resize(); 
 });