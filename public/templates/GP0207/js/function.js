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
    delayTime:200 , //效果时间
    triggerTime:0, //鼠标延迟触发时间（默认150）
    returnDefault:true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
  });

	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});
  jQuery(".slideBox3").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

  //选项卡
  jQuery(".slideTxtBox").slide({mainCell:".bd",trigger:"click"});

  jQuery(".slideBox2").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

   //首页飘入
   $("#intro_div").stop().addClass("animated bounceInLeft");
    $(window).scroll(function(){
      if($(window).scrollTop()>1300){
         $("#con").addClass("animated fadeIn");
      }else if($(window).scrollTop()>350){
        $(".box_l").addClass("animated bounceInLeft");
        $(".box_r").addClass("animated bounceInRight");
      }else if($(window).scrollTop()>250){
        $("#banner3").addClass("animated bounce");
      }
    });

  $("#bot_nav").find("span:last-child").remove();

  //回到顶部
   $("#top").click(function() {
      $("html,body").animate({scrollTop:0}, 300);
      return false;
    });

  $(".news_list3 li:nth-child(3n)").css('margin-right', '0');
  $(".news_list3 li").hover(function(){
    $(this).find(".mask").stop().animate({"bottom":"0px"},200);
    $(this).find(".text_div").stop().animate({"bottom":"0px"},200);
  },function(){
    $(this).find(".mask").stop().animate({"bottom":"-43px"},200);
    $(this).find(".text_div").stop().animate({"bottom":"-43px"},200);
  });

  $(".inner_l").stop().addClass("animated bounceInLeft");
  $(".inner_r").stop().addClass("animated bounceInRight");

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


 var i=0; //图片标识
      var img_num=$(".img_ul").children("li").length; //图片个数
      $(".img_ul li").hide(); //初始化图片 
      play();
      $(function(){
        $(".img_hd ul").css("width",($(".img_hd ul li").outerWidth(true))*img_num); //设置ul的长度
        $(".img_hd ul li").click(function(){
          i=$(this).index();
          play();
        });

        $(".prev_a").click(function(){
          //i+=img_num;
          i--;
          //i=i%img_num;
          i=(i<0?0:i);
          play();
        }); 
        $(".next_a").click(function(){
          i++;
          //i=i%img_num;
          i=(i>(img_num-1)?(img_num-1):i);
          play();
        }); 
      }); 

      function play(){//动画移动  
        var img=new Image(); //图片预加载
        img.onload=function(){
          img_load(img,$(".img_ul").children("li").eq(i).find("img"))
        };
        img.src=$(".img_ul").children("li").eq(i).find("img").attr("src");
        //$(".img_ul").children("li").eq(i).find("img").(img_load($(".img_ul").children("li").eq(i).find("img")));
        $(".img_hd ul").children("li").eq(i).addClass("on").siblings().removeClass("on");
        if(img_num>3){//大于3个的时候进行移动
          if(i<img_num-3){ //前3个
            $(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+8)*(i-3<0?0:(i-3)))});
          }else if(i>=img_num-3){//后3个
            $(".img_hd ul").animate({"marginLeft":(-($(".img_hd ul li").outerWidth()+8)*(img_num-3))});
          }
        }
      }

      function img_load(img_id,now_imgid){//大图片加载设置 （img_id 新建的img,now_imgid当前图片）
        if(img_id.width/img_id.height>1){
          if(img_id.width >=$("#play").width())
          $(now_imgid).width($("#play").width());
        }else{
          if(img_id.height>=363) $(now_imgid).height(363);
        }
        $(".img_ul").children("li").eq(i).show().siblings("li").hide(); //大小确定后进行显示
      }

      function imgs_load(img_id){//小图片加载设置
        if(img_id.width >=$(".img_hd ul li").width()){img_id.width = 138};
        //if(img_id.height>=$(".img_hd ul li").height()) {img_id.height=$(".img_hd ul li").height();}
      }

 




});

























