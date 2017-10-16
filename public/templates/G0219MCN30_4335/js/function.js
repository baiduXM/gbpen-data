$(document).ready(function(){
   
   // 字体大小
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
	 
    $("body").animate({opacity:1},800);
    //banner滚动
    $(".swiper-banner").swiper({
        pagination: '.swiper-dote ul',
        autoplay : 2500,
        paginationClickable :true,
        paginationElement : 'li',
    })
   // prodt滚动
    $(".swiper-prodt").swiper({
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        effect:'coverflow',
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next'
    })
 
	//返回顶部
    $(".back-top").click(function(){$("#quickbar-wrap-body,body").animate({scrollTop :0}, 800)})

  // 分类
    	$(".more").click(function(){
      		$(".nnav").slideToggle()	
      		$(this).toggleClass("more_h");
    	})
	// 二级导航下拉
      $(".icon").click(function(){
          $(".menu_body").slideToggle()
          $(".font").slideUp()
          $(".icon1").hide()
          $(".icon2").show()    
      })
  // 三级导航下拉
      $(".icont").click(function(){
          $(".menu_thr").slideToggle()
          $(".font").slideUp()
          $(".icont1").hide()
          $(".icont2").show()    
      })
    
   //字体上下拉开始
    $(".ziti li.zi1").click(function(){
        $(".edite").attr('class',"edite span-zi1")  
       
    })
    $(".ziti li.zi2").click(function(){
        $(".edite").attr('class',"edite span-zi2")
       
    })
    $(".ziti li.zi3").click(function(){
        $(".edite").attr('class',"edite span-zi3")
    })      

  });
  
