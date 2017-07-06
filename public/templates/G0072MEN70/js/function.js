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

		$(".nnav").slideToggle()	
		$(".more2 i").toggleClass("down");
	})
	
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
        $(".menu_body").slideToggle()
        $(".font").slideUp()
        $(".icon1").hide()
        $(".icon2").show()    
    })
   

   //字体上下拉开始
   $(".span").click(function(){
        $("#up").hide()
        $("#down").show()
        $(".nnav").removeClass("hide-class1")
        $(".span > ul").slideToggle()
        $(".nnav").slideUp()  
    })
    $(".span ul li.zi1").click(function(){
        $(".edite").attr('class',"edite span-zi1")  
       
    })
    $(".span ul li.zi2").click(function(){
        $(".edite").attr('class',"edite span-zi2")
       
    })
    $(".span ul li.zi3").click(function(){
        $(".edite").attr('class',"edite span-zi3")
    })      
    //字体上下拉结束

  });
  
