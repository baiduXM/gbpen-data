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
	
	  //隐藏导航跟wrap的切换
    $("#quickbar #quickbar-navs-btn,.home").on('click',function(){
        $("#quickbar-navs").removeClass("page-prev").addClass("page-in");
        $("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
        $(".quickbar-opacity2").show()
        pageSlideOver();
    });
    $("#quickbar-navs .quickbar-navs-close,.quickbar-opacity2").on('click',function(){ 
        $("#quickbar-navs").removeClass("page-in").addClass("page-prev page-out")
        $("#quickbar-wrap").removeClass("page-next page-in").addClass("page-out")
        $(".quickbar-opacity2").hide()
        $(".quickbar-sharebox").removeClass("show_share")
        pageSlideOver();
        if ($('.quickbar_search').hasClass('search_show')) {
            $('.quickbar_search').removeClass('search_show');
        }
        $('.follow_img').css('display', 'none');
    });
    function pageSlideOver(){
        $('.page-out').on('transitionend', function(){
                $(this).removeClass('page-out');
        });
        $('.page-in').on('transitionend', function(){
                $(this).removeClass('page-in');
        });
    }

    //banner滚动
    $(".swiper-banner").swiper({
        pagination: '.swiper-dote ul',
        autoplay : 2500,
        paginationClickable :true,
        paginationElement : 'li',
    })
	//返回顶部
    // $(".back-top").click(function(){$("#quickbar-wrap-body,body").animate({scrollTop :0}, 800)})

  // 分类
    	$(".more").click(function(){
      		$(".nnav").slideToggle()	
      		$(this).toggleClass("more_h");
    	})
    if($('ul.nnav').children("li").length == 0){
        $(".more").hide();
    }
	// 二级导航下拉
      $(".icon").click(function(){
          $(this).parents(".menu_head").addClass("cur").parents().siblings().find(".menu_head").removeClass("cur");
          $(this).parents().siblings().find(".menu_body").hide(300);
          $(this).siblings(".menu_body").slideToggle() 
      })
  // 三级导航下拉
      $(".icont").click(function(){
          $(".menu_body").toggleClass("ercur")
          $(".menu_thr").slideToggle()   
      })

   //字体上下拉开始
   $(".span,.span2").click(function(){
        $("#up").hide()
        $("#down").show()
        $(this).toggleClass("span_h")
        $(".nnav").removeClass("hide-class1")
        $(".span > ul,.span2 > ul").slideToggle()
        $(".nnav").slideUp()  
    })
    $(".span ul li.zi1,.span2 ul li.zi1").click(function(){
        $(".edite").attr('class',"edite span-zi1")  
       
    })
    $(".span ul li.zi2,.span2 ul li.zi2").click(function(){
        $(".edite").attr('class',"edite span-zi2")
       
    })
    $(".span ul li.zi3,.span2 ul li.zi3").click(function(){
        $(".edite").attr('class',"edite span-zi3")
    })      
    //字体上下拉结束
    //pro滚动
    $(".swiper-pro").swiper({
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next'
    })

    $(".swiper-new").swiper({
        pagination: '.swiper-pagination',
        autoplay : 2500,
        slidesPerView: 2,
        spaceBetween: 8,
        autoplayDisableOnInteraction : false,
        paginationClickable :true
    })
   
    
});
  
