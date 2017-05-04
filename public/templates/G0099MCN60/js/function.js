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
    $("#quickbar #quickbar-navs-btn,.iconfont").on('click',function(){
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
	//返回顶部
    $(".back-top").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})

  // 分类
    	$(".more").click(function(){
      		$(".nnav").slideToggle()	
      		$(".more2 i").toggleClass("down");
    	})
	// 二级导航下拉
      $(".icon").click(function(){
          $(".menu_body").slideToggle()
          $(".font").slideUp()
          $(".icon1").hide()
          $(".icon2").show()    
      })
  // prodt滚动
    TouchSlide({
        slideCell:"#slideBox2",
        titCell:".hd2 ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd2 ul", 
        effect:"leftLoop", 
        prevCell:".prev",
        nextCell:".next",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:6000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

    });
    

   //字体上下拉开始
   // $(".span").click(function(){
   //      $("#up").hide()
   //      $("#down").show()
   //      $(".nnav").removeClass("hide-class1")
   //      $(".span > ul").slideToggle()
   //      $(".nnav").slideUp()  
   //  })
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
  
