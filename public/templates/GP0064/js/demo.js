
$(document).ready(function() {
// 限制字数
	$(".xz").each(function(){   
	var maxwidth=parseInt($(this).attr("data-limit"));
	if($(this).text().length>maxwidth){   
		$(this).text($(this).text().substring(0,maxwidth));    
		$(this).html($(this).html()+'...');   
		}    
	}); 

// 全屏焦点图片切换
	jQuery(".banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });

// 导航
	$(function(){
	    var ulWidth=$("ul.menu").width();//得到ul宽度
	    var liLen=$("ul.menu>li").length;//得到li的个数
	    $("ul.menu>li").css({width:ulWidth/liLen})
	    
	    // 求ul.nav_list的left
	    var differ=($(".menu li").width()-$(".nav_list").width())/2;
	    $(".nav_list").css({left:differ});

	    // 下横线滑块随鼠标移动
		$(".menu>li>a").mouseenter(function(){
		    var menuWidth=$('#width',this).width();
		    var leftPosition=((ulWidth/liLen)-menuWidth)/2;
			var parent=$(this).parent();
			var left=parent.position().left+leftPosition;
			$(".ledgement").stop(true,true).animate({left:left,width:menuWidth}, 500);
		});
		
		$(".menu").mouseleave(function(){
			$(".ledgement").stop(true,true).animate({left:"0px",width:"0px"},500);
		});


		$(".menu>li").hover(function(){
  			$(this).find("ul.nav_list").stop(true, true).slideDown(500);
		},function(){
			$(this).find("ul.nav_list").slideUp(500);
		});
		$(".nav_list>li").hover(function(){
			$(this).find("ul.nav_first").show(300).prev("a").addClass("nav_on");
		},function(){
			$(this).find("ul.nav_first").hide(0).prev("a").removeClass("nav_on");
		})
		$(".nav_first>li").hover(function(){
			$(this).find("ul.nav_second").show(300).prev("a").addClass("nav_in");
		},function(){
			$(this).find("ul.nav_second").hide(0).prev("a").removeClass("nav_in");
		})
	});

// 新闻
	$(".side_news_other>li").hover(function(){
		$(this).stop(true,true).animate({height:"488px",top:"-29px"}, 300);
		$(this).find(".side_press").stop(true,true).animate({height:"195px"}, 300);
		$(this).find("img").stop(true,true).animate({width:"294px", height:"216px",left:"19px"}, 300);
	},function(){
		$(this).stop(true,true).animate({height:"430px",top:"0px"}, 300);
		$(this).find(".side_press").stop(true,true).animate({height:"166px"}, 300);
		$(this).find("img").stop(true,true).animate({width:"218px", height:"160px",left:"48px"}, 300);
	});
//字体大小
	$(".press_hd p span a:first-child").click(function() {
		$(".news_detail .press").css({fontSize:'16px'});
	});
	$(".press_hd p span a:nth-child(2)").click(function() {
		$(".news_detail .press").css({fontSize:'14px'});
	});
	$(".press_hd p span a:last-child").click(function() {
		$(".news_detail .press").css({fontSize:'12px'});
	});

// 产品页
	$(".pro>li>a").hover(function() {
		$(this).find('.back').stop(true, true).slideDown(300);
	}, function(){
		$(this).find('.back').stop(true, true).slideUp(300);
	});
// 产品展示
	jQuery(".case").slide({mainCell:".case_list",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

})