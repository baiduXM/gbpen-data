$(document).ready(function(){
	
	
	//返回顶部
    $(".back-top").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})
   

   
	//banner滚动
	TouchSlide({
		slideCell:"#slideBox",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul", 
        effect:"leftLoop", 
        prevCell:".slide_left",
        nextCell:".slide_right",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:10000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

    });
	$(".more2").click(function(){

		$(".hide-class").slideToggle()	
		$(".more2 i").toggleClass("down");
	})
	// 产品展示    
	TouchSlide({
		slideCell:"#picScroll",
        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd ul", 
        effect:"leftLoop", 
        prevCell:".slide_left",
        nextCell:".slide_right",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:6000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

    });
    // prodt滚动
    TouchSlide({
        slideCell:"#slideBox2",
        titCell:".hd2 ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell:".bd2 ul", 
        effect:"leftLoop", 
        prevCell:".slide_left",
        nextCell:".slide_right",
        autoPage:true,//自动分页
        autoPlay:true,
        interTime:6000,//自动播放)
        pnLoop:"ture" // 前后按钮不循环

    });
    $(".icon").click(function(){
        $(".menu_body").slideToggle(100)
        $(".font").slideUp()
        $(".icon1").hide()
        $(".icon2").show()    
    })
   

   //字体上下拉开始
   $(".span,.span1").click(function(){
        $("#up").hide()
        $("#down").show()
        $(".hide-class").removeClass("hide-class1")
        $(".span > ul,.span1 > ul").slideToggle()
        $(".hide-class").slideUp()  
    })
    $(".span ul li.zi1,.span1 ul li.zi1").click(function(){
        $(".edite").attr('class',"edite span-zi1")  
       
    })
    $(".span ul li.zi2,.span1 ul li.zi2").click(function(){
        $(".edite").attr('class',"edite span-zi2")
       
    })
    $(".span ul li.zi3,.span1 ul li.zi3").click(function(){
        $(".edite").attr('class',"edite span-zi3")
    })      
    //字体上下拉结束


   //隐藏导航跟wrap的切换
    $("#quickbar #quickbar-navs-btn,.top .iconfont").on('click',function(){
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

});
  
