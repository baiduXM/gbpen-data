$(document).ready(function() {

	var iWidth = $(".column-hd h2").width()
	$(".column-hd i").width(iWidth);

// 图片列表一	
	$("ul.features li").each(function(index, el) {
		if (index%2 != 0) {
			$(this).find('i').css({top:"208px"});
		}
	});
	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		if ($("ul.features").hasClass('landing') == false && scrollTop>700) {
			$("ul.features").addClass('landing').children('li:eq(0)').children('a').css({display:"block",filter:"Alpha(opacity=100)"}).animate({top:"0px",opacity:1}, 500,function(){
				$("ul.features li:eq(1)").children('a').css({display:"block",filter:"Alpha(opacity=100)"}).animate({top:"208px",opacity:1}, 500,function(){
					$("ul.features li:eq(2)").children('a').css({display:"block",filter:"Alpha(opacity=100)"}).animate({top:"0px",opacity:1}, 500,function(){
						$("ul.features li:eq(3)").children('a').css({display:"block",filter:"Alpha(opacity=100)"}).animate({top:"208px",opacity:1}, 500,function(){
							$("ul.features li").children('i').removeClass('opacity');
						});
					});
				});
			});
		} else if ($(".credit").hasClass('ce') == false && scrollTop>2200) {
			$(".credit").addClass('ce');
			var i=0
			var j=$(".credit li").length;
			var show = setInterval(function(){
				if (i < j) {
					$(".credit li:eq("+i+")").animate({top:"0px"},100,function(){
						$(this).find('i').addClass('show').animate({top:"0px"}, 500,function(){
							$(this).siblings('h6').css({filter:"Alpha(opacity=100)"}).animate({right:"10px",opacity:"1"}, 200)
							$(this).siblings('p').css({filter:"Alpha(opacity=100)"}).animate({right:"10px",opacity:"1"}, 200)
						});
					});
				} else {
					clearInterval(show);
				}
				i++;
			}, 800);
		}
	});

	 $("ul.features li a").on("mouseenter mouseleave",function(e) {  
        var w = $(this).width();
        var h = $(this).height();
        var x = (e.pageX - $(this).offset().left - (w / 2)) * (w > h ? (h / w) : 1);
        var y = (e.pageY - $(this).offset().top - (h / 2)) * (h > w ? (w / h) : 1);
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
        // console.log('boxli:'+x+','+y);
        /* direction:0,1,2,3 ---> top right bottom left*/  
        var eventType = e.type;  
        var aPos=[{left:0,top:"-100%"},{left:"100%",top:0},{left:0,top:"100%"},{left:"-100%",top:0}];  
        if(eventType == 'mouseenter'){  
            $(this).find('.shade').css(aPos[direction]).stop(true,true).animate({left:0,top:0},200);  
        }else{  
            $(this).find('.shade').stop(true,true).animate(aPos[direction],200);  
        }  
    });

	 $("ul.features li a").hover(function() {
	 	var i = $(this).parent("li").index()
	 	if (i%2 == 0) {
	 		$(this).siblings('i').stop(true, true).animate({top:"208px"}, 300);
	 	} else {
	 		$(this).siblings('i').stop(true, true).animate({top:"0px"}, 300);
	 	}
	 }, function() {
	 	var i = $(this).parent("li").index()
	 	if (i%2 == 0) {
	 		$(this).siblings('i').animate({left:"0px"}, 800,function(){
	 			$(this).animate({top:"0px"}, 200)
	 		});
	 	} else {
	 		$(this).siblings('i').animate({left:"0px"}, 800,function(){
	 			$(this).animate({top:"208px"}, 200)
	 		});
	 	}
	 });


// 案例图片展示
	jQuery(".pack").slide({mainCell:"ul.customer",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
	$("ul.customer li").hover(function() {
		$(this).find("b").stop(true, true).css({filter:"Alpha(opacity=0)"}).animate({height:"167px",opacity:"0"}, 300);
		$(this).find('.customer-list').stop(true, true).animate({height:"168px"}, 300);
	}, function() {
		$(this).find("b").css({filter:"Alpha(opacity=30)"}).animate({height:"335px",opacity:"0.3"}, 300);
		$(this).find('.customer-list').animate({height:"0px"}, 300);
	});

});
