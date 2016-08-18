
$(document).ready(function() {

// 内页开始动画
	light2();

// 导航
	var num = window.location.href.split("/").length - 1;
	var index = window.location.href.split("/")[num];
	
	if (index == null ||index == 0) {
		$("ul.menu>li:eq(0)>a").addClass('in')
	} else {
		$("ul.menu>li>a[href^='"+index+"']").addClass('in')
	}

	var ulWidth = $("ul.menu>li").width()*2;
	var ulLeft = ($("ul.menu>li").width() - ulWidth)/2;
	$("ul.menu>li>ul.menu-list").css({width:ulWidth,left:ulLeft});

	$("ul.menu>li").hover(function(){
		$(this).find("ul.menu-list").stop(true, true).slideDown(500);
	},function(){
		$(this).find("ul.menu-list").slideUp(500);
	});

	if ($("ul.menu>li>a").hasClass('in')) {
		var initial = $("ul.menu>li>a.in").parent("li").position().left;
	} else {
		var initial = $("ul.menu>li:eq(0)").position().left;
	};
	var liWidth = $("ul.menu>li>a.in").width();
	$(".ledgement").css({left:initial,width:liWidth});
	$("ul.menu>li").mouseover(function(){
		var thisWidth = $(this).width();
		var leftPosition = $(this).position().left;
		$(".ledgement").stop(true,false).animate({left:leftPosition,width:thisWidth}, 500);
	});
	$("ul.menu").mouseleave(function(event) {
		
		$(".ledgement").stop(true, true).animate({left:initial,width:liWidth},500);
	});


// 面包屑导航
	$(".inside-hd span a:last-child").addClass('on');

// 编辑框
	$("ul.first a").click(function(event) {
		if ($(this).nextAll("ul").length > 0) {
			var a=$(this);
			var thisname = a.attr('class');
			if (thisname == null || thisname == 0) {
				a.nextAll("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prevAll("a").removeClass();
				a.next("i").removeClass('in')
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box_on");
						a.next('i').addClass('in')
						break;
					case "second":
						a.addClass("box_in");
						break;
					default:
						a.addClass("box_at");
				}
			}else{
				a.removeClass().nextAll('ul').slideUp(300);
				a.nextAll('ul').find('a').removeClass().nextAll('ul').slideUp(300);
				a.next("i").removeClass('in');
			};
			return false;
		};
	});

// 图片列表
    // console.log('box:'+$(".product li").offset().top);
    // $("body").on("click",function(e){
    //     console.log('body:'+e.pageX+','+e.pageY);
    // })
	 $(".product li").on("mouseenter mouseleave",function(e) {  
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

// 产品展示
	if ($(".case-bd .case-last img").length < 2) {
		$(".case-hd").css({display:'none'});
	};
	jQuery(".case-list").slide({mainCell:".case-last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

});

function light2(){
	var light = $(".inside-light .lamplet");
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
		light.css({filter:"Alpha(Opacity=20)",opacity:"0.2",webkitOpacity:"0.2",mozOpacity:"0.2",msOpacity:"0.2"});
		light.next(".biglight").css({filter:"Alpha(Opacity=20)",opacity:"0.2",webkitOpacity:"0.2",mozOpacity:"0.2",msOpacity:"0.2"})
		light.animate({left:"0px"}, 200)
		nav.css({filter:"Alpha(Opacity=100)",opacity:"1",webkitOpacity:"1",mozOpacity:"1",msOpacity:"1"});
		light.dequeue();
	});
}
