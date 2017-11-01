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
        pagination: '.banner-dote ul',
        autoplay : 2500,
        paginationClickable :true,
        paginationElement : 'li',
    })
    
  // 首页产品图
    $(".swiper-pro").swiper({
        autoplay : 2500,
        spaceBetween: 32,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next'
    })
  // 首页新闻
    $(".swiper-new").swiper({
        pagination: '.swiper-pagination',
        autoplay : 3000,
        slidesPerView: 1,
        // spaceBetween: 6,
        slidesPerColumn: 2,
        autoplayDisableOnInteraction : false,
        paginationClickable :true
    })
	//返回顶部
    // $(".back-top").click(function(){$("#quickbar-wrap-body,body").animate({scrollTop :0}, 800)})

  // 分类
    	$(".more").click(function(){
      		$(".nnav").slideToggle()	
      		$(this).toggleClass("more_h");
    	})
	// 二级导航下拉
      $(".icon").click(function(){
          $(".menu_head").toggleClass("cur")
          $(".menu_body").slideToggle()
          $(".font").slideUp()    
      })
  // 三级导航下拉
      $(".icont").click(function(){
          $(".menu_body").toggleClass("ercur")
          $(".menu_thr").slideToggle()
          $(".font").slideUp()    
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
    // prodt滚动
    $(".swiper-prodt").swiper({
        pagination: '.swiper-dot ul',
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        paginationElement : 'li',
        effect:'coverflow',
    })
    
});
  
