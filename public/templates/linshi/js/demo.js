$(function($){
	$(window).scroll( function() {
		if($(document).scrollTop() >= 200 && $(document).scrollTop() < 600){
			$(".about").addClass('anim');		
		}
		if($(document).scrollTop() >= 1200 && $(".about").hasClass('anim')){
			$(".about").removeClass('anim')
			
		}
		if($(document).scrollTop() < 150 && $(".about").hasClass('anim')){
			$(".about").removeClass('anim')
		}
	});
	init = function() {
		if(window.chrome) {
			$('.slide li').css('background-size', '100% 100%');
		}

		$('.slide').unslider({
			arrows: false,
			fluid: true,
			dots: true
		});

		//  Find any element starting with a # in the URL
		//  And listen to any click events it fires
		$('a[href^="#"]').click(function() {
			//  Find the target element
			var target = $($(this).attr('href'));

			//  And get its position
			var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

			//  jQuery will return false if there's no element
			//  and your code will throw errors if it tries to do .offset().left;
			if(pos) {
			//  Scroll the page
				$('html, body').animate({
					scrollTop: pos.top,
					scrollLeft: pos.left
				}, 8000);
			}

			//  Don't let them visit the url, we'll scroll you there
			return false;
		});

		/*首页product模块图片随机点中特效 start*/
		var ul_len = $("div.product ul li").length -2;
		var rand;

		clearInterval(interval); 
		var interval = setInterval(function(){
			// console.log($("div.product"));
			rand = Math.floor( Math.random() * ul_len) + 1;//获取随机数
			console.log(rand);
			$(".product ul li").removeClass('color');
	        $(".product ul li").eq(rand).addClass('color');
	    },1500);
	    $(".product ul li").hover(function() {
	    	$(".product ul li").removeClass('color');
	    	clearInterval(interval); 
	    }, function() {
	    	// clearInterval(interval); 
			
	    });
	   
	    $(".product ul").mouseleave(function(event) {
	    	interval = setInterval(function(){
				// console.log($("div.product"));
				rand = Math.floor( Math.random() * ul_len) + 1;//获取随机数
				console.log(rand);
				$(".product ul li").removeClass('color');
		        $(".product ul li").eq(rand).addClass('color');
		    },1500);
	    });	
	    /*首页product模块图片随机点中特效 end*/	
	}

	init();
});