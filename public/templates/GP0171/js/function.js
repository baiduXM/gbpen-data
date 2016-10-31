 $(document).ready(function(){

  //限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });

	//下拉菜单
	jQuery(".nav").slide({ 
		type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
		titCell:".nav_li", //鼠标触发对象
		targetCell:".sub", //titCell里面包含的要显示/消失的对象
		effect:"slideDown", //targetCell下拉效果
		delayTime:300 , //效果时间
		triggerTime:0, //鼠标延迟触发时间（默认150）
		returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
	});
  
  //选项卡
  jQuery(".slideTxtBox").slide({mainCell:".bd",trigger:"click"});

	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});
  //多图时轮播
  jQuery(".slideBoxs").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false,/* 鼠标移到容器层继续播放*/
  /* 控制进度条 */
    startFun:function(){
      var timer = jQuery(".slideBox2 .timer");
      timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
    }
  });


  if($(".focusBox img").length<2){
        $(".focusBox").parent().find(".img_hd").css("display","none");
    }

  
    $(".inner_l").stop().addClass("animated bounceInLeft");
    $(".inner_r").stop().addClass("animated bounceInRight");
  
  //首页飘入
    $(window).scroll(function(){
       if($(window).scrollTop()>2000){
        $(".news_l").addClass("animated bounceInLeft");
        $(".news_r").addClass("animated bounceInRight");
      }
    });
    $(".about_main .img_div").stop().addClass("animated bounceInLeft");
    $(".about_main .blue").stop().addClass("animated bounceInLeft");
    $(".about_main .text_div").stop().addClass("animated bounceInRight");


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





});













