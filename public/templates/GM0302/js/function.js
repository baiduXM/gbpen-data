$(document).ready(function(){
   /* 外层tab切换 */
    //  var mySwiper = new Swiper('.swiper-container2',{
    //     autoHeight: true,
    //     onSlideChangeStart: function(){
    //       $(".tabs .default").removeClass('default');
    //       $(".tabs li").eq(mySwiper.activeIndex).addClass('default');
    //     }
    // });
     $(".tabs li").on('click',function(e){
        e.preventDefault();
        $(".tabs .default").removeClass('default');
        $(this).addClass('default');
        mySwiper.swipeTo($(this).index());
      });
      $(".tabs li").click(function(e){
        e.preventDefault();
      });
   
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
    $("#quickbar #quickbar-navs-btn,.iconfont,.dh").on('click',function(){
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
        // paginationElement : 'li',
    }) 

   
   // prodt滚动
    $(".swiper-prodt").swiper({
        pagination: '.swiper-dot ul',
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        paginationElement : 'li',
        effect:'coverflow',
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
    //字体上下拉结束

   
    
  });
  
