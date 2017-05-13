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
	
	 

    //banner滚动
    $(".swiper-banner").swiper({
        pagination: '.swiper-dote ul',
        autoplay : 2500,
        paginationClickable :true,
        paginationElement : 'li',
    }) 

  // 产品展示
    $(".swiper-pro").swiper({
        pagination: '.swiper-dot ul',
        slidesPerView: 2,
        slidesPerGroup : 2,
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        spaceBetween: 11,
        paginationElement : 'li',
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

  // prodt滚动
    $(".swiper-prodt").swiper({
        pagination: '.swiper-dot ul',
        autoplay : 2500,
        autoplayDisableOnInteraction : false,
        paginationClickable :true,
        // spaceBetween: 11,
        paginationElement : 'li',
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

   
  });
  
