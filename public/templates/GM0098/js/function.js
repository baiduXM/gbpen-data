
jQuery(document).ready(function($) {
	//根据设备窗口大小调整高度
	resize();

	$(window).resize(function(){
		resize();

		
	});
	function resize(){
		$(".nav-menu").height($(window).outerHeight());
		
		$(".quickbar-wrap-body").height($(window).outerHeight()-$('footer').outerHeight()-$('.tel').outerHeight());
	}

	
  //导航li>a高度
  function Nav_H(a){
		$(a).css({
			height:$(a).width()/1.5

		});
	};
	Nav_H(".mune li a");

	
//快速导航的的下拉特效
	function nav(stair){
		var stair=$(stair).children('li').children('a');
		var obj=stair.next();
		if (obj.length>0) {
			obj.prev().append('<span>+</span>')
			stair.click(function(event) {
				if($(this).children('span').text() == "+"){
				$(this).attr('href', 'javascript:0;');
                 $(this).children('span').text('-')
             }else{
                 $(this).children('span').text('+')
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
	//返回顶部
		$('.home a').bind('click', function() {
		 $('#quickbar-wrap-body').animate({scrollTop: 0}, 800)
		
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
		$('.class').click(function() {
		if($('.class_list').is(':hidden')){
				$(this).html("分类∨")	
		}else{
		$(this).html("分类∧")
		}
			$('.class_list').slideToggle('slow')
		});

		function mune(a){
			var class_one=$(a).children('li').children('a');
			var class_two=class_one.next();
			if(class_two.length>0){
				class_two.prev().append('<span>+</span>')
				class_one.click(function() {
					if($(this).children('span').text() == '+'){
						$(this).attr('href', 'javascript:0;');
						$(this).children('span').text('-')
						
					}else{
						$(this).children('span').text('+');
						
					};
					$(this).next().slideToggle('slow');
					
				});	

			}
			var class_third=$(class_two).children('li').children('a');
			var class_fore=class_third.next();
				if(class_fore.length>0){
				class_fore.prev().append('<span>+</span>')
				class_third.click(function() {
					if($(this).children('span').text() == '+'){
						$(this).attr('href', 'javascript:0;');
						$(this).children('span').text('-')
						
					}else{
						$(this).children('span').text('+');
						
					};
					$(this).next().slideToggle('slow');
					
				});	

			}
		}
		mune('.class_list');

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
			$(".quickbar-wrap-body").height($(window).outerHeight()-$('footer').outerHeight());	
		});
		
		//首页产品pro_top的高度
		var abouth=$(".pro_top img").height();
		$(".pro_dt").outerHeight(abouth);
});