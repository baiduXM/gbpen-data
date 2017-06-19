$(document).ready(function(){
	

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

	function pageSlideOver(){
    $('.page-out').live('transitionend', function(){
      $(this).removeClass('page-out');
    });
    $('.page-in').live('transitionend', function(){
      $(this).removeClass('page-in');
    });
  }

	$(".ft_big").click(function(){
		$(".about_main1").attr('class',"about_main1 font-big");
		return false;
	});
	$(".ft_normal").click(function(){
		$(".about_main1").attr('class',"about_main1 font-normal");
		return false;
	});
	$(".ft_small").click(function(){
		$(".about_main1").attr('class',"about_main1 font-small");
		return false;
	});	

	$(".classfiy").click(function(){
		if($(".navs").is(":hidden")){
			$(".navs").slideDown();
			$(this).html("分类∧");
			return false;
		}else{
			$(".navs").slideUp();
			$(this).html("分类∨");
			return false;
		}	
	});


	//限制字符个数
    $(".kz").each(function(){
	    if($(this).parent('li').children('ul').length>0){
	    	$(this).children('span').css('display','inline-block');
	    }
	    
    });


    //回到顶部
	 $(".backtop").click(function() {
      $("body,#quickbar-wrap-body").animate({scrollTop:0}, 200);
      return false;
  	}); 	 

	 //折叠菜单
	 
	(function ($, window, document, undefined) {
	    if ($('ul.mtree').length) {
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
	(function(){
		 $('.firstli').each(function(index){
            $(this).click(function(){
				$(this).parent('li').siblings('li').find('ul').slideUp();
			})
        });
		$('.mtree>li>ul>li>a').each(function(index){
            $(this).click(function(){
				$(this).css('color','#1d8dcc')
				$(this).parent('li').siblings('li').find('ul').slideUp();
				$(this).parent('li').siblings('li').children('a').css('color','#ffffff')
			})
        });
		$('.mtree>li>ul>li>ul>li>a').each(function(index){
			$(this).click(function(){
				$(this).append('<span></span>')
				$(this).parent('li').siblings('li').find('span').remove()
				$(this).prepend('<em></em>')
				$(this).parent('li').siblings('li').find('em').remove()
			})
		});
	})();

	(function(){
		$('.form .text1').focus(function(){
			if($(this).val()=='请输入搜索关键字'){
				$(this).val('');
			}
		});
		$('.form .text1').blur(function(){
			if($(this).val()==''){
				$(this).val('请输入搜索关键字')
			}
		});			
	})();
	
    var mySwiper = new Swiper('#banner',{
	 loop:true,
		autoplay:5000,
		calculateHeight : true,
		pagination : '.pagination',
	  });  
  });
  
