 $(document).ready(function(){


  $(".banner").addClass("animated bounceInLeft");
  $(".about").addClass("animated bounceInRight");
  $(".case").addClass("animated bounceInRight");
  $("#text").animate({"right":"0px"},500);

  //限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });

	 $("#nav_btn").click(function(){
      $(this).parent().find("#nav").slideToggle();
      return false;
   });
   $("#nav").find(".yili .a").click(function(){
      if($(this).parent().find(".erul").size()){
        $(this).addClass("on").siblings().removeClass("on"); 
        $(this).parent().find(".erul").stop().slideToggle();
        return false;
      }else{
        return true;
      }
   });
   $("#nav").find(".erul li a").click(function(){
      if($(this).parent().find("ul").size()){
        $(this).addClass("on").siblings().removeClass("on"); 
        $(this).parent().find("ul").stop().slideToggle();
        return false;
      }else{
        return true;
      }
   });

	//大图轮播
	jQuery(".slideBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
	mouseOverStop:false});

  jQuery(".slideBox1").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

  $("#slideBox").find(".hd li:eq(0)").css({"top":"0","right":"0"});
  $("#slideBox").find(".hd li:eq(1)").css({"top":"50%","left":"50%","margin-top":"-8px","margin-left":"-8px"});
  $("#slideBox").find(".hd li:eq(2)").css({"bottom":"0","left":"0"});
 
  $("#inner_nav").find(".firli").hover(function(){
    $(this).find(".secul").stop().slideDown();
  },function(){
    $(this).find(".secul").stop().slideUp();
  });

  $("#text").mCustomScrollbar({
    theme:"minimal"
  });
  $("#text1").mCustomScrollbar({
    theme:"minimal"
  });

  $(".img_list2 li:nth-child(5n)").css('margin-right', '0');

  // if($(".focusBox img").length<2){
  //       $(".focusBox").find(".btns").css("display","none");
  //   }
  jQuery(".slideBox2").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"left",interTime:4500,delayTime:350, autoPlay:true, autoPage:true, trigger:"click",
  mouseOverStop:false});

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
 


});

























