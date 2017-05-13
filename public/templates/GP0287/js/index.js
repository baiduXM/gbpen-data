$(document).ready(function() {

// 图片展示
	jQuery(".fabric").slide({mainCell:".fabric-list ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4,delayTime:500});
	
	$(".fabric-list ul li a").hover(function() {
		$(this).find('b').stop(true, true).animate({left:"89px"}, 500)
	}, function() {
		$(this).find('b').stop(true, true).animate({left:"100%"}, 500,function(){
			$(this).css({left:"-56px"});
		});
	});

	$("ul.business li a").hover(function() {
		$(this).find('em').stop(true, true).animate({left:"0px"}, 300,function() {
			 $(this).siblings('p').css({filter:"Alpha(opacity=100)",opacity:"1"}).addClass('sclate');
		});
	}, function() {
		$(this).find('em').animate({left:"100%"}, 200,function(){
			$(this).siblings('p').css({filter:"Alpha(opacity=0)",opacity:"0"}).removeClass('sclate')
			$(this).css({left:"-100%"});
		});
	});

// 文字列表图片切换
	jQuery(".press-img").slide({ titCell:"ol",mainCell:"ul", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

});

	function shake(o,end){
		var typ=["marginTop","marginLeft"],rangeN=3,timeout=10; //给予需要震动图片的区间以及时间
		var range=Math.floor(Math.random()*rangeN); 
		var typN=Math.floor(Math.random()*typ.length); 
		o["style"][typ[typN]]=""+range+"px"; 
		var shakeTimer=setTimeout(function(){shake(o,end)},timeout); 
		o[end]=function(){clearTimeout(shakeTimer)}; 
	};