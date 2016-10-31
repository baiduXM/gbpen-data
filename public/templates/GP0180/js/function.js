$(document).ready(function() {
// 导航
	//获取地址，以及滑块定位
	var num = window.location.href.split("/").length - 1;
	var index = window.location.href.split("/")[num];
	
	if (index == null ||index == 0) {
		$("ul.nav>li:eq(0)>a").addClass('in')
	} else {
		$("ul.nav>li>a[href^='"+index+"']").addClass('in');
	}
	if ($("ul.nav>li>a").hasClass('in')) {
		var initial = $("ul.nav>li>a.in").parent("li").position().left;
		var liWidth = $("ul.nav>li>a.in").width();
	} else {
		var initial = $("ul.nav>li:eq(0)").position().left;
		var liWidth = $("ul.nav>li:eq(0)").width();
	};
	$(".lump").css({left:initial,width:liWidth});
	$("ul.nav>li").mouseover(function(){
		var thisWidth = $(this).children('a').width();
		var leftPosition = $(this).position().left;
		$(".lump").stop(true,false).animate({left:leftPosition,width:thisWidth}, 400);
	});
	$("ul.nav").mouseleave(function(event) {
		$(".lump").stop(true, true).animate({left:initial,width:liWidth},400);
	});

	//二级导航位置居中
	$(".subnav").each(function(index, el) {
		$(this).css({display:"block"}); //防止css中ul添加了display:none;暂时给予display:bock
		var parent = $(this).parent("li")
		var sum = 0;
		$(this).find('li').each(function(i, r) {
			sum += $(this).outerWidth(true); //获取二级li宽度集合
			return sum;
		});
		$(this).width(sum);
		var half = parent.outerWidth(true)/2;
		var wleft = parent.position().left + half; //获取父元素li中点距ul左侧距离
		var wright = parent.parent("ul").width()-wleft; //获取父元素li中点距ul右侧距离
		if ((wleft < sum/2) && (wright > sum/2)) { //当ul宽度的一半小于li中点距离左侧值,且大于距离右侧值
			var left = half - wleft
			$(this).css({left:left});
		} else if ((wright < sum/2) && (wleft > sum/2)) { //当ul宽度的一半小于li中点距离右侧值,且大于距离左侧值
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
		$(this).find('i,ul.subnav').stop(true, true).fadeIn(400);
	}, function() {
		$(this).find('i,ul.subnav').fadeOut(100);
	});

if ($(".inside").length>0) {
	// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot ol", mainCell:"ul.picture", effect:"left",  autoPlay:true,mouseOverStop:false, autoPage:true, trigger:"click" });

}

// 编辑框
	var data = new Array(); 
	$("ul.second>li").each(function(e, se) {
		if ($(this).find('ul').length > 0) {
			data[e] = $(this).find('ul').html(); //将所有三级侧边导航存入数组data中
		}
		return data[e];
	});
	$(".box").after('<ul class="third-clone"></ul>'); //创建三级导航栏克隆标签
	var clone = $(".third-clone")
	$("ul.second>li").hover(function() {
		if ($(this).find("ul").length>0) {
			var num = $(this).index("ul.second>li") //获取当前li相对于所有三级导航li是第几个
			clone.html(data[num]);
			var setop = $(this).parent("ul").parent("li").position().top;
			var multiple = 0;
			var ulHeight = $(".first").height();
			var boxHeight = $(".box").height();
			if (ulHeight > boxHeight) {
				multiple = (ulHeight / boxHeight)*$(".mCSB_dragger").position().top;
			};
			var clonetop = setop + $(".left h2").outerHeight(true) + $(this).parent("ul").prev("a").outerHeight(true) + 16 - multiple;
			clone.addClass('true').css({top:clonetop}).stop(true, true).slideDown(500);
			$(this).children('a').addClass('box-in').parent().siblings().children('a').removeClass('box-in');
		};
	},function(){
		clone.removeClass('true');
		setTimeout("hide()", 200);
	});
	clone.hover(function() {
		clone.addClass('true').stop(true, true).slideDown(500);
	}, function() {
		clone.removeClass('true');
		setTimeout("hide()", 200);
	});

	// 二级侧边栏下拉效果
	$(".first>li>a").click(function(){
		if ($(this).next('ul').length>0) {
			if( $(this).hasClass('box-on') ){
				$(this).removeClass("box-on").next('ul').stop(true, true).slideUp(300).find('a').removeClass();
			}else {
				$(this).next("ul").slideDown(400);
				$(this).addClass("box-on").parent().siblings().children("a").removeClass("box-on").next("ul").slideUp(300).find('a').removeClass();
			};
			return false;
		};
	});	

// 如果主内容中包含ul标签，外围父元素空出page的位置
	if($(".center").find('ul').length > 0){
		$(".center").css({height:"411px"});
	};

// 超出高度，出现自定义模拟滚动条
	if ($(".box").length>0) {
		$(".box,.center").mCustomScrollbar({
		    scrollButtons:{
		        enable:false,
		        scrollType:"continuous",
		        scrollSpeed:20,
		    	scrollAmount:40
		    },
		    horizontalScroll:false,
		});
	};

// 面包屑导航
	$(".main-hd span a:last-child").addClass('on');

// 图片列表
	 $(".product li").on("mouseenter mouseleave",function(e) {  
        var w = $(this).width();
        var h = $(this).height();
        var x = (e.pageX - $(this).offset().left - (w / 2)) * (w > h ? (h / w) : 1);
        var y = (e.pageY - $(this).offset().top - (h / 2)) * (h > w ? (w / h) : 1);
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
        /* direction:0,1,2,3 ---> top right bottom left*/  
        var eventType = e.type;  
        var aPos=[{left:0,top:"-100%"},{left:"100%",top:0},{left:0,top:"100%"},{left:"-100%",top:0}];  
        if(eventType == 'mouseenter'){  
            $(this).find('.border').css(aPos[direction]).stop(true,true).animate({left:0,top:0},200);  
        }else{  
            $(this).find('.border').stop(true,true).animate(aPos[direction],200);  
        }  
    });

// 产品展示
    if ($(".case").length>0) {
    	if ($(".case-bd img").length < 2) {
	        $(".case-hd").css({display:'none'});
	        $(".case-bd").css({width:"742px",height:"auto"});
	        $(".case-bd ul li").css({width:"742px",height:"278px"});
	    };
	    jQuery(".case-list").slide({titCell:".case-hd ol li", mainCell:".case-bd ul", effect:"top", autoPlay:true, delayTime:300, triggerTime:50, trigger:"click", startFun:function(i){
	            jQuery(".triangle").animate({"top":95*i},150);
	            $(".case-hd ol li:eq("+i+")").find('b').css({filter:"Alpha(opacity=0"}).animate({opacity:"0"}, 200);
	            $(".case-hd ol li:eq("+i+")").siblings('li').find('b').css({filter:"Alpha(opacity=50"}).animate({opacity:"0.5"}, 200);
	        }
	    });
    };

});

function hide(){
	if ($(".third-clone").hasClass('true') == false) {
			$(".third-clone").slideUp(300);
		};
};