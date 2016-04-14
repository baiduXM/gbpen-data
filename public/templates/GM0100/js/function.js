
jQuery(document).ready(function($) {

	//根据设备窗口大小调整高度
	resize();

	$(window).resize(function(){
		resize();

		
	});
	function resize(){
		$(".quick_nav").height($(window).outerHeight());	
		$("#quickbar-wrap-body").height($(window).outerHeight()-$("#quickbar").outerHeight());
	}

	
  //导航li>a高度
 
	
//快速导航的的下拉特效
	function nav(stair){
		var stair=$(stair).children('li').children('a');
		var obj=stair.next();
		if (obj.length>0) {
			obj.prev().append('<span>></span>')
			stair.click(function(event) {
				if($(this).children('span').text() == ">"){
				$(this).attr('href', 'javascript:0;');
                 $(this).children('span').text('>')
             }else{
                 $(this).children('span').text('>')
             };
              $(this).next().slideToggle(200)
			});
		};       
	}
	nav(".first")
 //快速导航与wrapper的切换
	$('.icon_n').bind('click', function() {
		$('.quick_nav').toggleClass('slateX');
		$('.wrapper').toggleClass('w_slateX');
		$('.wrapper').children('.show_bg').css({
			display: 'block'
		});

	});
	$('.close').bind('click', function() {
		$('.quick_nav').removeClass('slateX');
		$('.wrapper').removeClass('w_slateX');
		$('.wrapper').children('.show_bg').css({
			display: 'none'
		});
	});
	$('.show_bg').on('touchstart click', function() {
		$('.quick_nav').removeClass('slateX');
		$('.wrapper').removeClass('w_slateX');
		$('.wrapper').children('.show_bg').css({
			display: 'none'
		});
	});

//分享的显示隐藏
	$('.share').bind('click', function() {
		$('.bbs').slideDown('slow');
	});
	$('.cancel').bind('click', function() {
		$('.bbs').css({
			display: 'none'
		});
	});
	//返回顶部
		$('.home>a').bind('click', function() {
		$('.contant').animate({'scrollTop':0}, 800)
		});


	$('.big').click(function() {
				$('.article').css({
					fontSize: 1.25+"em"
				});
		});
	$('.mormal').click(function() {
				$('.article').css({
					fontSize: 1+"em"
				});
	});
	$('.smail').click(function() {
			$('.article').css({
				fontSize: 0.9+"em"
			});
	});
		//分类的下拉菜单和分类

	function Class_F(a){
 	var first_CH=$(a).children('li').children('a');
 	var second_CH=first_CH.next();
 	if (second_CH.length>0){
 		second_CH.prev().addClass('tans');
 		second_CH.prev().attr('href', 'javascript:0;');
 		first_CH.click(function() {
 			$(this).next().slideToggle();
 		});
 	};
 	var two_CH=second_CH.children('li').children('a');
 	var third_CH=two_CH.next();
 	if(third_CH.length>0){
 		third_CH.prev().addClass('line');
 		third_CH.prev().attr('href', 'javascript:0;');
 		two_CH.click(function() {
 			$(this).next().slideToggle();
 		});

 	}
 }

		Class_F('.class_list');


		//新闻图文列表的高度
		$(".go").click(function() {
		window.history.go(-1);
		});


		//关闭电话
		$('.tel').css({
			bottom: $('footer').outerHeight()
		});
		$('.gb').click(function() {
			$('.tel').hide();
			$(".contant").height($(window).outerHeight()-$('footer').outerHeight());	
		});
		
		//首页产品pro_top的高度
		var abouth=Math.floor($(".pro_top>img").height());
		$(".pro_dt").outerHeight(abouth*0.95);
		//滚动条
var scroller  = null;
var scrollbar = null;
window.onload = function () {
  scroller  = new jsScroller(document.getElementById("Scroller-1"), 630, 450);
  scrollbar = new jsScrollbar (document.getElementById("Scrollbar-Container"), scroller, false);
}
});