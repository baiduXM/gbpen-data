
$(document).ready(function() {

//二级导航位置居中
	$(".subnav").each(function(index, el) {
		$(this).css({display:"block"}); //防止css中ul添加了display:none;暂时给予display:bock
		var parent = $(this).parent("li")
		var sum = 0;
		$(this).find('li').each(function(i, r) {
			sum += $(this).outerWidth(true); //获取二级li宽度集合
			sum += 13;
			return sum;
		});
		$(this).width(sum);
		var half = parent.outerWidth(true)/2;
		var wleft = parent.position().left + half; //获取父元素li中点距ul左侧距离
		var wright = parent.parent("ul").width()-wleft; //获取父元素li中点距ul右侧距离
			console.log(wleft)
		// if ((wleft < sum/2) && (wright > sum/2)) { //当ul宽度的一半小于li中点距离左侧值,且大于距离右侧值
		// 	var left = half - wleft
		// 	$(this).css({left:left});
		// } else 
		if ((wright < sum/2) && (wleft > sum/2)) { //当ul宽度的一半小于li中点距离右侧值,且大于距离左侧值
			var right = half - wright
			$(this).css({right:right})
		} else{
			var mid = half - sum/2;
			$(this).css({left:mid});
		};
		$(this).css({display:"none"}); //二级导航栏位置计算完毕，给予二级导航栏隐藏
	});

// 二级导航栏淡入淡出
	$(".nav li").hover(function() {
		var subnavLength = $(this).find('ul.subnav').length;
		$(this).find('ul.subnav').stop(true, true).fadeIn(100,function(){
			if (subnavLength > 0) {
				$(".nav_back").stop(true, true).css({display:"block"});
			};
		});
	}, function() {
		$(this).find('ul.subnav').fadeOut(100,function(){
			$(".nav_back").css({display:"none"});
		});
	});

// 焦点图片切换
	jQuery(".inside_banner").slide({ mainCell:".picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover" });


// 面包屑导航
	$(".main_hd span a:last-child").addClass('on');

// 编辑框
	for (var j = 0; j <= $(".box>li").length; j++) {
		if ($(".box>li:eq("+j+")").children('ul').length>0) {
			$(".box>li:eq("+j+")").children('a').attr('href','javascript:void(null)').addClass('add');
		}
	};
	for (var j = 0; j <= $(".box_list>li").length; j++) {
		if ($(".box_list>li:eq("+j+")").children('ul').length>0) {
			$(".box_list>li:eq("+j+")").children('a').attr('href','javascript:void(null)').addClass('add');
		}
	};

	$(".box>li>a").click(function(){
		$(this).parent().siblings().children('ul.box_list').children('li').children('ul.box_first').slideUp(300).prev("a").removeClass("box_in");
		if( $(this).hasClass('box_on') ){
			$(this).removeClass("box_on").next('ul.box_list').slideUp(300);
			if( $(this).next('ul.box_list').children('li').children('a').hasClass('box_in') ){
				$(this).next('ul.box_list').children('li').children('a').removeClass("box_in").next('ul.box_first').slideUp(300);
			};
		}else {
			$(this).next("ul.box_list").slideDown(300);
			$(this).addClass("box_on").parent().siblings().children("ul.box_list").slideUp(500).prev("a").removeClass("box_on");
		};
	});	

	$(".box_list>li>a").click(function(){
		if( $(this).hasClass('box_in') ){
			$(this).removeClass("box_in").next('ul.box_first').slideUp(300);
		} else{
			$(this).next("ul.box_first").slideDown(300);
			$(this).addClass("box_in").parent().siblings().children("ul.box_first").slideUp(500).prev("a").removeClass("box_in");
		};
	});

// 产品展示
if ($(".case_list img").length > 1) {
	jQuery(".case").slide({mainCell:".case_list",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});
}



})
