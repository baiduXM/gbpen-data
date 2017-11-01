$(document).ready(function(){
	(function(doc,win){
		var docEl = doc.documentElement,
		resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ,
		recalc = function()
		{
			var clientWidth = docEl.clientWidth;
			if(!clientWidth) return;
			if(clientWidth>640){
			clientWidth=640;
		}
		docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
	};
	recalc();
	if(!doc.addEventListener) return;
	win.addEventListener(resizeEvt,recalc,false);
	doc.addEventListener('DOMContentLoaded',recalc,false);
	})(document,window);

    //限制个数
	$(".kz").each(function(){   
		var maxwidth=parseInt($(this).attr("data-limit"));
		if($(this).text().length>maxwidth){   
			$(this).text($(this).text().substring(0,maxwidth));    
			$(this).html($(this).html()+'...');   
		}    
	});  


	//隐藏导航跟wrap的切换
	$("#class,.menuico").click(function(){
		$(".class").removeClass("page-prev").addClass("page-in");
		$(".wrap").removeClass("page-active").addClass("page-next page-in");
		$(".opacity2").show();
		pageSlideOver();
		
	});
	$(".class-close,.opacity2").on('touchstart',function(){
		$(".class").addClass("page-prev page-out");
		$(".wrap").removeClass("page-next").addClass(" page-out");
		$(".opacity2").hide();
		$(".newsclass").removeClass("show");
		pageSlideOver();
		return false;
	});
	$("#font").click(function(){
		$(".hide-class").removeClass("hide-class1");
		$(".font,.font1").slideToggle();
		$(".hide-class").slideUp();
		return false;
	});
	$(".font1 dl.big").click(function(){
		$(".inner_main").attr('class',"inner_main font-big");
		$(".font1").hide();
		return false;
	});
	$(".font1 dl.normal").click(function(){
		$(".inner_main").attr('class',"inner_main font-normal");
		$(".font1").hide();
		return false;
	});
	$(".font1 dl.small").click(function(){
		$(".inner_main").attr('class',"inner_main font-small");
		$(".font1").hide();
		return false;

	});	
	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }


	



    //回到顶部
	 $(".backtop").click(function() {
      $("body,#quickbar-wrap-body").animate({scrollTop:0}, 200);
      return false;
  	}); 	 

	  //折叠菜单
	 
	(function ($, window, document, undefined) {

	    if ($('ul.mtree').length>0) {
	        var collapsed = true;
	        var close_same_level = false;
	        var duration = 400;
	        var listAnim = true;
	        var easing = 'easeOutQuart';
	        $('.mtree ul').css({
	            'overflow': 'hidden',
	            'height': collapsed ? 0 : 'auto',
	            'display': collapsed ? 'none' : 'block'
	        });
	        var node = $('.mtree li:has(ul)');
	        node.each(function (index, val) {
	            $(this).children(':first-child').css('cursor', 'pointer');
	            $(this).addClass('mtree-node mtree-' + (collapsed ? 'closed' : 'open'));
	            $(this).children('ul').addClass('mtree-level-' + ($(this).parentsUntil($('ul.mtree'), 'ul').length + 1));
	        });
	        $('.mtree li > *:first-child').on('click.mtree-active', function (e) {
				
	            if ($(this).parent().hasClass('mtree-closed')) {
	                $('.mtree-active').not($(this).parent()).removeClass('mtree-active');
	                $(this).parent().addClass('mtree-active');
	            } else if ($(this).parent().hasClass('mtree-open')) {
	                $(this).parent().removeClass('mtree-active');
	            } else {
	                $('.mtree-active').not($(this).parent()).removeClass('mtree-active');
	                $(this).parent().toggleClass('mtree-active');
	            }
	        });
	        console.log('1')
	        node.children(':first-child').on('click.mtree', function (e) {

	            var el = $(this).parent().children('ul').first();
	            var isOpen = $(this).parent().hasClass('mtree-open');
	            if ((close_same_level || $('.csl').hasClass('active')) && !isOpen) {
	                var close_items = $(this).closest('ul').children('.mtree-open').not($(this).parent()).children('ul');
	                if ($.Velocity) {
	                    close_items.velocity({ height: 0 }, {
	                        duration: duration,
	                        easing: easing,
	                        display: 'none',
	                        delay: 100,
	                        complete: function () {
	                            setNodeClass($(this).parent(), true);
	                        }
	                    });
	                } else {
	                    close_items.delay(100).slideToggle(duration, function () {
	                        setNodeClass($(this).parent(), true);
	                    });
	                }
	            }
	            el.css({ 'height': 'auto' });
	            if (!isOpen && $.Velocity && listAnim)
	                el.find(' > li, li.mtree-open > ul > li').css({ 'opacity': 0 }).velocity('stop').velocity('list');
	            if ($.Velocity) {
	                el.velocity('stop').velocity({
	                    height: isOpen ? [
	                        0,
	                        el.outerHeight()
	                    ] : [
	                        el.outerHeight(),
	                        0
	                    ]
	                }, {
	                    queue: false,
	                    duration: duration,
	                    easing: easing,
	                    display: isOpen ? 'none' : 'block',
	                    begin: setNodeClass($(this).parent(), isOpen),
	                    complete: function () {
	                        if (!isOpen)
	                            $(this).css('height', 'auto');
	                    }
	                });
	            } else {
	                setNodeClass($(this).parent(), isOpen);
	                el.slideToggle(duration);
	            }
	            e.preventDefault();
	        });
	        function setNodeClass(el, isOpen) {
	            if (isOpen) {
	                el.removeClass('mtree-open').addClass('mtree-closed');
	            } else {
	                el.removeClass('mtree-closed').addClass('mtree-open');
	            }
	        }
	        if ($.Velocity && listAnim) {
	            $.Velocity.Sequences.list = function (element, options, index, size) {
	                $.Velocity.animate(element, {
	                    opacity: [
	                        1,
	                        0
	                    ],
	                    translateY: [
	                        0,
	                        -(index + 1)
	                    ]
	                }, {
	                    delay: index * (duration / size / 2),
	                    duration: duration,
	                    easing: easing
	                });
	            };
	        }
	        if ($('.mtree').css('opacity') == 0) {
	            if ($.Velocity) {
	                $('.mtree').css('opacity', 1).children().css('opacity', 0).velocity('list');
	            } else {
	                $('.mtree').show(200);
	            }
	        }
	    }
	}(jQuery, this, this.document));

	
	$(".classfiy").click(function(){
		if($(".navs").is(":hidden")){
			$(".navs").slideDown();
			$(this).html("分类 -");
			return false;
		}else{
			$(".navs").slideUp();
			$(this).html("分类 +");
			return false;
		}	
	});
	if ($("#banner").length>0) {
	    var mySwiper = new Swiper('#banner',{
			loop:true,
			autoplay:5000,
			calculateHeight : true,
			pagination : '.pagination',
		 });
	 }  
  });
  
