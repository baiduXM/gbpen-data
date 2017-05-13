
$(document).ready(function() {

// 导航
	var num = window.location.href.split("/").length - 1;
	var index = window.location.href.split("/")[num];
	
	if (index == null ||index == 0) {
		$("ul.menu>li:eq(0)>a").addClass('in')
	} else {
		$("ul.menu>li>a[href^='"+index+"']").addClass('in')
	}
	if ($("ul.menu>li>a").hasClass('in')) {
		var initial = $("ul.menu>li>a.in").parent("li").position().left;
		var liWidth = ($("ul.menu>li>a.in").width()-12)/2;
	} else {
		var initial = $("ul.menu>li:eq(0)").position().left;
		var liWidth = ($("ul.menu>li:eq(0)").width()-12)/2;
	};
	$(".triangle").css({left:initial,marginLeft:liWidth});
	$("ul.menu>li").mouseover(function(){
		var thisWidth = ($(this).children('a').width()-12)/2;
		var leftPosition = $(this).position().left;
		$(".triangle").stop(true,false).animate({left:leftPosition,marginLeft:thisWidth}, 500);
	});
	$("ul.menu").mouseleave(function(event) {
		$(".triangle").stop(true, true).animate({left:initial,marginLeft:liWidth},500);
	});
	//三角形滑块结束

	// 计算二级栏目left值
	$(".menu-list").each(function(index, el) {
		var sum=0;
		$(this).find('li').each(function(i, r) {
			sum += ($(this).width()+24);
			return sum;
		});
		sum += 16;
		var liLeft = ($(this).parent("li").width()-sum)/2;
		$(this).css({width:sum,left:liLeft});
	});

	// 二级栏目效果
	$("ul.menu>li").hover(function(){
		$(this).find('.menu-list').css({top:"43px"}).find("i").stop(true, true).animate({marginTop:"0px"}, 300);
		var ul = $(this).find('.list-li');
		if (ul.find('li').length%2 == 0) {
			var evenNum = ul.find('li').length/2;
			ul.find("li:eq("+evenNum+")").css({bottom:"-30px",filter:"Alpha(opacity=100)"}).animate({bottom:"0",opacity:"1"}, 200,"linear",function(){
				var i = evenNum;
				var show1 = setInterval(function(){
					i++;
					if (i < evenNum*2) {
						ul.find("li:eq("+i+")").css({bottom:"-30px",filter:"Alpha(opacity=100)"}).animate({bottom:"0",opacity:"1"}, 200,"linear");
					} else {
						clearInterval(show1);
					};
				}, 200);
			});
			ul.find("li:eq("+(evenNum-1)+")").css({top:"-30px",filter:"Alpha(opacity=100)"}).animate({top:"0",opacity:"1"}, 200,"linear",function(){
				var j = evenNum-1;
				var show2 = setInterval(function(){
					j--;
					if (j >= 0) {
						ul.find("li:eq("+j+")").css({top:"-30px",filter:"Alpha(opacity=100)"}).animate({top:"0",opacity:"1"}, 200,"linear");
					} else {
						clearInterval(show2);
					};
				}, 200);
			});
		} else {
			var oddNum =  Math.ceil(ul.find('li').length/2)-1;
			ul.find("li:eq("+oddNum+")").css({filter:"Alpha(opacity=100)"}).animate({opacity:"1"}, 200,"linear",function(){
				var p = oddNum+1;
				var q = oddNum-1;
				var show3 = setInterval(function(){
					if (p <= oddNum*2) {
						ul.find("li:eq("+p+")").css({bottom:"-30px",filter:"Alpha(opacity=100)"}).animate({bottom:"0",opacity:"1"}, 200,"linear");
					} else {
						clearInterval(show3);
					}
					p++;
				}, 200);
				var show4 = setInterval(function(){
					if (q >= 0) {
						ul.find("li:eq("+q+")").css({top:"-30px",filter:"Alpha(opacity=100)"}).animate({top:"0",opacity:"1"}, 200,"linear");
					} else {
						clearInterval(show4);
					}
					q--;
				}, 200);
			});
		};
	},function(){
		$(this).find('.menu-list').css({top:"-150px"}).find("i").stop(true, true).animate({marginTop:"-7px"}, 300);
		var ul = $(this).find('.list-li');
		if (ul.find('li').length%2 == 0) {
			var i = ul.find('li').length/2;
			ul.find("li").each(function(index, el) {
				if (index>=i) {
					$(this).css({filter:"Alpha(opacity=0)",bottom:"-30px",opacity:"0"});
				}else {
					$(this).css({filter:"Alpha(opacity=0)",top:"-30px",opacity:"0"});
				}
			});
		} else {
			var j =  Math.ceil(ul.find('li').length/2)-1;
			ul.find("li").each(function(index, el) {
				if (index>j) {
					$(this).css({filter:"Alpha(opacity=0)",bottom:"-30px",opacity:"0"});
				} else if(index<j){
					$(this).css({filter:"Alpha(opacity=0)",top:"-30px",opacity:"0"});
				}else {
					$(this).css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"}, 300,"linear");
				}
			});
		};
	});

// 焦点图片切换
	jQuery(".banner").slide({ titCell:".dot ol", mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

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
						a.addClass("box-on");
						a.next('i').addClass('in')
						break;
					case "second":
						a.addClass("box-in");
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

// 图文
	$(".news-list li").each(function(index, el) {
		if (index%2 != 0) {
			$(this).find('i').css({float:"right"});
			$(this).find('.opera').css({float:"left"});
		}
	});

// 图片列表
	$("ul.product li").hover(function() {
		$(this).find('.title').stop(true, true).animate({left:"100%"}, 500);
		$(this).find('.title-clone,em').stop(true, true).animate({left:"0px"}, 500);
	}, function() {
		$(this).find('.title').animate({left:"0px"}, 300);
		$(this).find('.title-clone,em').animate({left:"100%"}, 300,function(){
			$(this).css({left:"-100%"});
		});
	});

	$(".title").each(function(index, el) {
		var picData = $(this).html();
		$(this).after('<div class="title-clone"></div>')
		$(this).next(".title-clone").html(picData);
	});

// 产品展示
	if ($(".case-bd .case-last img").length < 2) {
		$(".case-hd").css({display:'none'});
	};
	jQuery(".case-list").slide({mainCell:".case-last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

});
