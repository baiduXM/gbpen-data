 $(document).ready(function(){
  (function(){
    $('.nav ul li a').each(function(index){
      $(this).hover(function(){
        $(this).children('strong').addClass('wow fadeInLeft');    
      },function(){
         $(this).children('strong').removeClass('wow fadeInLeft');
         $(this).children('strong').addClass('wow fadeOutRight'); 
         $('.nav ul .on a').children('strong').addClass('wow fadeInLeft');  
      })
    });
  })();
  (function(){
  $('.pro_page li').each(function(index) {
    $(this).hover(function(){
      $(this).find('.protitle').addClass('animated bounce');
    },function(){
      $(this).find('.protitle').removeClass('animated bounce');
    });
    });
})();
  (function(){
    $('.header .nav li.nav_li a').each(function(index){
      $(this).hover(function(){
          $(this).find('b').stop(true,true).css('display','inline-block').removeClass('wow bounceOutRight animated').addClass('wow bounceInLeft animated');
        },function(){
          $(this).find('b').stop(true,true).removeClass('wow bounceInLeft animated').addClass('wow bounceOutRight animated');
        });
    });
  })();
  (function(){ 
    $('.firstli').hover(function(){
      var index=$(this).index();
      if($('.firstli').eq(index).has('.sec_li1').length >0){
        $('.firstli').each(function(i){

          $('.firstli').eq(index).find('.sec_li1').stop(true,true).slideDown();
        });
      }
      },function(){
      var index=$(this).index();
      $('.firstli').each(function(i){
        $(this).find('ul').stop(true,true).slideUp();

      })
    })
  })();
  (function(){
    $('.sec_li1 li').each(function(i){
      $(this).hover(function(){      
          if($(this).has('ul').length >0){   
              $(this).find('.third_li1').stop(true,true).slideDown();
            };
        },function(){
        $('.firstli').each(function(i){
          $(this).find('.third_li1').stop(true,true).slideUp();
          });
        });
      });    
  })();
(function(){
      $('.search_area').focus(function(){
        if($(this).val()=='请输入关键词'){
          $('.search_area').val('');
        }
    });
    $('.search_area').blur(function(){
      if($(this).val()==''){
        $('.search_area').val('请输入关键词')
      }
    });   
  })();

  //限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });
    (function(){
    $('.shouqi').click(function(){
      $('.zhankai').css('display','block')
      $('#footer').animate({"left":"1920"},1000);
    });
  })();
  (function(){
    $('.zhankai').click(function(){
      $('.zhankai').css('display','none')
      $('#footer').animate({"left":"0"},1000);
    });
  })();
  (function(){
    $(".zhankai").animate({bottom:"34px"}, 500,function(){
      $(this).animate({bottom:"50px"}, 500);
    });
  setInterval(function(){
        $(".zhankai").animate({bottom:"34px"}, 500,function(){
          $(this).animate({bottom:"50px"}, 500);
        });
  }, 1000);
  })();

  $(".nav").slide({ 
        type:"menu", //效果类型
        titCell:".nav_li",// 鼠标触发对象
        targetCell:".secondul", // 效果对象，必须被titCell包含
        delayTime:0, // 效果时间
        triggerTime:0, //鼠标延迟触发时间
        defaultPlay:true,//默认执行
        returnDefault:true//返回默认
      });
	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});

  jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:5,interTime:50});

(function(){
  var iW=$('.firstli').width()
  $('.third_li1').css('left',iW)
})();

    
   //placeholder兼容
  if( !('placeholder' in document.createElement('input')) ){  
   
    $('input[placeholder],textarea[placeholder]').each(function(){   
      var that = $(this),   
      text= that.attr('placeholder');   
      if(that.val()===""){   
        that.val(text).addClass('placeholder');   
      }   
      that.focus(function(){   
        if(that.val()===text){   
          that.val("").removeClass('placeholder');   
        }   
      })   
      .blur(function(){   
        if(that.val()===""){   
          that.val(text).addClass('placeholder');   
        }   
      })   
      .closest('form').submit(function(){   
        if(that.val() === text){   
          that.val('');   
        }   
      });   
    });   
  }

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
        if($(this).children('i').hasClass('iactive')){
          $(this).children('i').removeClass('iactive')
           } else{
             $(this).children('i').addClass('iactive')
           }
      })
    });
  })();
 if($(".title1 h1").size()>0){
    var str=$(".title1 h1").html();
    var target="<i>"+str.substring(0,2)+"</i>";
    $(".title1 h1").html(target+str.substr(2));
  }
   jQuery(".txMovie").slide({ titCell:".focus_nav li", mainCell:".focus_pic", targetCell:".focus_text li", autoPlay:true,delayTime:100,startFun:function(i){
        //控制小图自动翻页
        if(i==0){ jQuery(".txMovie .navPrev").click() } else if( i%6==0 ){ jQuery(".txMovie .navNext").click()}
      }
    });
    //小图滚动
    jQuery(".txMovie").slide({ mainCell:".focus_nav ul",prevCell:".navPrev",nextCell:".navNext",effect:"left",vis:6,scroll:1,delayTime:0,autoPage:true,pnLoop:false});
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
    new WOW().init();
  };

});