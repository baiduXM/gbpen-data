
jQuery(document).ready(function($) {

  // 首页导航的宽高

 var Nav_w=$(".mune li a").width();
 $(".mune li a").height(Nav_w*.8741);
 	$(".mune li a span").width(Nav_w);
 	var Span_h=$(".mune li a span").height();
 	$(".mune li a span").css({
 		marginTop: -Span_h/2
 	});

	//首页新闻列表的高度
	var News_w=$(".news_list li a").width();
	 $(".news_list li a").height(News_w*0.2229);
	// $(".news_list li a i").css("bottom",News_w*0.059+"px");
	var Sp_h=$(".news_list li a span").height();
	$(".news_list li a span").css({
		marginTop: -Sp_h/2
	});
	//返回顶部
		$('.home>a').click(function(event) {
	$('#quickbar-wrap-body').animate({'scrollTop':0}, 800);
});

		// 字体大中小
	$('.font_s').click(function() {
		if($('.f_size').is(':hidden')){
				$(this).html("font -")	
		}else{
		$(this).html("font+")
			
		}
		$('.f_size').slideToggle('slow')	
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
		//$('.class').click(function() {
		//if($('.class_list').is(':hidden')){
		//		$(this).html("class∨")	
		//}else{
		//$(this).html("class∧")
		//}
		//	$('.class_list').slideToggle('slow')
		//});

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

		//返回上一级
		$(".go").click(function() {
		window.history.go(-1);
		});


		
	//内页新闻列表的高度
	var News_w=$(".news_list1 li a").width();
	 $(".news_list1 li a").height(News_w*0.24);
	var Sp_h=$(".news_list1 li a span").height();
	var num = 2;
	if(Sp_h>90)
		num=3;
	$(".news_list1 li a span").css({
			marginTop: -Sp_h/num
	});
		
		
});